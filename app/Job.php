<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    public function scopeActive($query){
        return $query->where('status' , 'active');
    }
    public function category(){
        return $this->belongsTo('App\Category' , 'categories_id');
    }
    public function city(){
        return $this->belongsTo('App\City' , 'cities_id');
    }
    public function nature(){
        return $this->belongsTo('App\Nature' , 'natures_id');
    }
    public function title(){
        return $this->belongsTo('App\Title' , 'titles_id');
    }
    public function users(){
        return $this->belongsToMany('App\User' , 'jobs_users' , 'jobs_id' ,  'users_id'  ); 

    }
}
