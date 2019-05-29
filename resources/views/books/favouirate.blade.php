@foreach($books as $book)
    @foreach($book as $bo)
        {{$bo->book_name}}
        {{$bo ->book_author}}
        <div class="row">

            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="{{asset('images/books/'.$bo ->book_image)}}" alt="">
                </div>
            </div>


    @endforeach
@endforeach
