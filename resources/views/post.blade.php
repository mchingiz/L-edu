@extends('layouts/layout')

@section('title')
  {{$post->title}}
@endsection
@section('script-top')
<script src="{{url('/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
@if( !Auth::guest() && Auth::user()->user_type=="user")
<script src="{{url('/assets/js/PostAjax.js')}}"></script>
<script src="{{url('/assets/js/reminder.js')}}"></script>
@endif
@if(Auth::guest())
<script src="{{url('/assets/js/login.js')}}"></script>
<script src="{{url('/assets/js/login_ajax.js')}}"></script>
@endif
<script src="{{url('/assets/js/vendor/moment.js')}}"></script>
<script src="{{url('/assets/js/vendor/collapse.js')}}"></script>
<script src="{{url('/assets/js/vendor/transition.js')}}"></script>
<script src="{{url('/assets/js/vendor/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{url('/assets/js/vendor/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
@section('css')
<link rel="stylesheet" href="{{url('/assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('head')
  <script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
@endsection

@section('content')

<div class="margin-top-div"></div>

<section id="post" class="container">
    <div class="col-md-8">
        <div class="single-post">
          <div class="single-post-image">
            <img src="/assets/postPhotos/{{$post->image}}">
          </div>
          <div class="single-post-desc">
            <h2>
              {{$post->title}}
            </h2>
            <ul class="list-unstyled list-inline">
              <li>
                <a href=""><i class="material-icons">business</i>{{$post->company->user->name}}</a>
              </li>
              <li>
                <a href="{{$post->category->menu->link}}"><i class="material-icons">folder</i>{{$post->category->name}}</a><span>
                @if($post->subcategory_id != '0')
                  /
                  </span><a href="{{$post->subcategory->link}}"> {{$post->subcategory->name}} </a>
                @endif
              </li>
              <li>
                <i class="material-icons">date_range</i>
                <span>{{ $post->created_at->format('d F Y') }}</span>
              </li>
              <li>
                <i class="material-icons">remove_red_eye</i>
                <span>{{$post->view}}</span>
              </li>
            </ul>
          </div>
          <div class="single-post-body">

            @if($post->company->approved == 0)
              <div class="alert alert-warning">
                <span>
                  This post is only visible to you, <span class="bold">not to users</span>. Because your company's account has not been approved yet.
                </span>
              </div>
            @elseif($post->approved==0 && $post->refused == 1)
              <div id="refuseReason">
                <div class="alert alert-danger">
                  <span class="bold">Post has been refused. Because:<br></span>
                  {!! $post->refuse_reason !!}
                </div>
              </div>
            @elseif($post->approved==0 && $post->refused == 0 && $user->user_type == 'company' )
              <div class="alert alert-warning">
                <span>
                  This post is only visible to you, <span class="bold">not to users</span>. Because your company's account has not been approved yet.
                </span>
              </div>
            @elseif($post->approved==0 && $post->refused == 0 && ($user->user_type == 'admin' || $user->user_type == 'moderator'))
              <div class="alert alert-warning">
                <span>
                  This post has not been approved yet.
                </span>
              </div>
            @endif

            <p>{!!$post->body!!}</p>
            @if(!empty( $post->deadline))
               <span id="deadline"> <i class="material-icons ">error_outline</i> Deadline : </span><span>{{ $post->deadline->format('d F Y H:i') }}</span>
            @endif
          </div>
          <div class="single-post-extra">
              <ul class="list-unstyled list-inline tags">
                @foreach( $post->tags as $tag)
                <li><a href="{{ url('/tag/'.$tag->slug )}}">{{$tag->name}}</a></li>
                @endforeach
              </ul>
          </div>

          @if( $post->approved == 0) <!-- It means post is refused and company has not made any change yet-->
            @if($post->refused == 0)

            @elseif($post->refused == 1)

            @endif
          @endif

          <div class="buttons clearfix">
            @if ( Auth::guest())
              <button  class="login btn btn-success"> Add Reminder</button>
              <button   class="login btn btn-success"> Save Post</button>
            @elseif ( $user->user_type=="user")
              <button id="save-post" value="{{( $isSaved!=null )  ? $isSaved->id : $post->id}}" class="btn btn-success">{{( $isSaved!=null )  ? 'Unsave' : 'Save Post'}}</button>
              @if($isReminderAdded==null)
              <button id="add-reminder"  class="btn btn-success">Add Reminder</button>
              @else
              <button id="delete-reminder" value="{{$isReminderAdded->id}}" class="btn btn-success">Delete Reminder</button>
              @endif
            @elseif ( $user->user_type=="admin" || $user->user_type=="moderator")
              @if( $post->refused == 0)
                @if( $post->approved == 0)
                  <form class="" action="{{ url('/approvePost/'.$post->id )}}" method="post">{{ csrf_field() }}
                    <input class="btn btn-success" type="submit" name="approve" value="Approve">
                  </form>
                @endif
                  <button class="btn btn-warning" name="refuse">Refuse</button>
              @endif
            @endif
              <a href="#" class="btn btn-danger pull-right"> Report</a>
          </div>

            <div class="refuse">
              <form class="" action="{{url('/refusePost/'.$post->id)}}" method="post">{{csrf_field()}}
                <div class="form-group">
                  <p>What is the problem,man?</p>
                  <textarea class="form-control" name="refuse_reason" id="editor1" rows="10" cols="80" required></textarea>
                  <script>
                  CKEDITOR.replace('editor1');
                  </script>
                </div>

                <div class="form-group clearfix">
                  <button type="submit" name="submit" class="btn btn-default pull-right">Submit</button>
                </div>

              </form>
            </div>
        </div>

      <div class="vertical-div"></div>

      <div id="company-posts">

        <h2>
          Related posts
        </h2>
        @foreach($OtherPosts as $otherPost)
        <div class="h-post-item col-md-12">
          <div class="col-md-3 h-post-image">
            <img src="/assets/images/image2.jpg">
          </div>
          <div class="col-md-9 h-post-desc">
            <a href="/post/{{$otherPost->slug}}">{{$otherPost->title}}</a>
            <p>{{str_limit($otherPost->body, $limit = 250, $end = '...')}}</p>
            @if( !empty($otherPost->deadline ))
            <i class="material-icons">date_range</i>
            <span>Deadline: {{ $otherPost->deadline->format('d F Y') }}</span>
            @endif
          </div>
        </div>
        @endforeach


      </div>
    </div>
    <div class="col-md-4">
      <div class="vertical-div row hidden-md hidden-lg"></div>
      <section id= "author" class="right-bar row">
        <div class="heading col-md-12 col-xs-12 col-sm-12">
            <h3>Author</h3>
        </div>
        <div class="body col-md-12 col-xs-12 col-sm-12  text-center">
          <div class="col-md-6 col-md-offset-3 col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3 img-box">
            <img src="/assets/images/azercell.jpg">
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <a href="#"><h4>{{$post->company->user->name}}</h4></a>
            <a class="button-custom col-md-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 col-md-offset-4" href="#">Follow</a>
            <div class="row" style="clear:both">
              <p>{{$post->company->info}}</p>
            </div>
          </div>
        </div>
      </section>

      <div class="vertical-div"></div>

      <section id= "rightBarPosts" class="right-bar row">
        <div class="heading col-md-12 col-sm-12 col-xs-12">
            <h3>Most viewed posts</h3>
        </div>
        <div class="body col-md-12 col-sm-12 col-xs-12">
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
      <section class="right-bar row">
        <div class="advertisement-md-4 col-md-12 hidden-sm hidden-xs">
          <img src="/assets/images/advert2.jpg">
        </div>
      </section>
    </div>
</section>
<div id="overlay"></div>
@endsection
@section('pop-up')
@if(!Auth::guest() && Auth::user()->user_type=="user")
<div  id="reminder-form" class="col-md-6 col-md-offset-3">
  <h1>Select date and time:</h1>
  <div class="col-md-8 col-md-offset-2 input-group">
    <input type='text' class="form-control" id='datetimepicker4' name="datetime" />
      <span class="input-group-btn">
        <button class="btn btn-secondary" value="{{$post->id}}" type="button">Ok</button>
      </span>


      <script type="text/javascript">
        $(function () {
            $('#datetimepicker4').datetimepicker();
        });

          $('#datetimepicker4').datetimepicker({
              format: 'YYYY-MM-DD HH:mm'
        });

      </script>
  </div>
</div>
<div id="success" class="col-md-6 col-md-offset-3">
    <p><i class="material-icons">done</i>Reminder added. We will send mail to you about it</p>
</div>
@endif
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
  <script src="{{url('/assets/js/vendor/moment.js')}}"></script>
  <script src="{{url('/assets/js/refuse.js')}}"></script>
@endsection
