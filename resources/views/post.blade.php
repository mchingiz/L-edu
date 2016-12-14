@extends('layouts/layout')

@section('title')
  Post
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
                <a href="{{$post->category->menu->link}}"><i class="material-icons">folder</i>{{$post->category->name}}</a><span> / </span><a href="{{$post->subcategory->link}}"> {{$post->subcategory->name}} </a>
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
            <p>{{$post->body}}</p>
            @if(!empty( $post->deadline))
               <span id="deadline"> <i class="material-icons ">error_outline</i> Deadline : </span><span>{{ $post->deadline->format('d F Y H:i') }}</span>
            @endif

          </div>
          <div class="single-post-extra">
              <ul class="list-unstyled list-inline tags">
                @foreach( $post->tags as $tag)
                <li><a href="">{{$tag->name}}</a></li>
                @endforeach
              </ul>
          </div>

          <div class="buttons">
            @if ( Auth::guest())
            <a href="/login" class="btn btn-success"> Add Reminder</a>
            <a href="/login" class="btn btn-success"> Save Post</a>
            @elseif ( $user->user_type=="user")

            <button id="save-post" value="{{( $isSaved!=null )  ? $isSaved->id : $post->id}}" class="btn btn-success">{{( $isSaved!=null )  ? 'Unsave' : 'Save Post'}}</button>
            <button id="add-reminder"  class="btn btn-success">Add Reminder</button>
            @endif
            <a href="#" class="btn btn-danger pull-right"> Report</a>
          </div>
        </div>

      <div class="vertical-div"></div>

      <div id="company-posts">

        <h2>
          Related posts
        </h2>
        @foreach($OtherPosts as $post)
        <div class="h-post-item col-md-12">
          <div class="col-md-3 h-post-image">
            <img src="/assets/images/image2.jpg">
          </div>
          <div class="col-md-9 h-post-desc">
            <a href="/post/{{$post->slug}}">{{$post->title}}</a>
            <p>{{str_limit($post->body, $limit = 250, $end = '...')}}</p>
            @if( !empty($post->deadline ))
            <i class="material-icons">date_range</i>
            <span>Deadline: {{ $post->deadline->format('d F Y') }}</span>
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
@endsection
@section('script')
  <script src="{{url('/assets/js/Postajax.js')}}"></script>
  <script src="{{url('/assets/js/vendor/moment.js')}}"></script>
@endsection
