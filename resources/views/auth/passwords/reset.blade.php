@extends('layouts.master')

@section('body')

@endsection
<div class="container">

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
                  <form  class="user" method="POST" action="{{ route('password.update') }}">
                        @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                      
                    <input type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                   @endif    
                </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="exampleInputPassword" placeholder="New Password">
                      @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="form-group ">

                     <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="confirm new password"uired>
                   </div>
                   <input type="submit" class="btn btn-primary btn-user btn-block" value="{{ __('Reset Password') }}">

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                    
