@extends('layouts.master')
@section('title') Home|BookShop @endsection

@section('body')
@include('layouts.header')

    <!-- Slider -->

	<div class="main_slider" style="background-image:url('../images/slider_1.jpg')">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h1 style="color:white">Love reading? </h1>
						<h6 style="color:white">You'll find that there are many communities made specifically for book lovers</h6> 
						<div class="red_button shop_now_button"><a href="#">Borrow now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner -->
	<div class="container">
			<div class="row">
				<div id="slider">
				<div id="line">
				</div>

				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Quotes</h2>
					</div>
				</div>
			

	
			<ul id="move">
				<li><img src="{{asset('images/books/q1.jpg')}}">
				<q >Don't cry because it's over, smile because it happened. </q>

				<h6>― Dr. Seuss</h6>
			</li>
			<li><img src="{{asset('images/books/q5.jpg')}}">
				<q >Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.</q>
				<h6>― Albert Einstein </h6>
			</li>
			<li><img src="{{asset('images/books/q2.jpg')}}">
				<q >Be the change that you wish to see in the world.</q>
				<h6>― Mahatma Gandhi </h6>
			</li>
			<li><img src="{{asset('images/books/q3.jpg')}}">
				<q >I'm selfish, impatient.I make mistakes, 
					I am out of control and at times hard to handle. But if you can't
					 handle me at my worst, then you sure as hell don't deserve me at my best. </q>

				<h6>― Marilyn Monroe</h6>
			</li>
			<li><img src="{{asset('images/books/q4.jpg')}}">
				<q >Always forgive your enemies; nothing annoys them so much.</q>
				<h6>― Oscar Wilde</h6>
		
			</li>
		</ul>
		<div id="back">
			<
		</div>
		<div id="forword">
			>
		</div>
		<div id="dots">
			
		</div>
		</div>
	
</div>		
</div>
</div>
	</div>
	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Latest Books</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
								@foreach($books as $book)
							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
										<a href="{{url('/books/showbook/'.$book->id)}}">
										</div><img src="{{asset('images/books/'.$book->book_image)}}" alt=""></a>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">{{$book->author->author_name}}</a></h6>
											<div class="product_price">Avaliable</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					<!-- Slider Navigation -->

					<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
						
		
	
@endsection
