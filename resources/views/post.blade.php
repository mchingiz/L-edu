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
                <a href="{{$post->category->link}}"><i class="material-icons">folder</i>{{$post->category->name}}</a> <a href="{{$post->subcategory->link}}">/ {{$post->subcategory->name}}</a>
              </li>
              <li>
                <i class="material-icons">date_range</i>
                <span>24 Dec, 2016</span>
              </li>
              <li>
                <i class="material-icons">remove_red_eye</i>
                <span>246</span>
              </li>
            </ul>
          </div>
          <div class="buttons">
            <a href="#" class="button-custom"><i class="material-icons">alarm_add</i> Add Reminder</a>
            <a href="#" class="button-custom"><i class="material-icons">bookmark_border</i> Save Post</a>
          </div>
          <div class="single-post-body">
            <p>Lorem ipsum dolor sit amet, vel ea rebum maiestatis. Possim meliore dolores ut usu. Sit ex case iuvaret. Te eum ponderum probatus petentium. Ex animal eruditi vis, ius ad percipit expetendis.</p>
            <p>At has mazim dolorum postulant. Everti maiorum ei cum, ad vocent hendrerit mea. Brute illum denique pri ex, malis labitur consectetuer quo et. Et tale detracto expetendis mea. Eam vitae inimicus id, habemus nostrum eu pri. Ut melius graecis ius, vim ad propriae senserit.</p>
            <p>Eos audire sadipscing delicatissimi ne, duo eu dico tempor mediocritatem. Id regione abhorreant necessitatibus eum, eam quis commodo maiorum cu. Percipit quaestio mea ei, ut modus munere has. Ex sed primis reformidans, integre iudicabit has et, sed ad dolore intellegat.</p>
            <p>Usu ex quem primis. Quas recteque maiestatis ad ius. In hinc clita libris nec. In natum tibique mentitum sit, eam unum persius definiebas no.</p>
            <p>Enim novum per ad, at quod discere facilis eam, has possit blandit omnesque te. Mel errem elitr audire ut. Id usu magna error pertinacia, an civibus deserunt ullamcorper ius. Tota impedit cu quo, an quo nulla vivendo, sumo scripta civibus eum ne. Qui in modus nullam, cu facilisi mediocritatem qui. Everti delenit maiorum mea cu, recusabo posidonium usu ne, ei mel habemus gubergren.</p>
            <p>At has mazim dolorum postulant. Everti maiorum ei cum, ad vocent hendrerit mea. Brute illum denique pri ex, malis labitur consectetuer quo et. Et tale detracto expetendis mea. Eam vitae inimicus id, habemus nostrum eu pri. Ut melius graecis ius, vim ad propriae senserit.</p>
            <p>Eos audire sadipscing delicatissimi ne, duo eu dico tempor mediocritatem. Id regione abhorreant necessitatibus eum, eam quis commodo maiorum cu. Percipit quaestio mea ei, ut modus munere has. Ex sed primis reformidans, integre iudicabit has et, sed ad dolore intellegat.</p>
            <p>Usu ex quem primis. Quas recteque maiestatis ad ius. In hinc clita libris nec. In natum tibique mentitum sit, eam unum persius definiebas no.</p>
          </div>
          <div class="single-post-extra">
              <ul class="list-unstyled list-inline tags">
                <li><a href="">Design</a></li>
                <li><a href="">Internship</a></li>
                <li><a href="">Marketing</a></li>
              </ul>
          </div>
        </div>

      <div class="vertical-div"></div>

      <div id="company-posts">

        <h2>
          Azercell's other posts
        </h2>

        <div class="h-post-item col-md-12">
          <div class="col-md-3 h-post-image">
            <img src="/assets/images/image2.jpg">
          </div>
          <div class="col-md-9 h-post-desc">
            <a href="#">Lorem ipsum dolor sit amet falan filan lorem falan ipsum filan</a>
            <p>Lorem ipsum dolor sit amet, consul laudem explicari ei duo, id est recteque prodesset,
              per pertinax rationibus honestatis ad. </p>
            <i class="material-icons">date_range</i>
            <span>25 Jul, 2016</span>
          </div>
        </div>

        <div class="h-post-item col-md-12">
          <div class="col-md-3 h-post-image">
            <img src="/assets/images/image1.jpg">
          </div>
          <div class="col-md-9 h-post-desc">
            <a href="#">Lorem ipsum dolor sit amet falan filan lorem falan ipsum filan</a>
            <p>Lorem ipsum dolor sit amet, consul laudem explicari ei duo, id est recteque prodesset,
              per pertinax rationibus honestatis ad. </p>
            <i class="material-icons">date_range</i>
            <span>25 Jul, 2016</span>
          </div>
        </div>


        <div class="h-post-item col-md-12">
          <div class="col-md-3 h-post-image">
            <img src="/assets/images/image3.jpg">
          </div>
          <div class="col-md-9 h-post-desc">
            <a href="#">Lorem ipsum dolor sit amet falan filan lorem falan ipsum filan</a>
            <p>Lorem ipsum dolor sit amet, consul laudem explicari ei duo, id est recteque prodesset,
              per pertinax rationibus honestatis ad. </p>
            <i class="material-icons">date_range</i>
            <span>25 Jul, 2016</span>
          </div>
        </div>

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
            <a href="#"><h4>Azercell</h4></a>
            <a class="button-custom col-md-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 col-md-offset-4" href="#">Follow</a>
            <div class="row" style="clear:both">
              <p>Lorem ipsum dolor sit amet, vel ea rebum maiestatis. Possim meliore dolores ut usu. Sit ex case iuvaret. Te eum ponderum probatus petentium. Ex animal eruditi vis, ius ad percipit expetendis.
              At has mazim dolorum postulant. Everti maiorum ei cum, ad vocent hendrerit mea. Brute illum denique pri ex, malis labitur consectetuer quns, integre iudicabit has et, sed ad dolore intellegat.</p>
            </div>
          </div>
        </div>
      </section>

      <div class="vertical-div"></div>

      <section id= "rightBarPosts" class="right-bar row">
        <div class="heading col-md-12 col-sm-12 col-xs-12">
            <h3>Related Posts</h3>
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
