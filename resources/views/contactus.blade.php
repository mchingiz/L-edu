@extends('layouts/layout')

@section('title')
  Educive
@endsection

@section('content')
<div class="margin-top-div"></div>

<section class="container">
	<div id="contact" class="col-md-10 col-md-offset-1">
		<h1 class="text-center">Contact Us</h1>
		<div class="border"></div>
		<div class="col-md-10 col-md-offset-1">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
		</div>
		<form class="col-md-10 col-md-offset-1">
		  <div class="input-group">
		    <div class="input-group-addon"><i class="material-icons">perm_identity</i></div>
		    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Name">
		  </div>

		  <div class="input-group">
		    <div class="input-group-addon"><i class="material-icons">mail_outline</i></div>
		    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email">
		  </div>

		  <div class="input-group">
		    <div class="input-group-addon"><i class="material-icons">chat_bubble_outline</i></div>
		   <textarea  rows="6"></textarea>
		  </div>

		  <button type="submit" class="btn button-custom pull-right">Send</button>
		  <div style="clear:both">
		</form>
	</div>
</section>
<div class="vertical-div"></div>
@endsection