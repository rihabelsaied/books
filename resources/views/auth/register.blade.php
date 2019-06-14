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

<!-- 
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
        
                                <input class="btn btn-default btn-register" type="submit" value="Create account" >
                               
                                 

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
    $(document).ready(function(){
        openRegisterModal();
    });
</script>
                    
    endsection -->






















