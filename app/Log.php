<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  public function log_type(){
    return $this->belongsTo('App\LogType');
  }

  public function company(){
    return $this->belongsTo('App\Company');
  }

  public function post(){
    return $this->belongsTo('App\Post');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
