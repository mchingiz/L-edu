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
      <table class="table" id="table">
      <thead>
          <tr>
              <th class="text-center">#</th>
              <th class="text-center">Company</th>
              <th class="text-center">Title</th>
              <th class="text-center">Link</th>
              <th class="text-center">Image</th>
              <th class="text-center">Lang</th>
              <th class="text-center">Subcategory</th>
              <th class="text-center">Deadline</th>
              <th class="text-center"></th>
              <th class="text-center"></th>
              <th class="text-center"></th>
          </tr>
      </thead>
      <tbody>
          @foreach($posts as $post)
            <tr>
                <td class="text-center">{{$post->id}}</td>
                <td class="text-center">{{$post->company->user->name}}</td>
                <td class="text-center">{{$post->title}}</td>
                <td class="text-center">{{$post->slug}}</td>
                <td class="text-center">
                  <img src="{{url('/assets/postPhotos/'.$post->image)}}" alt="" width="100" height="50">
                </td>
                <td class="text-center">{{$post->lang}}</td>
                <td class="text-center">{{$post->subcategory->name}}</td>
                <td class="text-center">{{$post->deadline}}</td>
                <td class="text-center">
                  <a href="{{url('/editPost/'.$post->id)}}">
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>
                </td>
                <td class="text-center">
                  <a href="{{url('/deletePost/'.$post->id)}}">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </td>
                <td class="text-center">
                  <a href="{{url('/deletePost/'.$post->id)}}">
                    <span class="glyphicon glyphicon-check"></span>
                  </a>
                </td>
            </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </div>
@endsection
