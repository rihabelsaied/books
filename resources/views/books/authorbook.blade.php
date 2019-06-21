@extends('layouts.master') 

 @section('body')
 @include('layouts.header') 

<div class="row" style="margin-top:20%">
    <div class="col-lg-12">

    <div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
                    <h1>Author's books</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
							@foreach($data as $da)
							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
                                        <img src="{{asset('images/books/'.$da->book_image) }}" class="card-img" alt="..img...."style="height:100px;width:100px;">

										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="{{url('/books/showbook/'.$da->id)}}">{{$da->book_name}}</a></h6>
											<div class="product_price">Avaliable</div>
										</div>
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
</div>
  
   
     
     
    </div>
</div>

@endsection
