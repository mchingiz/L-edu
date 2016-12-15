@extends('adminPanel/layout')

@section('title')
  Posts
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h3>Approval Pending Posts</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if( collect($posts)->isEmpty() )
        <h4>There is nothing to show</h4>
      @else
      <table class="table" id="table">
      <thead>
          <tr>
              <th class="text-center">#</th>
              <th class="text-center">Company</th>
              <th class="text-center">Title</th>
              <th class="text-center">Image</th>
              <th class="text-center">Lang</th>
              <th class="text-center">Subcategory</th>
              <th class="text-center">Deadline</th>
              <th class="text-center">Views</th>
              <th class="text-center">Reminder+</th>
              <th class="text-center">Saved+</th>
          </tr>
      </thead>
      <tbody>
          @foreach($posts as $post)
            <tr>
                <td class="text-center">{{$post->id}}</td>
                <td class="text-center">{{$post->company->user->name}}</td>
                <td class="text-center">
                  <a href="{{url('/post/'.$post->slug)}}">{{$post->title}}</a>
                </td>
                <td class="text-center">
                  <img src="{{url('/assets/postPhotos/'.$post->image)}}" alt="" height="80">
                </td>
                <td class="text-center">{{$post->lang}}</td>
                <td class="text-center">{{$post->subcategory->name}}</td>
                <td class="text-center">{{$post->deadline->format('d/M/y - H:i')}}</td>
                <td class="text-center">{{$post->view}}</td>
                <td class="text-center">{{$post->views}}</td>
                <td class="text-center">{{$post->views}}</td>
            </tr>
          @endforeach
      </tbody>
      </table>
      @endif
    </div>
  </div>
@endsection
