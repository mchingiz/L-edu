@extends('layouts/layout')
@section('head')

@endsection
@section('title')
  Educive
@endsection

@section('content')
<div class="margin-top-div"></div>

<div id="search" class="list container">
  <div class="row">
    <section id="left-side" class="col-md-8 col-xs-12 col-sm-12">
      <h1 id="key"> You searched for  <b>{{$search_key}}</b><h1> 
      <div class="vertical-div"></div>
      @if(!collect($results)->isEmpty() )
      @foreach($results as $result)
        @if( !empty( $result->name))
        <?php $company=$result ?>
        <div class="list-company hover-scale col-md-12 col-xs-12 col-sm-12">
        <img src="/assets/companyProfilePictures/azercell.jpg">
        <div class="company-info">
          <a  href="{{url('/company/'.$company->company->slug.'/posts')}}"><h1>{{$company->name}}</h1></a><br>
          <span>{{$company->company->followers->count()}} followers | {{$company->company->posts->count()}} posts</span>
        </div>
        <div class="follow-buttons">
          @if(Auth::guest())
          <button  class="login btn button-custom button-follow"><i class="fa fa-user-plus"></i>Follow </button>
          @elseif(Auth::user()->user_type=="user" && !Auth::user()->followings->contains($company->company->id) )
          <button id="follow" value="{{$company->company->id}}" class="btn button-custom button-follow" ><i class="fa fa-user-plus"></i>Follow</button>
          @elseif(Auth::user()->user_type=="user" && Auth::user()->followings->contains($company->company->id)  )
          <button id="unfollow" value="{{$company->company->id}}" class="btn button-custom button-unfollow" >Unfollow</button>
          @endif
        </div>
      </div>
      <div class="vertical-div"></div>
        @else
        <?php $post=$result ?>
      <div class="list-post hover-scale col-md-12 col-xs-12 col-sm-12">
        <a class="img-box col-md-4 col-sm-5 col-xs-12" href="{{ url('/post/'.$post->slug) }}">
          <img src="{{ url('/assets/images/'.$post->image) }}">
        </a>
        <div class="post-info col-md-8 col-sm-7 col-xs-12">
          <a href="{{ url('/post/'.$post->slug) }}"><h1>{{$post->title}}</h1></a>
          <!-- <p>{{ substr( $post->body,0,strpos($post->body, ' ', 200) ) }}...</p> -->
          <ul class="list-unstyled list-inline">
            <li>
              <i class="material-icons">date_range</i>
              <span>{{ $post->created_at->format('d F Y') }}</span>
            </li>
            <li>
              <a href="#"><i class="material-icons">business</i>{{$post->company->user->name}}</a>
            </li>
            <li>
              <i class="material-icons">remove_red_eye</i> <span>{{ $post->view}}</span>
            </li>
            <li>
              <i class="material-icons">folder_open</i><a href="#">{{$post->category->name}}</a>
              @if($post->subcategory_id != '0')
                  /
                  <a href="{{$post->subcategory->link}}"> {{$post->subcategory->name}} </a>
                @endif
            </li>
          </ul>
        </div>
      </div>
        @endif
      <div class="vertical-div"></div>
      @endforeach
      @endif
       {{ $results->links() }}
    </section><!--left-side-->
    <section id="right-side" class="col-md-4 col-sm-12 col-xs-12 ">

      <section class="right-bar row">
        <div class="advertisement-md-4 col-md-12 hidden-sm hidden-xs">
          <img src="/assets/images/advert2.jpg">
        </div>
      </section>

      <div class="vertical-div row hidden-xs hidden-sm"></div>

      <section id= "followUs" class="right-bar row">
        <div class="heading col-md-12 col-sm-6 col-md-12">
            <h3>Follow Us</h3>
        </div>
        <div class="body col-md-12 col-xs-12 col-sm-12">
          <div class="row">
            <div class="col-md-2 col-xs-2 col-sm-1">
              <a href="#"><i class="fa fa-facebook text-center" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-4">
              <span>54k</span>
              <span>fans</span>
            </div>
            <div class="col-md-2 col-xs-2 col-sm-1">
              <a href="#"><i class="fa fa-twitter text-center" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-3">
              <span>54k</span>
              <span>followers</span>
            </div>
          </div>
        </div>
      </section>

      <div class="vertical-div row"></div>

      <section id= "companies" class="right-bar row">
        <div class="heading col-md-12 col-xs-12 col-sm-12">
            <h3>Companies</h3>
        </div>
        <div class="body col-md-12 col-xs-12 col-sm-12">
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/azercell.jpg">
            </div>
            <div class="col-md-9 col-xs-9 col-sm-9">
              <a href="#">Azercell</a>
              <a href="#" class="button-custom">Follow</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/azelab.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#">Azelab</a>
              <a href="#" class="button-custom">Follow</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/nar.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#">Nar Mobile</a>
              <a href="#" class="button-custom">Follow</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/code.png">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#">Code Academy</a>
              <a href="#" class="button-custom">Follow</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/bbf.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#">Baku Business Factory</a>
              <a href="#" class="button-custom">Follow</a>
            </div>
          </div>
        </div>
      </section>

      <div class="vertical-div"></div>

      <section id= "rightBarPosts" class="right-bar row">
        <div class="heading col-md-12 col-sm-12 col-xs-12">
            <h3>Most Viewed News</h3>
        </div>
        <div class="body col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image7.png">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">The Graz International Summer School Seggau 2017</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">Azercell</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image56.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">Internship with the United Nations in Almaty for graduate students!</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">Azercell</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image56.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">"How has the European Film Festival changed my stereotypes about European culture?"</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">European Film Festival </a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image7.png">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">45 PhD Scholarships for International Students at University of Edinburgh in UK, 2017/2018</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">The University Of Edinburgh</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image1.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">Internship with the United Nations in Almaty for graduate students!</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">Azercell</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image56.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">Join Baku 2017 Volunteering Program and Build a Successful Future!</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">Baku 2017</a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image56.jpg">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">"How has the European Film Festival changed my stereotypes about European culture?"</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">European Film Festival </a>
            </div>
          </div>
          <div class="border"></div>
          <div class="row">
            <div class=" img-box col-md-3 col-sm-3 col-xs-3">
              <img src="/assets/images/image7.png">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="post-heading">45 PhD Scholarships for International Students at University of Edinburgh in UK, 2017/2018</a>
              <i class="material-icons">business</i>
              <a href="#" class="company">The University Of Edinburgh</a>
            </div>
          </div>
        </div>
      </section>
      <div class="vertical-div"></div>
    </section> <!--right-side-->

 </div> <!--row-->
