<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable=['post_id','tag_id'];

  public function posts(){
    return $this->belongsToMany('App\Post');
  }
  public function logs(){
    return $this->morphMany('App\Log','loggable');
  }
}
