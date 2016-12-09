

@extends('../layouts/auth')
@section('title')
  Sign Up
@endsection

@section('content')
<section id="register" class="container" style="margin-top:85px">
  <div class="col-md-8 col-md-offset-2 ">
    <div class="question text-center">
      <h3>What do you want to register as ?</h3>
    </div>
    <div class="vertical-div "></div>
    <div class="col-md-6 col-sm-5 text-center">
        <div class="user-type" style="margin-left:-15px;">
          <h2>Company</h2>
          <ul>
            <li>You can share posts</li>
            <li>You can share posts</li>
            <li>You can have followers</li>
          </ul>
          <a href="{{ url('/register/company') }}"> Sign Up </a>
      </div>
    </div>
    <div class="vertical-div hidden-sm hidden-md hidden-lg"></div>
    <div class="col-md-6 col-sm-5  text-center">
        <div class="user-type" style="margin-right:-15px;">
          <h2>User</h2>
          <ul>
            <li>You can save posts</li>
            <li>You can add reminders</li>
            <li>You can follow companies </li>
          </ul>
          <a href="{{ url('/register/user') }}"> Sign Up </a>
      </div>
    </div>
  </div>
</section>
<div class="vertical-div"></div>
@endsection
