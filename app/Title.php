<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    public function jobs(){
        return $this->hasMany('App\Job' , 'titles_id');
    }
}
