

@extends('../layouts/auth')
@section('title')
  Login
@endsection

@section('content')
<div  id="loginForm" class="container"  style="margin-top:80px">
    <div class="row">
        <div  id="form" class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-4 col-xs-10 col-xs-offset-1">
          <h1> Log in to Educive.com </h1>
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="col-md-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>



            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="col-md-12">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
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

            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn col-md-12 col-sm-12 col-xs-12 ">
                  Log in
                </button>
              </div>
            </div>
          </form>


          <span id="or"> or </span>
          <a href="{{ url('/auth/facebook') }}" id="facebook" class="btn col-md-12 col-sm-12 col-xs-12 social-login"><i class=" fa fa-facebook"></i>Continue with Facebook</a>
          <a href="{{ url('/auth/google') }}" id="google" class="btn col-md-12 col-sm-12 col-xs-12 social-login"><i class="fa fa-google-plus"></i>Continue with Google</a>
        </div>
  </div>
</div>
<div class="vertical-div"></div>
@endsection
