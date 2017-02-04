@extends('layouts/companyProfile')

@section('tab')
  <a class="button-custom" href="/company/{{$company->slug}}/posts">Posts</a>
@endsection

@section('company-content')
<section id="info" class="container">
  <div class="col-md-8 col-md-offset-2">
    @if( !empty($company->info))
    <div class="col-md-12">
      <h2> About</h2>
      <p>{{$company->info}}</p>
    </div>
    @endif
    @if(!empty($company->address||$company->email||$company->phone1||$company->phone2||$company->fax||$company->website))
    <div class="col-md-6">
      <h2> Contact </h2>
        @if(!empty($company->phone1))
        <i class="fa fa-phone" aria-hidden="true"></i> <span>{{$company->phone1}}</span><br>
        @endif
        @if(!empty($company->phone2))
        <i class="fa fa-phone" aria-hidden="true"></i> <span>{{$company->phone2}}</span><br>
        @endif
        @if(!empty($company->address))
        <i class="fa fa-map-marker" aria-hidden="true"></i><span>{{$company->address}}</span><br>
        @endif
        @if(!empty($company->fax))
        <i class="fa fa-fax" aria-hidden="true"></i><span>{{$company->fax}}</span></br>
        @endif
        @if(!empty($company->email))
        <i class="fa fa-envelope" aria-hidden="true"></i><span>{{$company->email}}</span></br>
        @endif
        @if(!empty($company->website))
        <i class="fa fa-globe" aria-hidden="true"></i><a href="{{$company->website}}" target="_blank">{{$company->website}}</a>
        @endif
    </div>
    @endif
    @if(!empty($company->facebook||$company->twitter||$company->instagram||$company->linkedin))
    <div class="col-md-6">
      <h2> Social Networks </h2>
        @if(!empty($company->facebook))
        <i class="fa fa-facebook" aria-hidden="true"></i> <a href="{{$company->facebook}}" target="_blank">{{$company->facebook}}</a><br>
        @endif
        @if(!empty($company->twitter))
        <i class="fa fa-twitter" aria-hidden="true"></i> <a href="{{$company->twitter}}" target="_blank">{{$company->twitter}}</a><br>
        @endif
        @if(!empty($company->linkedin))
        <i class="fa fa-linkedin" aria-hidden="true"></i> <a href="{{$company->linkedin}}" target="_blank">{{$company->linkedin}}</a><br>
        @endif
        @if(!empty($company->instagram))
        <i class="fa fa-instagram" aria-hidden="true"></i> <a href="{{$company->instagram}}" target="_blank">{{$company->instagram}}</a><br>
        @endif
    </div>
    @endif

  </div>
</section>
@endsection

@section('script')
    <script src="{{url('/assets/js/follow.js')}}"></script>
    <script src="{{url('/assets/js/login-pop-up.js')}}"></script>
@endsection
