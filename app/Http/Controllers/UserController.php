<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
class UserController extends Controller
{
    //
    public function index(){
        return view('dashboard.index');

    }
    public function applied(){
        return view('dashboard.applied');

    }
    public function sessions(){
        return view('dashboard.sessions');

    }
    public function edit(){
        return view('dashboard.edit');

    }
    public function invoice($id){
        $session = Session::find($id);
        return view('dashboard.invoice' , compact('session'));

    }
}
