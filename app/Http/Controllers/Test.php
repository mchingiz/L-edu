<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Company;
use App\Post;
use App\Category;
use App\Subcategory;
use App\Tag;
use App\Reminder;
use App\Saved_post;
use App\Report;
use App\ReportType;
use App\Log;
use App\LogType;

class Test extends Controller
{
  public function test(ReportType $test){
    return $test->reports;
  }
}
