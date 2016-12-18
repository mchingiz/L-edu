<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'user_id','info','slug','logo', 'email','facebook','twitter','linkedin','instagram','phone1','phone2','fax','address','website','cover_photo'
  ];
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function posts(){
      return $this->hasMany('App\Post');
    }

    public function followers(){
      return $this->belongsToMany('App\User', 'followers', 'company_id', 'user_id');
    }

    public function reports(){
      return $this->hasMany('App\Report');
    }

    public function logs(){
      return $this->morphMany('App\Log','loggable');
    }
}
