<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City; 
use App\Title; 
use App\Category; 
use App\Nature; 
use App\Job;
use Auth; 
use App\Notifications\BackendNotifications; 
class JobController extends Controller
{
    //

    use BackendNotifications;

    public function __construct(){
        $this->middleware('auth')->only('apply'); 
    }

    public function index(){
        $cities = City::all(); 
        $titles = Title::all(); 
        $categories = Category::all(); 
        $natures = Nature::all(); 
        $jobs = Job::active()->get(); 
   //     dd($jobs,$cities,$titles ,  $categories,$natures);
        return view('jobs.index' , compact('jobs', 'cities','titles','categories','natures')); 
    }
    public function show($id){
        $job = Job::find($id); 
        return view('jobs.show' , compact('job'));
    }
    //job.apply
    public function apply(Request $request , $id){
  //      dd($id); 
        $job = Job::find($id); 
        //$user->roles()->attach($roleId);

        $job->users()->attach(Auth::user()->id , ['message' => $request->message] ); 
        $this->client_apply_job(); 
        return back()->with('danger' , 'You have applied for this Job , All the Best 💘'); 
    }
}
