<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use Auth;  
use App\Notifications\BackendNotifications; 

class SessionController extends Controller
{
    //
    use BackendNotifications;

    public function __constructor(){
        $this->middleware('auth')->only('reserve'); 
    }
    public function index(){
        $sessions = Session::published()->valid()->get(); 
 //    dd($sessions); 
        return view('sessions.index' , compact('sessions')); 
    }
    //
    public function show($id){
        $session = Session::find($id); 
 //    dd($session); 
        return view('sessions.show' , compact('session')); 
    }
    public function reserve(Request $request){
//dd(Auth::user());
        Auth::user()->sessions()->attach($request->sessions_id); 
        $this->client_reserve_session(); 
        return back()->with('danger'  ,  'Thanks for your order , The reservation will be confirmed after bank transfer ⏳'); 

    }
}
