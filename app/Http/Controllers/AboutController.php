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
        $abouts = DB::table('abouts')->orderBy('id', 'DESC');
        $abouts = $abouts->get();

        return view('about.about', compact(['abouts']));
    }
}
