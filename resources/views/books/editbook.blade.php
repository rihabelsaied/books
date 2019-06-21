@extends('layouts.master')
@section('title') Create Books|Books @endsection
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

                  <form action = "/books/profile/update/{{ $data->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
           {{ method_field('PUT') }}
           
  <fieldset>	

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
						<h3>Book Name:
                               <input type="text" class="form-control"name="book_name" value=" {{$data->book_name}}">
                        </h3>
						<h3>Book Author:
                               <input type="text"  readonly class="form-control"name="" value="{{$data->author->author_name}}"> 
                        </h3>
                        <h3> Description :
                          
                        </h3>
                          <textarea rows="4" cols="35">
                            At w3school com you will learn how to make a website.We offer free tutorials in all web development technologies. 
                            </textarea>
    
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>Avaliable</span>
					</div>

{{-- 					
					<ul class="star_rating">
						<li><i class="fa fa-star-o checked" aria-hidden="true" name="star" value="1" onmouseover="starmark(this)" onclick="starmark(this)"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true" name="star" value="2"  onmouseover="starmark(this)" onclick="starmark(this)"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true" name="star" value="3"  onmouseover="starmark(this)" onclick="starmark(this)"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true" name="star" value="4"  onmouseover="starmark(this)" onclick="starmark(this)"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true" name="star" value="5" onmouseover="starmark(this)" onclick="starmark(this)"></i></li>
                    </ul> --}}

                    <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
   
					   

        @if($data->status =='unborrow')
        

            <p type="submit" class="btn btn-warning" name="changeStatus" value="">Un borrowed</p>     
         @elseif($data->status =='pendding')
                                        
            <p type="submit" class="btn btn-info" >pendding</p>      
            @else                         
            <p type="submit" class="btn btn-success" name="changeStatus" value="">borrowed</p>
        @endif           

          <button type="submit" class="  btn btn-success">update</button>    
                        <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					    
                        </div>

                         
				</div>
			</div>
		</div>

    </div>
              	<fieldset>				
              </form> 
					
						
<div style="margin-top:150px">
							
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
                                    No Comments  <span style="color: #FF6347;">Here</span> 
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                 </div>
                                @endforelse
                               
							</div>
								
							

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>

@endsection