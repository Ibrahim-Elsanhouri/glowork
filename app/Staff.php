<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $guarded = [];
    public function category(){
return $this->belongsTo('App\Category' , 'categories_id');
    }
    public function city(){
        return $this->belongsTo('App\City' , 'cities_id');

    }
}
