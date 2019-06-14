@extends('layouts.master')

@section('body')


<div class="modal fade login" id="loginModal"  >
		      <div class="modal-dialog login animated">
    		      <div class="modal-content" >
    		         <div class="modal-header">
                        <h3 class="modal-title">Login with
                        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                        </h3>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error">
                               
                                </div>
                                <div class="form loginBox">
								<form action="{{route('login') }}" method="POST">
                                	@csrf
									<input id="email" type="email" placeholder="E-Mail Address*" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
									@if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        	<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"   placeholder="password*" required>									@if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <input class="btn btn-default btn-login" type="submit" value="{{ __('Login') }}">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                
                                <form  method="POST" action="{{route('register') }}" enctype="multipart/form-data" data-remote="true" accept-charset="UTF-8" autocomplete="off">
                                @csrf
                                <input id="Username" type="text" placeholder="Enter your username*" class="form-control{{ $errors->has('Username') ? ' is-invalid' : '' }}" name="Username" value="{{ old('Username') }}" required autofocus>

                                @if ($errors->has('Username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Username') }}</strong>
                                    </span>
                                @endif
                                <input id="email" type="email" placeholder="Enter your email*" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="phone" type="text" placeholder="Enter your phone*" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                <input class="file-path validate" type="file" placeholder="Upload your file" name="avatar" value="{{ old('avatar')}}" >



                                <input id="password" type="password" placeholder="Enter your Pass*" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif 
                                <input id="password-confirm" type="password" placeholder="Re-enter your pass*" class="form-control" name="password_confirmation" required>
                               <input type="text" name="location">
        
                                <input class="btn btn-default btn-register" type="submit" value="Create account" >
                               
                                 

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div> 
                    </div>
                  </div>
              </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>
@endsection