@extends('layouts.app')

@section('content')
<style>
     .upper-content{
            position:absolute;
            top:0;
            bottom:0;
            width:100%;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
           
        }
        .login-container{
            width:400px;
            padding:10px;
            border-radius:5px;
            border:2px solid white;
            backdrop-filter:blur(40px);
            
        }
</style>
<div class="for-body-full">
    <div class="img-bg">
    <img src="images/agriculture.jpg" alt="">
    </div>
  <div class="upper-content">
 <div class="login-container text-white">
 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter Your Email Here...">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mt-2">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Enter Your Password Here..">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <div class="col-md-12 d-flex justify-content-end" >
                                <div class="checkbox">
                                    <label >
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12  ">
                                <button type="submit" class="btn btn-primary col-md-6 d-block mx-auto my-2">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
 </div>
  </div>
</div>
@endsection
