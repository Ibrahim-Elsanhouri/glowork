<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff; 
class StaffController extends Controller
{
    //
    public function create(){
     //   dd('this'); 
        return view('staff.create'); 
    }
    public function store(Request $request){

Staff::create($request->all()); 
return back()->with('danger' , 'Your request has been submitted , we will contact you as soon as possible 💖');
     //   return view('staffs.create'); 

    }
}
