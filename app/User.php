<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' ,  'mobile', 'categories_id','identified'
         , 'qualification','gyear','experience','skills'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function category(){
        return $this->belongsTo('App\Category' , 'categories_id');
    }
     public function jobs(){
         return $this->belongsToMany('App\Job' , 'jobs_users' , 'users_id' , 'jobs_id' ); 

     }
     public function sessions(){
        return $this->belongsToMany('App\Session' , 'sessions_users' , 'users_id' , 'sessions_id' )->withPivot('confirmed'); 

    }
}
