<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    //.

    public function jobs(){
        return $this->hasMany('App\Job' , 'natures_id');
    }
}
