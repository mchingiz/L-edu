<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  public function user(){
    return $this->belongsTo('App\User');
  }

  public function action_type(){
    return $this->belongsTo('App\ActionType');
  }

  public function loggable(){
    return $this->morphTo();
  }
}
