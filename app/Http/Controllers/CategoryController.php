<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
class CategoryController extends Controller
{
    //
    public function index($id){
        $jobs = Category::find($id)->jobs()->get(); 
        // dd($jobs); 
        return view('categories.index' , compact('jobs'));

    }
    public function titles($id){
        $titles = DB::table("titles")->where("categories_id",$id)->pluck("name","id");
        //dd
        return json_encode($titles);


    }
}
