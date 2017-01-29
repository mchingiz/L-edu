@extends('adminPanel/layout')

@section('title')
  Companies
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h3>Users</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if( collect($companies)->isEmpty() )
        <h4>There is nothing to show</h4>
      @else
      <table class="table" id="table">
      <thead>
        <tr>
            <th class="text-center">U #</th>
            <th class="text-center">C #</th>
            <th class="text-center">Name</th>
            <th class="text-center">Logo</th>
            <th class="text-center">E-Mail</th>
            <th class="text-center">Number of posts</th>
            <th class="text-center">Total views to posts</th>
            <th class="text-center"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($companies as $company)
          <tr>
              <td class="text-center">{{$company->user->id}}</td>
              <td class="text-center">{{$company->id}}</td>
              <td class="text-center">{{$company->user->name}}</td>
              <td class="text-center">
                <img src="{{url('/assets/companyProfilePictures/'.$company->logo)}}" alt="{{$company->user->name}}" style="height:50px">
              </td>
              <td class="text-center">{{$company->user->email}}</td>
              <td class="text-center">{{$company->posts->count()}}</td>
              <td class="text-center">{{$company->posts->sum('view')}}</td>
              <td class="text-center">
                <a href="">
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
