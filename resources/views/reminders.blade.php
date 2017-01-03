@extends('layouts/layout')

@section('title')
  Educive
@endsection

@section('content')
<div class="margin-top-div"></div>
<section id="reminders" class="container">
  @if($countPosts==0)
  <div id="empty" class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 text-center">
      <h3> You don't have any reminders </h3>
  </div>
  @else
  <div class="row">
      <div class="col-md-8 col-sm-8 no-padding">
        @foreach( Auth::user()->reminders as $reminder)
            <div class="col-md-6 col-xs-12 col-sm-12">
              <div class="post-item {{$reminder->post->deadline->gt(Carbon\Carbon::now())  ? 'green-border-bottom' : 'red-border-bottom'}} ">
                <div class="reminder-time">
                  <span>Remind Time </span>
                  <span>{{$reminder->reminder_time->format('d M')}}
                  </br>
                   {{$reminder->reminder_time->format('H:i')}}</span>
                </div>
                <div class="img-box">
                  <img src="/assets/postPhotos/{{$reminder->post->image}}">
                </div>
                <div class="post-item-desc">
                  <a href="{{ url('/post/'.$reminder->post->slug) }}">{{$reminder->post->title}}</a>
                </div>
                <div class="post-item-details">
                  <ul class="list-unstyled list-inline">
                    <li>
                      <i class="material-icons">date_range</i>
                      <span>{{$reminder->post->created_at->format('d F Y')}}</span>
                    </li>
                    <li>
                      <a href="#"><i class="material-icons">business</i>{{$reminder->post->company->user->name}}</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        @endforeach
          </div>
          <div class="col-md-4 col-sm-4">
            <section id= "companies" class="right-bar row">
              <div class="heading col-md-12 col-xs-12 col-sm-12">
                  <h3>Companies</h3>
              </div>
              <div class="body col-md-12 col-xs-12 col-sm-12">
                @foreach($companies as $company)
                <div class="row">
                  <div class=" img-box col-md-3 col-sm-3 col-xs-3">
                    <img src="/assets/images/azercell.jpg">
                  </div>
                  <div class="col-md-9 col-xs-9 col-sm-9">
                    <a href="#">{{$company->user->name}}</a>
                    <a href="#" class="button-custom">Follow</a>
                  </div>
                </div>
                @if($company!=$companies->last())
                <div class="border"></div>
                @endif
                @endforeach
              </div>
            </section>

            <div class="vertical-div"></div>

          </div> <!--right-side-->
  </div>
  @endif
</section>


@endsection
@section('script')
      <script src="assets/js/alignItemsHeight-company.js"></script>
@endsection
