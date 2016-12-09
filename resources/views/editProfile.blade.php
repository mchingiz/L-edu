@extends('layouts/company')

@section('title')
  Edit Profile
@endsection

@section('content')
<div class="content" class="container" style="margin-top:80px;">
  <section id="editProfile" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
    <form method="post" action="{{url("/company/editprofile")}}">
      <div class="form-group row">
        {{csrf_field()}}
        <label  class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Company Name</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input  class="form-control" type="text" name="name" value="{{$user->name}}" required>
          @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Logo</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input type="file" class="form-control-file" accept="image/*" aria-describedby="fileHelp">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">About</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <textarea class="form-control" rows="5" name="info">{{$user->company->info}}</textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Email</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="email" value="{{$user->company->email}}" name="email">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Phone</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="tel" value="{{$user->company->phone1}}" name="phone">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Phone 2</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="tel" value="{{$user->company->phone2}}" name="phone2">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Fax</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="tel" value="{{$user->company->fax}}" name="fax">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Address</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="text" name="address" value="{{$user->company->address}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Website</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="url" value="{{$user->company->website}}" name="website">
          @if ($errors->has('website'))
          <span class="help-block">
            <strong>{{ $errors->first('website') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Facebook</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="url" value="{{$user->company->facebook}}" name="facebook">
          @if ($errors->has('facebook'))
          <span class="help-block">
            <strong>{{ $errors->first('facebook') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Linkedin</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="url" value="{{$user->company->linkedin}}" name="linkedin">
          @if ($errors->has('linkedin'))
          <span class="help-block">
            <strong>{{ $errors->first('linkedin') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Instagram</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="url" value="{{$user->company->instagram}}" name="instagram">
          @if ($errors->has('instagram'))
          <span class="help-block">
            <strong>{{ $errors->first('instagram') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-xs-12 col-form-label ">Twitter</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <input class="form-control" type="url" value="{{$user->company->twitter}}" name="twitter">
          @if ($errors->has('twitter'))
          <span class="help-block">
            <strong>{{ $errors->first('twitter') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12">
          <input class="form-control button-custom" type="submit" >
        </div>
      </div>
    </form>

  </section>
</div>
<div class="vertical-div" style="clear:both"></div>
@endsection
