@extends('layouts/layout')

@section('title')
  Educive
@endsection

@section('content')
<div id="content" class="container" style="{{ Auth::guest()  ? 'margin-top:50px' : 'margin-top:85px'}}">
  <div class="row">
    <section id="left-side" class="col-md-8 col-xs-12 col-sm-12">
      <div class="vertical-div"></div>
      <!--Content begins here-->
      <section class="category-section row" >
          <!--Heading part-->
          <div class="heading col-md-12">
            <h3 class="pull-left">Latest Posts</h3>
            <a href="#" class="button-custom pull-right">View All</a>
            <div style="clear:both"></div>
          </div>
          <!-- Body part -->
          <div class="body col-md-12">
            <!-- Left Big post -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              <div class="big-post">
                <div class="img-box">
                  <a href="{{url('post/'.$latestPosts[0]->slug)}}">
                    <img src="{{url('/assets/images/'.$latestPosts[0]->image)}}">
                  </a>
                </div>
                <a class="post-title" href="{{url('post/'.$latestPosts[0]->slug)}}">{{ $latestPosts[0]->title }}</a>
                <p>{{ $latestPosts[0]->body }}</p>
                <span>Deadline: </span><span class="date" >{{ $latestPosts[0]->deadlineString }}</span>
              </div>
              <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
            </div>
            <!-- Right Side -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              @for($i=1;$i<5;$i++)
                <div class="small-post row">
                  <div class="col-md-4 col-xs-4 col-sm-4 img-box">
                    <a href="{{url('post/'.$latestPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$latestPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title"href="{{url('post/'.$latestPosts[$i]->slug)}}">{{ $latestPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $latestPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
                <div class="border col-md-12"></div>
              @endfor
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
              @for($i=0;$i<4;$i++)
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$eventPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$eventPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$eventPosts[$i]->slug)}}">{{ $eventPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $eventPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
                @if ($i != 3)
                  <div class="border col-md-12"></div>
                @endif
              @endfor
              <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
            </div>
            <!-- Right Posts -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              @for($i=4;$i<8;$i++)
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$eventPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$eventPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$eventPosts[$i]->slug)}}">{{ $eventPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $eventPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
                @if ($i != 7)
                  <div class="border col-md-12"></div>
                @endif
              @endfor
              <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
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
                  <a href="{{url('post/'.$vacancyPosts[0]->slug)}}">
                    <img src="{{url('/assets/images/'.$vacancyPosts[0]->image)}}">
                  </a>
                </div>
                <a class="post-title" href="{{url('post/'.$vacancyPosts[0]->slug)}}">{{ $vacancyPosts[0]->title }}</a>
                <p>{{ $vacancyPosts[0]->body }}</p>
                <span>Deadline: </span><span class="date">{{ $vacancyPosts[0]->deadlineString }}</span>
              </div>
              @for($i=1;$i<5;$i++)
                <div class="border col-md-12"></div>
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$vacancyPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$vacancyPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$vacancyPosts[$i]->slug)}}">{{ $vacancyPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $vacancyPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
              @endfor
              <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
            </div>
            <!-- Right Posts -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              <div class="big-post">
                <div class="img-box">
                  <a href="{{url('post/'.$vacancyPosts[5]->slug)}}">
                    <img src="{{url('/assets/images/'.$vacancyPosts[5]->image)}}">
                  </a>
                </div>
                <a class="post-title" href="{{url('post/'.$vacancyPosts[5]->slug)}}">{{ $vacancyPosts[5]->title }}</a>
                <p>{{ $vacancyPosts[5]->body }}</p>
                <span>Deadline: </span><span class="date">{{ $vacancyPosts[5]->deadlineString }}</span>
              </div>
              @for($i=6;$i<10;$i++)
                <div class="border col-md-12"></div>
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$vacancyPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$vacancyPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$vacancyPosts[$i]->slug)}}">{{ $vacancyPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $vacancyPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
              @endfor
            </div>
          </div> <!-- body -->
      </section>
      <div class="vertical-div"></div>

      <!--Section type three-->
      <section class="category-section row" >
          <!--Heading part-->
          <div class="heading col-md-12">
            <h3 class="pull-left">Scholarship</h3>
            <a href="#" class="button-custom pull-right">View All</a>
            <div style="clear:both"></div>
          </div>
          <!-- Body part -->
          <div class="body col-md-12">
            <!-- Left Big post -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              <div class="big-post">
                <div class="img-box">
                  <a href="{{url('post/'.$scholarshipPosts[0]->slug)}}">
                    <img src="{{url('/assets/images/'.$scholarshipPosts[0]->image)}}">
                  </a>
                </div>
                <a class="post-title" href="{{url('post/'.$scholarshipPosts[0]->slug)}}">{{ $scholarshipPosts[0]->title }}</a>
                <p>
                  {{ $scholarshipPosts[0]->body }}
                </p>
                <span>Deadline: </span><span class="date" >{{ $scholarshipPosts[0]->deadlineString }}</span>
              </div>
              <div class="border col-md-12"></div>
              <div class="small-post row">
                <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                  <a href="{{url('post/'.$scholarshipPosts[1]->slug)}}">
                    <img src="{{url('/assets/images/'.$scholarshipPosts[1]->image)}}">
                  </a>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                  <a class="post-title" href="{{url('post/'.$scholarshipPosts[1]->slug)}}">{{ $scholarshipPosts[1]->title }}</a>
                  <span>Deadline: </span><span class="date">{{ $scholarshipPosts[1]->deadlineString }}</span>
                </div>
              </div>
              <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
            </div>
            <!-- Right Side -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              @for($i=2;$i<7;$i++)
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$scholarshipPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$scholarshipPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$scholarshipPosts[$i]->slug)}}">{{ $scholarshipPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $scholarshipPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
                @if ($i != 6)
                  <div class="border col-md-12"></div>
                @endif
              @endfor

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
              @for($i=0;$i<4;$i++)
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$grantPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$grantPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$grantPosts[$i]->slug)}}">{{ $grantPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $grantPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
                @if ($i != 3)
                  <div class="border col-md-12"></div>
                @endif
              @endfor
              <div class="border col-xs-12 hidden-sm hidden-md hidden-lg"></div>
            </div>
            <!-- Right Posts -->
            <div  class="col-md-6 col-sm-6 col-xs-12">
              @for($i=4;$i<8;$i++)
                <div class="small-post row">
                  <div class="col-md-4 col-sm-4 col-xs-4 img-box">
                    <a href="{{url('post/'.$grantPosts[$i]->slug)}}">
                      <img src="{{url('/assets/images/'.$grantPosts[$i]->image)}}">
                    </a>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <a class="post-title" href="{{url('post/'.$grantPosts[$i]->slug)}}">{{ $grantPosts[$i]->title }}</a>
                    <span>Deadline: </span><span class="date">{{ $grantPosts[$i]->deadlineString }}</span>
                  </div>
                </div>
                @if ($i != 7)
                  <div class="border col-md-12"></div>
                @endif
              @endfor
            </div>
          </div> <!-- body -->
      </section>
      <div class="vertical-div row"></div>
    </section><!--left-side-->
    <section id="right-side" class="col-md-4 col-sm-12 col-xs-12 ">

      <div class="vertical-div hidden-xs hidden-sm row"></div>
      @if (Auth::guest())
      <section id="login" class="right-bar row hidden-xs hidden-sm">
        <div class="heading col-md-12">
            <h3>Login</h3>
        </div>
        <div class="body col-md-12">
            <form role="form" method="POST" action="{{ url('/login') }}"> {{ csrf_field() }}
                <input id="email" type="email" class="col-md-12" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" type="password" class="col-md-12" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>

                <a href="{{ url('/password/reset') }}" class="pull-right"> Forgot Password?  </a>
                
                <input class="col-md-12 button-custom" type="submit" value="Login">
            </form>

          <div class="border"></div>
          <span >Don't  have an account? </span> <a href="{{ url('/register') }}">Sign Up!</a>
        </div>
      </section>

      <div class="vertical-div hidden-xs hidden-sm row"></div>
      @endif
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
          <?php $i=0 ?>
          @foreach($companies as $company)
            <?php $i++ ?>
            <div class="row">
              <div class=" img-box col-md-3 col-sm-3 col-xs-3">
                <img src="{{ url('/assets/companyProfilePictures/'.$company->logo) }}">
              </div>
              <div class="col-md-9 col-xs-9 col-sm-9">
                <a href="{{ url('/company/'.$company->slug.'/info') }}">{{ $company->user->name }}</a>
                <div class="buttons">
                @if(Auth::guest())
                  <button  value="{{$company->id}}" class="login btn button-custom button-follow" >Follow</button>
                @elseif(Auth::user()->user_type=="user" && !$company->isFollowed)
                  <button id="follow" value="{{$company->id}}" class="btn button-custom button-follow" >Follow</button>
                @elseif(Auth::user()->user_type=="user" && $company->isFollowed)
                  <button id="unfollow" value="{{$company->id}}" class="btn button-custom button-unfollow" >Unfollow</button>
                @endif
                </div>
              </div>
            </div>
            @if ($i != count($companies) )
              <div class="border"></div>
            @endif
          @endforeach
        </div>
      </section>

      <div class="vertical-div"></div>

      <section id= "rightBarPosts" class="right-bar row">
        <div class="heading col-md-12 col-sm-12 col-xs-12">
            <h3>Most Viewed News</h3>
        </div>
        <div class="body col-md-12 col-sm-12 col-xs-12">
          <?php $i=0 ?>
          @foreach($mostViewed as $post)
            <?php $i++ ?>
            <div class="row">
              <div class=" img-box col-md-3 col-sm-3 col-xs-3">
                <img src="{{ url('/assets/images/'.$post->image) }}">
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <a href="{{ url('/post/'.$post->slug) }}" class="post-heading">{{ $post->title }}</a>
                <i class="material-icons">business</i>
                <a href="#" class="company">{{ $post->company->user->name }}</a>
              </div>
            </div>
            @if ($i != count($mostViewed) )
              <div class="border"></div>
            @endif
          @endforeach
        </div>
      </section>
      <div class="vertical-div"></div>
    </section> <!--right-side-->

 </div> <!--row-->
</div> <!--content-->
<div id="overlay"></div>
@endsection
@section('pop-up')
@if( Auth::guest())
<div id="login-overlay" class="login col-md-4 col-md-offset-4">
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
    <script src="{{url('/assets/js/follow2.js')}}"></script>
        @if(Auth::guest())
            <script src="{{url('/assets/js/login.js')}}"></script>
            <script src="{{url('/assets/js/login_ajax.js')}}"></script>
        @endif
@endsection
