<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = DB::table('about')->orderBy('id', 'DESC');
        $abouts = $abouts->get();

        return view('home.about', compact(['abouts']));
    }
}
