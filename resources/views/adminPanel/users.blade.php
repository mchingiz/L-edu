@extends('adminPanel/layout')

@section('title')
  Users
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h3>Users</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if( collect($users)->isEmpty() )
        <h4>There is nothing to show</h4>
      @else
      <table class="table" id="table">
      <thead>
          <tr>
              <th class="text-center">#</th>
              <th class="text-center">Name</th>
              <th class="text-center">Type</th>
              <th class="text-center">E-Mail</th>
              <th class="text-center"></th>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
            <tr>
                <td class="text-center">{{$user->id}}</td>
                <td class="text-center">{{$user->name}}</td>
                <td class="text-center">
                  <?php
                  switch($user->user_type){
                    case "user":
                      echo '<small class="label pull-right bg-red">user</small>';
                      break;
                    case 'company':
                      echo '<small class="label pull-right bg-blue">company</small>';
                      break;
                    case 'moderator':
                      echo '<small class="label pull-right bg-yellow">moderator</small>';
                      break;
                    case 'admin':
                      echo '<small class="label pull-right bg-red">admin</small>';
                      break;
                  }
                  ?>
                </td>
                <td class="text-center">{{$user->email}}</td>
                <td class="text-center">
                  <a href="{{url('/editPost/'.$user->id)}}">
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>
                </td>
            </tr>
          @endforeach
      </tbody>
      </table>
      @endif
    </div>
  </div>
@endsection
