@extends('layout.admin')

@section('content')
<a href="{{route('post.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Post </a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"><input type="checkbox" name="" id=""></th>
        <th scope="col">#</th>
        <th scope="col">Post Title</th>
        <th scope="col">Post Description</th>
        <th scope="col">User_Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="col"><input type="checkbox" name="" id=""></th>
            <th scope="row">{{$post->post_id}}</th>
            <td>{{$post->post_title}}</td>
            <td>{{$post->post_desc}}</td>
            <td>{{$post->user->user_email}}</td>
            <td><a class="btn btn-sm btn-success" href="{{route('post.edit', ['id' => $post->post_id])}}">Edit</a>
                <a class="btn btn-sm btn-danger" href="{{route('post.delete', ['id' => $post->post_id])}}" onclick="return confirm('Bạn có chắc xóa {{$post->post_title}}?');">Remove</a>
                <a class="btn btn-sm btn-primary" >PDF</a>
                <a class="btn btn-sm btn-warning" >Send</a></td>
        </tr>
        @endforeach
    
    
    </tbody>
</table>
@endsection