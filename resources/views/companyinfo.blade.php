@extends('layouts/company')
@section('href')
  <a class="button-custom" href="/company/posts">Posts</a>
@endsection
@section('company-content')
<section id="info" class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="col-md-12">
      <h2> About</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing
         elit. Curabitur in dui diam. Sed mollis quam in commodo
         egestas. Quisque sagittis nibh ac ultrices blandit. Donec
         id felis sed ex mattis blandit id maximus mi. Nunc non
         imperdiet nisi, sed tincidunt urna. Sed nunc est, feugiat
         vel nunc sit amet, tempor congue dolor.</p>
      </div>
      <div class="col-md-6">
      <h2> Contact </h2>
        <i class="fa fa-phone" aria-hidden="true"></i> <span>012-034-29-38</span><br>
        <i class="fa fa-phone" aria-hidden="true"></i> <span>012-034-29-38</span><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span> Af business house</span><br>
        <i class="fa fa-fax" aria-hidden="true"></i><span>727654826239</span></br>
        <i class="fa fa-envelope" aria-hidden="true"></i><span>company@gmail.com</span></br>
        <i class="fa fa-globe" aria-hidden="true"></i><a href="http://facebook.com" target="_blank">http://azercell.com</a>
      </div>
      <div class="col-md-6">
      <h2> Social Networks </h2>
        <i class="fa fa-facebook" aria-hidden="true"></i> <a href="http://facebook.com" target="_blank">http://facebook.com</a><br>
        <i class="fa fa-twitter" aria-hidden="true"></i>  <a href="http://facebook.com" target="_blank">http://twitter.com</a><br>
        <i class="fa fa-linkedin" aria-hidden="true"></i> <a href="http://facebook.com" target="_blank">http://linkedin.com</a><br>
        <i class="fa fa-instagram" aria-hidden="true"></i> <a href="http://facebook.com" target="_blank">http://intagram.com</a>
      </div>

  </div>
</section>
@endsection
