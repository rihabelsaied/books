@extends('layouts.master')

@section('body')
@include('layouts.header')
<!-- Blogs -->

<div class="blogs" >
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Intrests</h2>
					</div>
				</div>
				

			</div>
			<div class="user_name">
			 To add New intrests
			 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

			 <a href="/interest" style="color: #FF6347;">Here</a>
            </div>
			<div class="row blogs_container">
			
            @foreach($books as $book)
            @foreach($book as $bok)
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background">
                            <img  class="image" src="{{asset('images/books/'.$bok->book_image)}}" style="height:370px;width:100%">
						</div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">{{$bok->book_name}}</h4>
							@if($bok->user_id != Auth::id())
							<form action="/borrow/{{$bok->id}}" method="post">
								<input type="hidden" value="{{$bok->id}}" name="book_id">
								<input type="hidden" value="{{$bok->user_id}}" name="owner_id">

           							 {{ csrf_field() }}                          
           			 <button type="submit" class="btn btn-success" >Borrow</button>
					</form> 
								        
        				@endif
						</div>
					</div>
                </div>
                @endforeach
				@endforeach
				
			</div>
		</div>
	</div>
	@include('layouts.footer')

@endsection
