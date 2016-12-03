<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function company(){
      return $this->hasOne('App\Company');
    }

    public function reminders(){
      return $this->hasMany('App\Reminder');
    }

    public function saved_posts(){
      return $this->belongsToMany('App\Post', 'saved_posts', 'user_id', 'post_id');
    }

    public function followings(){
      return $this->belongsToMany('App\Company', 'followers', 'user_id', 'company_id');
    }
}
