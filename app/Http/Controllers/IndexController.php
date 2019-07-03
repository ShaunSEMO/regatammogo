<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Post;
use App\Picture;
use App\Item;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class IndexController extends Controller
{
    public function index(){

      $abouts = DB::table('abouts')->orderBy('id', 'DESC')->limit(1);
      $abouts = $abouts->get();
      
      $posts = DB::table('posts')->orderBy('id', 'DESC')->limit(3);
      $posts = $posts->get();

      $pictures = DB::table('pictures')->orderBy('id', 'DESC')->limit(6);
      $pictures = $pictures->get();

      $items = DB::table('items')->orderBy('id', 'DESC')->limit(6);
      $items = $items->get();

      return view('home.home', compact(['abouts', 'posts', 'pictures', 'items']));
    }
}
