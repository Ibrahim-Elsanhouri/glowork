<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function jobs(){
        return $this->hasMany('App\Job' , 'categories_id');
    }
    public function titles(){
        return $this->hasMany('App\Title' , 'categories_id');
    }
}
