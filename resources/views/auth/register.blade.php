@extends('layouts.master')

@section('body')

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
 @endif
 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="{{route('register') }}" enctype="multipart/form-data" data-remote="true" accept-charset="UTF-8" autocomplete="off">
              @csrf  
              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user{{ $errors->has('Username') ? ' is-invalid' : '' }}" name="Username" value="{{ old('Username') }}" required autofocus placeholder="Enter Username" id="exampleLastName">
                
                    @if ($errors->has('Username'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('Username') }}</strong>
                    </span>
                    @endif  
                </div>
                
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="phone" value="{{ old('phone') }}" placeholder="Phone*" required>
                  </div>
              </div>
               
            <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="exampleInputPassword" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif  
                </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  name="password_confirmation" placeholder="Repeat Password">
                  </div>
                </div>
                <div class="form-group row">
                 
                 <input type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email*">
             
                 @if ($errors->has('email'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('email') }}</strong>
                 </span>
                 @endif
         </div>
                 
                <div class="form-group row">
                  <select class="form-control " name="location" style=" border-radius: 20px; height:45px">
                    <option default>Alexandria</option>
                    <option value="Aswan">Aswan</option>
                    <option value="Asyut">Asyut</option>
                    <option value="Beheira">Beheira </option>
                    <option value="Beni Suef">Beni Suef</option>
                    <option value="Cairo">Cairo</option>
                    <option value="Dakahlia">Dakahlia</option>
                    <option value="Damietta">Damietta </option>
                    <option value="Faiyum">Faiyum </option>
                    <option value="Gharbia">Gharbia </option>
                    <option value="Giza">Giza </option>
                    <option value="Ismailia">Ismailia</option>
                    <option value="Kafr El Sheikh">Kafr El Sheikh </option>
                    <option value="Luxor">Luxor </option>
                    <option value="Matruh">Matruh </option>
                    <option value="Minya">Minya </option>
                    <option value="Monufia">Monufia </option>
                    <option value="New Valley">New Valley </option>
                    <option value="orth Sinai">North Sinai</option>
                    <option value="Port Said">Port Said </option>
                    <option value="Qalyubia">Qalyubia</option>
                    <option value="Qena">Qena</option>
                    <option value="Red Sea">Red Sea</option>
                    <option value="Sharqia">Sharqia</option>
                    <option value="Sohag">Sohag </option>
                    <option value="South Sina">South Sinai</option>
                    <option value="Suez">Suez</option>
                  </select>


                <!-- <input type="text" name="location" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="enter your location*"> -->
                </div>
                
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
         </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="/login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>











          
    endsection






















