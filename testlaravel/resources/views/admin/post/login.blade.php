@extends('layout.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-sm-6">
            <form action="{{route('admin.login')}}" method="post">
                @csrf
              <div class="form-group has-feedback">
                <input name="user_name" type="text" class="form-control" placeholder="UserName">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input name="user_pass" type="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                
                <!-- /.col -->
            </form>
        </div>
    </div>
</div>

@endsection