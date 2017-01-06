<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $fillable=['user_id','post_id','reminder_time'];
    protected $dates = ['reminder_time'];
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function post(){
      return $this->belongsTo('App\Post');
    }


}
