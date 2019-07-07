<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use DB;

class ProgramsController extends Controller
{
    public function index(){
        $programs = DB::table('programs')->orderBy('id', 'DESC');
        $programs = $programs->get();
        
        return view('programs.programs', compact(['programs']));
    }
}
