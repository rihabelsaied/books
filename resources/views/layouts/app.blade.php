@extends('layouts.master')
@section('body')
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="./index.html" class="site-logo">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="Search on divisima ....">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                @guest
                                    <i class="up-item" >
                                        <a  href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                    </i>
                                    @if (Route::has('register'))
                                        <i class="up-item">
                                            <a  href="{{ route('register') }}">{{ __(' OR Create Account') }}</a>
                                        </i>
                                    @endif
                                @else
                                    <i class="up-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </i>
                                    @endguest
                      </div>

                            <div class="up-item">
                              @if(Auth::check())
                                @if(Auth::user()->role==1)

                                    <div class="shopping-card">
                                        <i><a href="/dashbord">Dashbord</a></i>
                                    </div>
                                @else
                                    <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
 
                                </div>
                                <a href="/cart">Shopping Cart</a>
                                 @endif
                                  @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    @endsection


  <main class="py-4">
            @yield('content')
        </main>
    
   
