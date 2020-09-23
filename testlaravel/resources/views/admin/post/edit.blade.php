@extends('layout.admin')
@section('content')
<form method="POST" action="{{route('post.update',['id' => $post_id->post_id])}}" >
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label >Post Title</label>
      <input type="text" name="post_title" class="form-control" value="{{$post_id->post_title}}" >
      </div>
      <div class="form-group">
        <label >Post Description</label>
        <input type="text" name="post_desc" class="form-control" value="{{$post_id->post_desc}}" >
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection