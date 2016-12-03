<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  public function posts(){
    return $this->hasMany('App\Post');
  }

  public function category(){
    return $this->belongsTo('App\Category');
  }
}
