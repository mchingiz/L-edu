<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{url('/assets/css/reset.css')}}"> -->
    <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <link type="text/css" media="screen" rel="stylesheet" href="{{url('/assets/js/vendor/jQuery-crop-gh-pages/jquery.crop.css')}}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  	<script type="text/javascript" src="{{url('/assets/js/vendor/jQuery-crop-gh-pages/jquery.crop.js')}}"></script>
  	<script type="text/javascript" src="{{url('/assets/js/vendor/jQuery-crop-gh-pages/cropper.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  </head>
  <body>
    <div id="addPost">
      <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data"> {{ csrf_field() }}

          <div class="form-group row">
            <label for="title" class="col-md-2">Title<span>*</span></label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="editor1" class="col-md-2">Body<span>*</span></label>
            <div class="col-md-10">
              <textarea class="form-control" name="body" id="editor1" rows="10" cols="80" required>{{old('body')}}</textarea>
              <script>
              CKEDITOR.replace('editor1');
              </script>
            </div>
          </div>

          <div class="form-group row">
            <label for="photo" class="col-md-2">Image<span>*</span></label>
            <div class="col-md-10">
              <input type="file" class="form-control-file" name="photo" id="photo" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="language" class="col-md-2">Language<span>*</span></label>
            <div class="col-md-10">
              <label class="custom-control custom-radio">
                <input id="az" value="az" name="language" type="radio" class="custom-control-input" {{ (old('language') == 'en') ? 'checked':' ' }}>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Azərbaycanca</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="en" value="en" name="language" type="radio" class="custom-control-input" {{ (old('language') == 'en') ? 'checked':' ' }}>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">English</span>
              </label>
            </div>
          </div>

          <div class="form-group row">
            <label for="categoryInput" class="col-md-2">Category<span>*</span></label>
            <div class="col-md-10">
              <select class="form-control" name="category" id="categoryInput" required>
                @foreach ($categories as $category)
                  <optgroup label="{{ $category->name }}">
                    @if( collect($category->subcategories)->isEmpty() )
                      <option value="c{{ $category->id }}" >{{ $category->name}}</option>
                    @else
                      @foreach ( $category->subcategories as $subcategory )
                      <option value="{{ $subcategory->id }}" >{{ $subcategory->name }}</option>
                      @endforeach
                    @endif
                  </optgroup>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
      			<label for='selectTag' class="col-md-2">Tags<span>*</span></label>
      			<div class="col-md-10">
              <select class="js-example-basic-multiple col-md-10" multiple="multiple" name="tags[]" id='selectTag' style="width:235px" required>
        				@foreach( $tags as $tag )
        					<option value="{{$tag->id}}" >{{ $tag->name }}</option>
        				@endforeach
        			</select>

        			<script type="text/javascript">
        				$("select.js-example-basic-multiple").select2();
        			</script>
      			</div>
      		</div>

          <div class="form-group row" id="deadlineDiv">
            <label for='deadline' class="col-md-2">Deadline</label>
            <div class="col-md-10">
              <label class="form-check-label">
                <input class="form-check-input" id="hasDeadline" name="hasDeadline" type="checkbox" value="{{old('hasDeadline')}}" >
                This announcement has deadline
              </label>
              <input class="form-control" type="datetime-local" name="deadline" id="deadline" value="{{old('deadline',date('Y-m-d').'T00:00')}}" disabled>
            </div>
          </div>

          <div class="clearfix">
            <button tpye="submit" class="btn btn-success float-xs-right" >Publish</button>
          </div>

          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      <li>{{ $errors->all()[0] }}</li>
                  </ul>
              </div>
          @endif

        </form>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="previousImage">

          </div>
        </div>
        <div class="row">
          <div class="cropFrame" style="width: 512px; height: 250px;">
            <img class="crop cropImage" alt="" src="{{url('/assets/images/wallpaper.jpg')}}" width="512" height="250" style="width: 512px; height: 250px; left: 0px; top: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
            <div class="cropControls">
              <span class="cropText">Drag to move, scroll to zoom</span>

            </div>
          </div>

        </div>
      </div>
    </div>
    <script src="{{url('/assets/js/post.js')}}"></script>
  </body>
</html>
