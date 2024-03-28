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
 <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group mt-2">
        <label for="avatar" class="col-md-12 control-label">Profile Picture</label>
        <div class="col-md-12">
            <input id="avatar" type="file" class="form-control" name="image" accept="image/*" placeholder="Choose an image...">
        </div>
    </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Your Name Here...">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mt-2">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email Here...">

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
                                <input id="password" type="password" class="form-control" name="password" required  placeholder="Enter Your Password Here...">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Enter Your Confirm Password Here...">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary d-block col-6 m-auto my-2">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
 </div>
  </div>
</div>
@endsection