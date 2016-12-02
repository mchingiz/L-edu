<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Educive</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/reset.css')}}">
        <link href="{{url('/assets/fonts/material-design-icons/iconfont/material-icons.css')}}" rel="stylesheet">
        <link href="{{url('/assets/fonts/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
        <script src="{{url('/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>
    <div class="main-wrapper">
      <div id="top-collapse" class="collapse-only container-fluid">
        <div class="container">
          <div class="row">
          <div class="col-sm-4 col-xs-4">
            <button id="collapse-button" class="collapse-only">
               <i class="material-icons">menu</i>
            </button>
          </div>
          <div class="col-sm-4 col-xs-4 text-center"><a  href="#" >Educive.com</a></div>
          <div class="col-sm-4 col-xs-4 text-right"><a href="#">Login</a></div>
        </div>
        </div>
      </div>
      <nav id="navbar" class="navbar navbar-fixed-top">
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
          <div id="full-nav-search" class="input-group full-nav-only pull-right">
            <input type="text" id="input-search" class="form-control  pull-right" placeholder="Search for...">
            <span class="input-group-btn">
              <a class="button-search" href="#"><i class="material-icons">search</i></a>
            </span>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class="active">Home</a></li>
              <li class="dropdown">
                <a href="https://getbootstrap.com/examples/navbar/">Vacancies <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="https://getbootstrap.com/examples/navbar/">Internship</a></li>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Volunteering</a></li>
                  <li class="collapse-only"><a href="#">View All</a></li>

                </ul>
              </li>
              <li class="dropdown">
                <a href="#">Events <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Conference</a></li>
                  <li><a href="#">Trainings</a></li>
                  <li><a href="#">Seminar</a></li>
                  <li class="collapse-only"><a href="#">View All</a></li>

                </ul>
              </li>
              <li class="dropdown">
                <a href="#">Scholarship <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Bachelor</a></li>
                  <li><a href="#">PhD</a></li>
                  <li><a href="#">Fellowship</a></li>
                  <li><a href="#">Master</a></li>
                  <li class="collapse-only"><a href="#">View All</a></li>
                </ul>
              </li>
              <li><a href="#">Grants</a></li>
              <li><a href="https://getbootstrap.com/examples/navbar/">Contact Us</a></li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div id="content" class="container">
        <div class="row">
          <section id="left-side" class="col-md-8 col-xs-12 col-sm-12">
            <div class="vertical-div"></div>
            <!--Content begins here-->
            <section class="category-section row" >
                <!--Heading part-->
                <div class="heading col-md-12">
                  <h3 class="pull-left">Featured News</h3>
                  <a href="#" class="button-custom pull-right">View All</a>
                  <div style="clear:both"></div>
                </div>
                <!-- Body part -->
                <div class="body col-md-12">
                  <!-- Left Big post -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="big-post">
                      <div class="img-box">
                        <img src="/assets/images/image56.jpg">
                      </div>
                      <h2>Lorem Ipsum doler sit amet</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce auctor maximus sodales. Morbi libero est, tristique
                        non posuere et, rutrum ac nunc.
                      </p>
                      <span>Deadline: </span><span class="date" >01.01.2016</span>
                    </div>
                    <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
                  </div>
                  <!-- Right Side -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="small-post row">
                      <div class="col-md-4 col-xs-4 col-sm-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                  </div> <!--col-md-6 -->
                </div> <!-- body -->
            </section>
            <div class="vertical-div"></div>
            <!--Category tyoe one-->
            <section class="category-section row" >
                <!--Heading part-->
                <div class="heading col-md-12">
                  <h3 class="pull-left">Events</h3>
                  <a href="#" class="button-custom pull-right">View All</a>
                  <div style="clear:both"></div>
                </div>
                <!-- Body part -->
                <div class="body col-md-12">
                  <!-- Left side -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
                  </div>
                  <!-- Right Posts -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                  </div>
                </div> <!-- body -->
            </section>
            <!-- Section for advertisement -->
            <div class="vertical-div"></div>
            <section class="advertisement-md-8 row category-section">
              <img src="/assets/images/advert.jpg">
            </section>
            <div class="vertical-div"></div>
            <!-- Category section two -->
            <section class="category-section row" >
                <!--Heading part-->
                <div class="heading col-md-12">
                  <h3 class="pull-left">Vacancies</h3>
                  <a href="#" class="button-custom pull-right">View All</a>
                  <div style="clear:both"></div>
                </div>
                <!-- Body part -->
                <div class="body col-md-12">
                  <!-- Left side -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="big-post">
                      <div class="img-box">
                        <img src="/assets/images/image56.jpg">
                      </div>
                      <h2>Lorem Ipsum doler sit amet</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce auctor maximus sodales. Morbi libero est, tristique
                        non posuere et, rutrum ac nunc.
                      </p>
                      <span>Deadline: </span><span class="date" >01.01.2016</span>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
                  </div>
                  <!-- Right Posts -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="big-post">
                      <div class="img-box">
                        <img src="/assets/images/image56.jpg">
                      </div>
                      <h2>Lorem Ipsum doler sit amet</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce auctor maximus sodales. Morbi libero est, tristique
                        non posuere et, rutrum ac nunc.
                      </p>
                      <span>Deadline: </span><span class="date" >01.01.2016</span>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                  </div>
                </div> <!-- body -->
            </section>
            <div class="vertical-div"></div>

            <!--Section type three-->
            <section class="category-section row" >
                <!--Heading part-->
                <div class="heading col-md-12">
                  <h3 class="pull-left">Courses</h3>
                  <a href="#" class="button-custom pull-right">View All</a>
                  <div style="clear:both"></div>
                </div>
                <!-- Body part -->
                <div class="body col-md-12">
                  <!-- Left Big post -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="big-post">
                      <div class="img-box">
                        <img src="/assets/images/image56.jpg">
                      </div>
                      <h2>Lorem Ipsum doler sit amet</h2>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce auctor maximus sodales. Morbi libero est, tristique
                        non posuere et, rutrum ac nunc.
                      </p>
                      <span>Deadline: </span><span class="date" >01.01.2016</span>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
                  </div>
                  <!-- Right Side -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                  </div> <!--col-md-6 -->
                </div> <!-- body -->
            </section>
            <div class="vertical-div"></div>
            <section class="advertisement-md-8 row category-section">
              <img src="/assets/images/advert.jpg">
            </section>
            <div class="vertical-div"></div>
            <!--Category type one (2nd time) -->
            <section class="category-section row" >
                <!--Heading part-->
                <div class="heading col-md-12">
                  <h3 class="pull-left">Grants</h3>
                  <a href="#" class="button-custom pull-right">View All</a>
                  <div style="clear:both"></div>
                </div>
                <!-- Body part -->
                <div class="body col-md-12">
                  <!-- Left side -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
                  </div>
                  <!-- Right Posts -->
                  <div  class="col-md-6 col-sm-6 col-xs-12">
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Postgraduate School in Economics 2017 in Minsk</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>Join Digital Communication Tech Camp and Conference in Warsaw, Poland</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>"How has the European Film Festival changed my stereotypes about European culture?"</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                    <div class="border col-md-12"></div>
                    <div class="small-post row">
                      <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                          <img src="/assets/images/image56.jpg">
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h2>І International Winter School ONPU, Ukraine</h2>
                        <span>Deadline: </span><span class="date">01.01.2016</span>
                      </div>
                    </div>
                  </div>
                </div> <!-- body -->
            </section>
            <div class="vertical-div row"></div>
          </section><!--left-side-->
          <section id="right-side" class="col-md-4 col-sm-12 col-xs-12 ">

            <div class="vertical-div hidden-xs hidden-sm row"></div>

            <section id="login" class="right-bar row hidden-xs hidden-sm">
              <div class="heading col-md-12">
                  <h3>Login</h3>
              </div>
              <div class="body col-md-12 text-center">
                <form>
                  <input class="col-md-12" type="email" placeholder="Email">
                  <input class="col-md-12" type="password" placeholder="Password">
                  <input class="col-md-12 button-custom" type="submit" value="Login">
                </form>
                <div class="border"></div>
                <span >Don't  have an account? </span> <a href="#">Sign Up!</a>
              </div>
            </section>

            <div class="vertical-div hidden-xs hidden-sm row"></div>

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


    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  -->
    <script>window.jQuery || document.write('<script src="{{url('/assets/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>
    <script src="{{url('/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/js/main.js')}}"></script>

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
