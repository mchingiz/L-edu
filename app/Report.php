<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  public function report_type(){
    return $this->belongsTo('App\ReportType');
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
