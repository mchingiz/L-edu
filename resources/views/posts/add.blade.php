<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  </head>
  <body>
    <div class="col-md-6">
      <form class="postCreator" action="" method="post" enctype="multipart/form-data"> {{ csrf_field() }}

        <div class="input-group">
          <label for="title">Title of post</label>
          <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="input-group">
          <label for="editor1">Body of post</label>
          <textarea class="form-control" name="body" id="editor1" rows="10" cols="80"></textarea>
          <script>
              CKEDITOR.replace('editor1');
          </script>
        </div>

        <div class="input-group">
          <label for="photo">Profile Photo</label>
          <input type="file" name="photo" id="photo">
        </div>

        <div class="input-group">
          <label for="category">Select Category</label>
          <label class="custom-file">
            <select class="custom-select" name="category" id="category">
              @foreach ($categories as $category)
                <optgroup label="{{ $category->name }}">
                  @foreach ( $category->subcategories as $subcategory )
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                  @endforeach
                </optgroup>
              @endforeach
          </select>
          </label>
        </div>

        <div class="input-group">
    			<label for='selectTag' style='display:block'>Choose tags</label>
    			<select class="js-example-basic-multiple" multiple="multiple" name="tags[]" id='selectTag' style="width:235px">
    				@foreach( $tags as $tag )
    					<option value="{{$tag->id}}">{{ $tag->name }}</option>
    				@endforeach
    			</select>

    			<script type="text/javascript">
    				$("select.js-example-basic-multiple").select2();
    			</script>
    		</div>

        <div class="form-check" id="deadlineBox">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            This announcement has deadline
          </label>
        </div>

        <div class="input-group" id="deadlineDiv">
          <label for="deadline">Choose a deadline</label>
          <input class="form-control" type="datetime-local" name="deadline" id="deadline" value="{{date('Y-m-d')}}T00:00" disabled>
        </div>

        <button tpye="submit" class="btn btn-success">Publish</button>
      </form>
    </div>
    <script src="{{url('/assets/js/post.js')}}"></script>
  </body>
</html>
