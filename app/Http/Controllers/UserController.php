<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use Auth; 
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
    public function update(Request $request){
      //  return view('dashboard.edit');
      $user = Auth::user(); 
      $user->name = $request->name; 
      $user->email  = $request->email; 
      $user->mobile = $request->mobile; 
      $user->identified = $request->identified; 
      $user->categories_id = $request->categories_id; 
      $user->skills = $request->skills; 
      $user->experience = $request->experience; 
      $user->qualification = $request->qualification; 
      $user->save(); 
      return redirect('dashboard/index'); 


    }
    public function invoice($id){
        $session = Session::find($id);
        return view('dashboard.invoice' , compact('session'));

    }
}
