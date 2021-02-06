<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Job;

class EventController extends Controller
{
    //
    public function index(){
        // $posts = Post::orderBy('id', 'DESC')->get();
 
        $events = Event::orderBy('event_date', 'DESC')->get();
        $categories = Category::all(); 
        $jobs = Job::orderBy('id', 'DESC')->take(3)->get();

        return view('events.index' , compact('events' , 'categories' , 'jobs')); 
    }
}
