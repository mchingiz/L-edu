<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/reset.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap-datetimepicker.min.css')}}">
        <link href="{{url('/assets/fonts/material-design-icons/iconfont/material-icons.css')}}" rel="stylesheet">
        <link href="{{url('/assets/fonts/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
        <script src="{{url('/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        @yield('script-top')
        @yield('head')
    </head>
    <body>
    <div class="main-wrapper">
      @if(!(Request::url() === 'index'&& Auth::guest() ) )
      <nav id="top-bar" class="navbar navbar-fixed-top">
        <div class="container">
          <div>
            <ul class="nav navbar-nav navbar-left">
              @if ( !Auth::guest() && Auth::user()->user_type=="company")
              <li style="margin-left:-15px;"><a href="#" >Name</a></li>
              <li><a href="{{url('/add')}}">Add Post</a></li>
              @elseif ( !Auth::guest() && Auth::user()->user_type=="user")
              <li style="margin-left:-15px;"><a href="#" >Name</a></li>
              <li><a href="{{url('/savedposts')}}">Saved Posts</a></li>
              <li><a href="{{ url('/reminders') }}">Reminders</a></li>
              @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Sign Up</a></li>
              @else
              <li ><a href="{{ url('/logout') }}">Log out</a></li>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      @endif
      <div id="top-collapse" class="collapse-only container-fluid">
        <div class="container">
          <div class="row">
          <div class="col-sm-4 col-xs-4">
            <button id="collapse-button" class="collapse-only">
               <i class="material-icons">menu</i>
            </button>
          </div>
          <div class="col-sm-4 col-xs-4 text-center"><a  href="#" >Educive.com</a></div>
          @if(Auth::guest())
          <div class="col-sm-4 col-xs-4 text-right"><a href="#">Log in</a></div>
          @else
          <div class="col-sm-4 col-xs-4 text-right"><a href="{{ url('/logout') }}">Log out</a></div>
          @endif
        </div>
        </div>
      </div>
      <nav id="navbar" class="navbar navbar-fixed-top {{(Request::is('index')&& Auth::guest() )  ? '' : 'top-margin'}}">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand full-nav-only" href="#" style="color:black">Educive.com</a>
            <!-- Search bar in collapse -->
            <div id="collapse-search" class="input-group collapse-only">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="button-search"><i class="material-icons">search</i></button>
              </span>
            </div>
          </div>
          <!-- Search form for full navbar -->
          <form id="full-nav-search" class="input-group full-nav-only pull-right" method="POST" action="/search">
             {{csrf_field()}}
            <input type="text" id="input-search" name="key" class="form-control  pull-right" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="button-search" type="submit"><i class="material-icons">search</i></button>
            </span>
          </form>
          <div>
            <ul class="nav navbar-nav navbar-right">
              @if ( !Auth::guest() && Auth::user()->user_type=="company")
              <li class="collapse-only" ><a href="#" >Name</a></li>
              <li class="collapse-only" ><a href="#">Add Post</a></li>
              @elseif ( !Auth::guest() && Auth::user()->user_type=="user")
              <li class="collapse-only"  style="margin-left:-15px;"><a href="#" >Name</a></li>
              <li class="collapse-only" ><a href="{{ url('/savedposts') }}">Saved Posts</a></li>
              <li class="collapse-only" ><a href="{{ url('/reminders') }}">Reminders</a></li>
              @endif

              @if (Auth::guest())
              <li class="collapse-only" ><a href="{{ url('/login') }}">Login</a></li>
              <li class="collapse-only" ><a href="{{ url('/register') }}">Sign Up</a></li>
              @endif
              <li class="divider"></li>
               @foreach($menus as $menu)
                @if( !collect($menu->category)->isEmpty() && !collect($menu->category->subcategories)->isEmpty())
                <li class="dropdown">
                  <a href="{{url('/'.$menu->slug)}}" class={{ (strpos(Request::url(), $menu->slug) !== false)  ? 'active' : ''}}>{{$menu->name }}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @foreach($menu->category->subcategories as $submenu)
                    <li><a href="{{url('/'.$menu->slug.'/'.$submenu->slug)}}">{{$submenu->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
                @else
                <li><a href="{{url('/'.$menu->slug)}}" class={{Request::is('home')  ? 'active' : ''}}>{{$menu->name}}</a></li>
                @endif
              @endforeach
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      @yield('content')

     <footer id="footer" >
        <section id="info-footer" class="container-fluid">
          <div class="col-md-6 col-md-offset-3">

            <h4 class="text-center"> Educive.com </h4>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
               elit. Curabitur in dui diam. Sed mollis quam in commodo
               egestas. Quisque sagittis nibh ac ultrices blandit. Donec
               id felis sed ex mattis blandit id maximus mi. Nunc non
               imperdiet nisi, sed tincidunt urna. Sed nunc est, feugiat
               vel nunc sit amet, tempor congue dolor.
             </p>
          </div>
        </section>
        <section id="copyright">
          <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <h6>Copyrights © 2015 All Rights Reserved</h6>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        </section>
      </footer>

    </div>
    @yield('pop-up')

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  -->
    <script>window.jQuery || document.write('<script src="{{url('/assets/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
    <script src="{{url('/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/js/main.js')}}"></script>
    @yield('script')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script> -->
    </body>
</html>
