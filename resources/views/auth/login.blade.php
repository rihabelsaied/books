@extends('layouts.master')

@section('body')
 <!-- Outer Row -->
 <div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
        <div class="col-lg-6">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <form action="{{route('login') }}" method="post"class="user">
                @csrf
              <div class="form-group">
                <input type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('email') }}</strong>
                     </span>
				@endif  
            </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="exampleInputPassword" placeholder="Password" required>
                @if ($errors->has('password')) 
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif 
            </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox small">
                  <input type="checkbox" class="custom-control-input" id="customCheck">
                  <label class="custom-control-label" for="customCheck">Remember Me</label>
                </div>
              </div>
              <input type="submit" class="btn btn-primary btn-user btn-block" value="{{ __('Login') }}">
               
              <hr>
              
              <a href="index.html" class="btn btn-facebook btn-user btn-block">
              <i class="fa fa-facebook" aria-hidden="true"></i>
                Login with Facebook
              </a>
            </form>
            <hr>
            <div class="text-center">
            <a href="password/reset" class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="/register">Create an Account!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
 </div>
 @endsection



      