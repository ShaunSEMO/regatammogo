<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Picture;
use App\About;
use App\Item;
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
        $posts = DB::table('posts')->orderBy('id', 'DESC')->paginate(3);
        $pictures = DB::table('pictures')->orderBy('id', 'DESC')->paginate(3);
        $items = DB::table('items')->orderBy('id', 'DESC')->paginate(3);

        return view('dashboard.admin', compact(['posts', 'pictures', 'abouts', 'items']));
    }


    // blog functions

    public function createPost()
    {
        return view('dashboard.blog.createpost');
    }

    public function storePost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',
            'title' => 'required',
            'body' => 'required',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/blogimages', $filenameWithExt);

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
        $post = new Post;
        $post->image = 'storage/img/blogimages/'.$request->file('image')->getClientOriginalName();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.blog.editpost', compact(['post']));

    }

    public function updatePost(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/blogimages', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        $post = Post::find($id);
        $img = $request->file('image');
        if ($img != null) {
            $post->image = 'storage/img/blogimages/'.$img->getClientOriginalName();
        } else {
            $post->image = $post->image;
        }
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function destroyPost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/t@k3m3t0@dm!n');

    }

    // gallery functions
    public function createPicture()
    {
        return view('dashboard.gallery.createpicture');
    }

    public function storePicture(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|max:1999',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/galleryimages', $filenameWithExt);

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
        $picture = new Picture;
        $picture->image = 'storage/img/galleryimages/'.$request->file('image')->getClientOriginalName();
        $picture->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    public function destroyPicture($id)
    {
        $picture = Picture::find($id);
        $picture->delete();
        return redirect('/t@k3m3t0@dm!n');

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
            $path = $request->file('image')->storeAs('public/img/blogimages', $filenameWithExt);

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
        $about->image = 'storage/img/blogimages/'.$request->file('image')->getClientOriginalName();
        $about->body = $request->input('body');
        $about->save();

        return redirect('/t@k3m3t0@dm!n');
    }

    //SHOP FUNCTIONS

    public function addItem() {
        return view('shop.addItem');
    }

    public function storeItem(Request $request) {
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/shopimages', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        //Store new item
        $item = new Item;
        $item->image = 'storage/img/shopimages/'.$request->file('image')->getClientOriginalName();
        $item->name = $request->input('name');
        $item->color = $request->input('color');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->save();

        return redirect('/t@k3m3t0@dm!n');
        
    }

    public function editItem($id) {
        $item = Item::find($id);
        return view('shop.editItem', compact(['item']));
    }

    public function updateItem(Request $request, $id) {

        $this->validate($request, [
            'image' => 'required',
        ]);

        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/blogimages', $filenameWithExt);

            //Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // //Get just the extension
            // $extension = $request->file('image')->getOriginalClientExtension();
            // // Filename to store

            // $fileNameToStore = $filename.$extension;
        } else {
            $fileNameToStore = 'No image here.';
        }

        $item = Item::find($id);
        $item->image = 'storage/img/blogimages/'.$request->file('image')->getClientOriginalName();
        $item->name = $request->input('name');
        $item->color = $request->input('color');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->save();

        return redirect('/t@k3m3t0@dm!n');
          
    }

    public function deleteItem($id) {
        $item = Item::find($id);
        $item->delete();
        return redirect('/t@k3m3t0@dm!n');
    }
    
}
