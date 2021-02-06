<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class CityController extends Controller
{
    //
    public function index($id){
        $jobs = City::find($id)->jobs()->get(); 
   //     dd($jobs); 
        return view('cities.index' , compact('jobs'));

    }
}
