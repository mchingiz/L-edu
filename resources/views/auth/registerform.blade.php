

@extends('../layouts/auth')
@section('title')
  Sign Up
@endsection

@section('content')
<div  id="registerForm" class="container"  style="margin-top:80px">
    <div class="row">
        <div  id="form" class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-4 col-xs-10 col-xs-offset-1">
            <h1> Join Educive.com </h1>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{Request::is('register/company')  ? 'Company ' : ''}}Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-enter password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn col-md-12 col-sm-12 col-xs-12 login-button">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>

                    @if(Request::is('register/user'))
                    <span id="or"> or </span>
                    <button id="facebook" class="btn col-md-12 col-sm-12 col-xs-12 login-button"><i class=" fa fa-facebook"></i>Continue with Facebook</button>
                    <button id="google" class="btn col-md-12 col-sm-12 col-xs-12 login-button"><i class="fa fa-google-plus"></i>Continue with Google</button>
                    @endif

        </div>
  </div>
</div>
<div class="vertical-div"></div>
@endsection
