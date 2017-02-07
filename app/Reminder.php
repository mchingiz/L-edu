<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reminder extends Authenticatable
{
    use SoftDeletes;

    protected $fillable=['user_id','post_id','reminder_time'];
    protected $dates = ['reminder_time','delete_at'];
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function post(){
      return $this->belongsTo('App\Post');
    }


}
