<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saved_post extends Model
{
  protected $fillable = [
    'user_id','post_id'
  ];
}
