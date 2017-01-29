@extends('layouts/companyProfile')

@section('company-content')
<section id="company-posts" class="container">

  @foreach($company->posts as $post)
  @if($post->approved==1)
  <div class="col-md-4 col-xs-12 col-sm-6">
    <div class="post-item {{$post->deadline->gt(Carbon\Carbon::now())  ? 'green-border-bottom' : 'red-border-bottom'}} ">
      <div class="img-box">
        <img src="/assets/postPhotos/{{$post->image}}">
      </div>
      <div class="post-item-desc">
        <a href="{{ url('/post/'.$post->slug) }}">{{$post->title}}</a>
      </div>
      <div class="post-item-details">
        <ul class="list-unstyled list-inline">
          <li>
            <i class="material-icons">date_range</i>
            <span>{{$post->created_at->format('d F Y')}}</span>
          </li>
          <li>
            <a href="#"><i class="material-icons">business</i>{{$post->company->user->name}}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  @endif
  @endforeach




</section>
@endsection

@section('script')
    <script src="{{url('/assets/js/alignItemsHeight-category.js')}}"></script>
    <script src="{{url('/assets/js/follow.js')}}"></script>
@endsection