</div> <!--content-->
@endsection
@section('pop-up')
@if( Auth::guest())
<div id="login-overlay" class="col-md-4 col-md-offset-4">
    <div class="col-md-10 col-md-offset-1">
      <h1> Login to your account</h1>
      <form class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
              <div class="col-md-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
              <div class="col-md-12">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
              <label class="pull-left">
                  <input type="checkbox" name="remember"> Remember Me
                </label>
                <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </div>
        <p class="text-danger" style="padding:10px 0"></p>
        <div class="form-group">
            <div class="col-md-12">
                <button id="login" onclick="return false;" class="btn col-md-12 col-sm-12 col-xs-12 ">Log in</button>
            </div>
        </div>
      </form>
      <span> Do not you have account? <a href="{{url('/register')}}">Sign Up!</a> </span>

      <span id="or" class="col-md-12"> or </span>
      <button id="facebook" class="btn col-md-12 col-sm-12 col-xs-12 "><i class=" fa fa-facebook"></i>Continue with Facebook</button>
      <button id="google" class="btn col-md-12 col-sm-12 col-xs-12 "><i class="fa fa-google-plus"></i>Continue with Google</button>
  </div>
</div>
@endif
@endsection
@section('script')
    <script src="{{url('/assets/js/follow2.js')}}"></script>
    @if(Auth::guest())
    <script src="{{url('/assets/js/login.js')}}"></script>
    <script src="{{url('/assets/js/login_ajax.js')}}"></script>
    @endif
@endsection
