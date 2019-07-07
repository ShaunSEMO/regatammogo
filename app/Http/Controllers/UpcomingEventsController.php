<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpcomingEvent;
use DB;

class UpcomingEventsController extends Controller
{
    public function index() {
        $events = DB::table('upcoming_events')->orderBy('id', 'DESC');
        $events = $events->get();

        return view('upcomingEvents.upcomingEvents', compact(['events']));
    }
}
