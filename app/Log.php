<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  protected $fillable=['user_type','user_id','action_type_id','loggable_type','loggable_id'];

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
