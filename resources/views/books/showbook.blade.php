@extends('layouts.master')
@section('title') SingleItem|BookShop @endsection
@section('body')
@include('layouts.header')
<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$data->book_name}}</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background">
                                    <img src="{{asset('images/books/'.$data->book_image)}}" alt="jjj">
                                   </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2>Book Name:{{$data->book_name}}</h2>
						<p>Book Author:{{$data->author->author_name}}...</p>
						
				
       
       
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>Avaliable</span>
					</div>
					
					<ul id="star_rating">
						<li><span class="fa fa-star-o" aria-hidden="true" name="star" value="1,{{$data->id}}" ></span></li>
						<li><span class="fa fa-star-o" aria-hidden="true" name="star" value="2,{{$data->id}}" ></span></li>
						<li><span class="fa fa-star-o" aria-hidden="true" name="star" value="3,{{$data->id}}" ></span></li>
						<li><span class="fa fa-star-o" aria-hidden="true" name="star" value="4,{{$data->id}}" ></span></li>
						<li><span class="fa fa-star-o" aria-hidden="true" name="star" value="5,{{$data->id}}" ></span></li>
                    </ul>
                   
					@if($data->status =='unborrow')
        <form action="{{ route('borrow', $data->id) }}" method="get">
            {{ csrf_field() }}                          
            <button type="submit" class="btn btn-sucess" name="changeStatus" value="">Un borrowed</button>
        </form>       
         @elseif($data->status =='pendding')
         <form action="{{ route('borrow', $data->id) }}" method="get">
            {{ csrf_field() }}                              
            <button type="submit" class="btn btn-info" >pendding</button>      
          </form>       
            @else
            <form action="{{ route('borrow', $data->id) }}" method="get">
            {{ csrf_field() }}                              
            <button type="submit" class="btn btn-default" name="changeStatus" value="">borrowed</button>
        </form>        
        @endif

				</div>
			</div>
		</div>

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

	<!-- Tabs -->

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_2"><span>Additional Information</span></li>
							<li class="tab" data-active-tab="tab_3"><span>Reviews</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					
					<!-- Tab Additional Info -->

					<div id="tab_2" class="tab_container active">
						<div class="row">
							<div class="col additional_info_col">
								<div class="tab_title additional_info_title">
									<h4>Additional Information</h4>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/user/'.$data->user->avatar)}}" alt="avatar" style="width:20%">
									<!-- <p>Owner Of Book:{{$data->user->Username}}<span style="color:#FF6347" ></span></p> -->
								</div>
								<div class="col-sm-6">
								<h2>To contact with:{{$data->user->Username}} </h2>
								<i class="fa fa-phone" aria-hidden="true" ><p >phone:{{$data->user->phone}}<span></span></p></i>
								<i class="fa fa-envelope-o" aria-hidden="true"><p>Email:{{$data->user->email}}<span></span></p></i>
								</div>
								
							</div>
						</div>
					</div>

					<!-- Tab Reviews -->

					<div id="tab_3" class="tab_container">
						<div class="row">

							<!-- User Reviews -->

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Reviews </h4>
								</div>

								<!-- User Review -->
								@forelse($data->comments as $comment)
								
								<div class="user_review_container d-flex flex-column flex-sm-row">
                                     <!-- comments -->

            
                               
                                    <div class="user">
										<div class="user_pic">
                                           
                                         <!-- <img src="{{asset('images/user/'.$comment->user->avatar)}}" alt="avatar"> -->

                                        </div>
										
									</div>
									<div class="review">
										<div class="review_date">{{($comment->created_at)->diffForHumans()}}</div>
										<div class="user_name">{{$comment->user->Username}}</div>
										<p> {{$comment->body}}.</p>
                                    </div>
                                   
                                </div>
                                @empty
                                <div class="user_name">
                                    No Reviews to show add your reviews  <span style="color: #FF6347;">Here</span> 
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                 </div>
                                @endforelse
                               
							</div>
								
							<!-- Add Review -->

							<div class="col-lg-6 add_review_col">

								<div class="add_review">
                                <form action="/comment" method="post" id="review_form">
                                     @csrf
                                    <input type="hidden" name="book_id" value="{{$data->id}}"> 
   
									<form  action="post">
										<div>
											<h1>Add Review</h1>
											
										<div>
											
											<textarea id="review_message" class="input_review" name="body"  placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
	

@endsection
