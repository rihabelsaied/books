@extends('layouts.master')

@section('body')

<!-- Blogs -->

<div class="blogs" >
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Favouriates</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
            @foreach($books as $book)
            @foreach($book as $bok)
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background">
                            <img  class="image" src="{{asset('images/books/'.$bok->book_image)}}" style="height:370px;width:100%">
						</div>
                             <!-- style="background-image:url('images/books/'.{{$bok->book_image}})"></div> -->
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">{{$bok->book_name}}</h4>
							<span class="blog_meta">by owner </span>
							<!-- <a class="blog_more" href="#"> -->
                            @if($bok->status =='unborrow')
                                <input type="submit" name="unborrow" value="unborrowed" class="blog_more btn btn-success"></a>
                            @elseif($bok->status =='pendding')
                                <input type="submit" name="" value="pendding" class="btn btn-warning"></a>
                            @else
                                <input type="submit" name="" value="borrowed" class="btn btn-success"></a>
                            @endif
                          <!-- </a> -->
						</div>
					</div>
                </div>
                @endforeach
                @endforeach
				
			</div>
		</div>
	</div>

@endsection
