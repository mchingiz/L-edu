@extends('layouts/layout')

@section('title')
  Company
@endsection

@section('content')

<section id="company-profile" class="container-fluid" style="padding-top:85px">

  <section id="company">

    <div id="background" style="background-image: url({{url('/assets/companyCoverPhotos/'.$company->cover_photo)}})"></div>
    <div class="info-bar">
      <div class="container">
        <div class="col-md-6 col-sm-8 col-xs-12">
          <img src="{{url('/assets/companyProfilePictures/'.$company->logo)}}">
          <h1> {{$company->user->name}}<br>
          <span> {{$company->followers->count()}} followers | {{\App\Post::where('approved', '1')->where('company_id',$company->id)->count()}} posts</span>
        </div>

        <div class="buttons col-md-6 col-sm-4 col-xs-12">
          @if(Auth::guest())
          <a href="#" id="login" class="button-custom button-follow" ><i class="fa fa-user-plus"></i>Follow</a>
          @elseif(Auth::user()->user_type=="user" && $isFollowed==null)
          <button id="follow" value="{{$company->id}}" class="button-custom button-follow" ><i class="fa fa-user-plus"></i>Follow</button>
          @elseif(Auth::user()->user_type=="user" && $isFollowed!=null)
          <button id="unfollow" value="{{$company->id}}" class="button-custom button-unfollow" >Unfollow</button>
          @endif
          @yield('tab')
      </div>
      </div>
    </div>
  </section>
  <div class="vertical-div"></div>
  <div style="clear:both"></div>
  @yield('company-content')
  <div class="vertical-div"></div>
</section>
@endsection
