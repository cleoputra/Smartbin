@extends('layouts.header')

@section('content')
<div class="login-box">
    <div class="login-box-body">
        <div class="login-logo">
            <a href="#"><b>LUPA.Int </b><br>Proyek Multidisiplin</a>
        </div>
        <div class="login-logo">
            <h3>Log In</h3>
        </div>
      <form action="{{ route('login') }}" method="post">
        @csrf
        @if ($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
            <a href="{{route('register')}} "><u>Sign Up!</u></a>
          </div>
          <!-- /.col -->
        </div>
      </form>  
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
@endsection
