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
		<link rel="stylesheet" type="text/css" href="{{asset('styles/single_styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/single_responsive.css')}}">
		<!-- Custom styles for this template --> 
		<link href="{{asset('css/style.css')}}" rel="stylesheet">	
		<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/admin.css')}}" rel="stylesheet">

		  


</head>

<body>
<div class="super_container">



@yield('body')


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
		
		
		<script src="{{asset('js/main.js')}}"></script>
		</body>

</html>