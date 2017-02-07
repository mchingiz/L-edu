@extends('layouts/layout')

@section('title')
  Educive
@endsection

@section('content')
<div class="margin-top-div"></div>
<section id="delete" class="container">
  <div class="text-center col-md-8 col-md-offset-2" role="alert">
    <p> Are you sure to delete accountajsd?</p>
    <a href="{{url("/delete") }}" class="pull-right" >Deactive</a>
    
  </div>
</section>


@endsection

