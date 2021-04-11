<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contacts');
    }
    
    public function store(Request $request){
        Contact::create($request->all()); 
        return back()->with('danger' , 'Thanks for your contact , The Support team will contact you ');
    } 
}
