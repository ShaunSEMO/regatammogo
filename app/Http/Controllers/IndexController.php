<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\UpcomingEvent;
use App\Program;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class IndexController extends Controller
{
    public function index(){

      $abouts = DB::table('abouts')->orderBy('id', 'DESC')->limit(1);
      $abouts = $abouts->get();
      $events = DB::table('upcoming_events')->orderBy('id', 'DESC');
      $events = $events->get();
      $programs = DB::table('programs')->orderBy('id', 'DESC');
      $programs = $programs->get();

      return view('home.home', compact(['abouts', 'events', 'programs']));
    }
}
