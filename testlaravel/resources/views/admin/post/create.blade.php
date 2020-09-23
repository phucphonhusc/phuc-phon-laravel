@extends('layout.admin')
@section('content')
<form method="POST" action="{{route('post.store')}}" >
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label >Post Title</label>
        <input type="text" name="post_title" class="form-control"  placeholder="Post Title">
      </div>
      <div class="form-group">
        <label >Post Description</label>
        <input type="text" name="post_desc" class="form-control"  placeholder="Post Description">
      </div>
    {{-- <input type="hidden" name="user_id" value="{{$user_id}}"> --}}
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection