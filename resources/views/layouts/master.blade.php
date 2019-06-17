<!DOCTYPE html>
<html lang="en">
<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Colo Shop Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<!-- Stylesheets -->
		
		<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
		<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/login-register.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/single_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/single_responsive.css')}}">   


</head>

<body>
<div class="super_container">

<!-- Header -->

<header class="header trans_300">
	<!-- Top Navigation -->

	<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free Books for borrowing</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
							<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
									@guest
									<li><a data-toggle="modal" href="{{ route('login')}}" onclick="openLoginModal();"><i class="fa fa-user-plus"  aria-hidden="true"></i>Sign In</a></li>
									@if (Route::has('register'))

									<li><a data-toggle="modal" href="{{ route('register') }}" onclick="openRegisterModal();"><i class="fa fa-user-plus"  aria-hidden="true"></i>Register</a></li>
									@endif
                                 @endguest
								</ul>
								</li>
							</ul>
							</div>
					</div>
				</div>
			</div>
		</div>

	
	<!-- Main Navigation -->

	<div class="main_nav_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-right">
					<div class="logo_container">
						<a href="#">Book<span>shop</span></a>
					</div>
					<nav class="navbar">
						<ul class="navbar_menu">
							<li><a href="/home">home</a></li>
							<li><a href="/favour/{{Auth::id()}}">Favouirate</a></li>
							<li><a href="#">promotion</a></li>
							<li><a href="#">pages</a></li>
							<li><a href="#">blog</a></li>
							<li><a href="contact.html">contact</a></li>
							
						</ul>
						<div class="top_nav_right">
						<ul class="top_nav_menu navbar_user">
							
							@if(Auth::check() and Auth::user()->role==0)
							
							<li class="account" style="background: #FFFFFF;"><i class="fa fa-user" aria-hidden="true"></i>
							<ul class="account_selection" style="width:120px">
						 	<li><a href="/user/profile/{{Auth::user()->id}}">Profile</a></li> 

								<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
										</li>
										</ul>
						</li>	
						<form method="POST" action="#" autocomplete="off">
						
						<input type="text" name="searchData" id="search" placeholder="search" /> 
						 <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> 

						<div id="searchList">
						</div>
						@csrf

						</form>
								

							<li class="checkout">
								<a href="#">
								<i class="fa fa-bell" aria-hidden="true"></i>
								<span id="checkout_items" class="checkout_items">2</span>
								</a>
							</li>
		
								
							@endif
							@if(Auth::check() and Auth::user()->role==1)
							<li><a href="/admin/panal">Dashbord</a></li>
							<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
										</li>
								
							@endif
							
						</ul>
						</div>
						<!-- <div class="hamburger_container">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div> -->
					</nav>
				</div>
			</div>
		</div>
	</div>


</header>

 

@yield('body')

@include('layouts.footer')
</div>





	
    	

		<!-- JS Files -->
		<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
		<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
		<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
		<script src="{{asset('plugins/easing/easing.js')}}"></script>
		<script src="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>

		<script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/slide.js')}}"></script>
		<script src="{{asset('js/single_custom.js')}}"></script>
		
		
		<script src="{{asset('js/login-register.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
</body>

</html>