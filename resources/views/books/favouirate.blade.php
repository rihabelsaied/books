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
			<div class="row">
				To add new Intrests go  <a href="/interest">here</a>
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
							@if($bok->status =='unborrow')
								<form action="{{ route('borrow', $bok->id) }}" method="get">
									{{ csrf_field() }}                          
									<button type="submit" class="btn btn-sucess" name="changeStatus" value="">Un borrowed</button>
								</form>       
							@elseif($bok->status =='pendding')
								<form action="{{ route('borrow', $bok->id) }}" method="get">
									{{ csrf_field() }}                              
									<button type="submit" class="btn btn-info" >pendding</button>      
								</form>       
							@else
									<form action="{{ route('borrow', $bok->id) }}" method="get">
									{{ csrf_field() }}                              
									<button type="submit" class="btn btn-default" name="changeStatus" value="">borrowed</button>
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
