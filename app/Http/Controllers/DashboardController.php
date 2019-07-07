<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\UpcomingEvent;
use App\Program;
// use App\Post;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $abouts = DB::table('abouts')->orderBy('id', 'DESC');
        $abouts = $abouts->get();
        $events = DB::table('upcoming_events')->orderBy('id', 'DESC');
        $events = $events->get();
        // $posts = DB::table('posts')->orderBy('id', 'DESC')->paginate(3);
        $programs = DB::table('programs')->orderBy('id', 'DESC');
        $programs = $programs->get();

        return view('dashboard.admin', compact(['abouts', 'events', 'programs']));
    }


    // About functions
    public function editAbout($id)
    {
        $about = About::find($id);
        return view('dashboard.about.editAbout', compact(['about']));

    }

    public function updateAbout(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/aboutimages/', $filenameWithExt);


            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        $about = About::find($id);
        $about->image = '/storage/img/aboutimages/'.$filenameWithExt;
        $about->body = $request->input('body');
        $about->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    // UPCOMING EVENTS FUNCTIONS

    public function createEvent()
    {
        return view('dashboard.upcomingevents.createEvent');
    }

    public function storeEvent(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',
            'place' => 'required',
            'date' => 'required',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/upcomingevents', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        //Create post
        $event = new UpcomingEvent;
        $event->image = 'storage/img/upcomingevents/'.$request->file('image')->getClientOriginalName();
        $event->place = $request->input('place');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function editEvent($id)
    {
        $event = UpcomingEvent::find($id);
        return view('dashboard.upcomingevents.editEvent', compact(['event']));

    }

    public function updateEvent(Request $request, $id)
    {
        $this->validate($request, [
            'place' => 'required',
            'date' => 'required',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/upcomingevents', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        //Create post
        $event = UpcomingEvent::find($id);
        $img = $request->file('image');
        if ($img != null) {
            $event->image = 'storage/img/blogimages/'.$img->getClientOriginalName();
        } else {
            $event->image = $event->image;
        }
        $event->place = $request->input('place');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function destroyEvent($id)
    {
        $event = UpcomingEvent::find($id);
        $event->delete();
        return redirect('/t@k3m3t0@dm!n');

    }

    // Programs functions

    public function createProgram() {
        return view('dashboard.programs.createProgram');
    }

    public function storeProgram(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',
            'title' => 'required',
            'description' => 'required',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/programpictures', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        //Create post
        $program = new Program;
        $program->image = 'storage/img/programpictures/'.$request->file('image')->getClientOriginalName();
        $program->title = $request->input('title');
        $program->body = $request->input('description');
        $program->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function editProgram($id)
    {
        $program = Program::find($id);
        return view('dashboard.programs.editProgram', compact(['program']));

    }

    public function updateProgram(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/programpictures', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        //Create post
        $program = Program::find($id);
        $img = $request->file('image');
        if ($img != null) {
            $program->image = 'storage/img/programpictures/'.$img->getClientOriginalName();
        } else {
            $program->image = $program->image;
        }
        $program->title = $request->input('title');
        $program->body = $request->input('description');
        $program->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function destroyProgram($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect('/t@k3m3t0@dm!n');

    }

}
