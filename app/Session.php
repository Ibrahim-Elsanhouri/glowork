<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon; 
class Session extends Model
{
    //

    public function instructor(){
        return $this->belongsTo('App\Instructor' , 'instructors_id');
    }
    public function scopePublished($query){
        return $query->where('published', 1); 
    }
    public function total_price(){
        $price = $this->price; 
        $vat = $price * 0.15; 
        $total_price = $price + $vat; 
        return  $total_price; 
    }
    public function vat(){
        $price = $this->price; 
        $vat = $price * 0.15; 
        return $vat; 
    }
    public function scopeValid($query){
        $mytime = Carbon\Carbon::now();
       
        return $query->where('start_time','>',  $mytime->toDateTimeString()); 

    }
    public function users(){
        return $this->belongsToMany('App\User' , 'sessions_users' , 'sessions_id' ,  'users_id'  ); 

    }
    
}
