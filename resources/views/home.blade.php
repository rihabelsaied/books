@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($books as $book)
                        {{$book ->book_name}}
                        {{$book ->book_author}}
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="product-pic-zoom">
                                        <img class="product-big-img" src="{{asset('images/books/'.$book ->book_image)}}" alt="">
                                    </div>

                    @endforeach

                </div>
<<<<<<< HEAD
{{--                                @foreach($locations as $loc)--}}
{{--                                    {{$loc->location_name}}--}}
{{--                                @endforeach--}}
=======
                
                               
>>>>>>> 9330ebf85d90bf428f869365cdda369e9a9b00d6
            </div>
        </div>
    </div>
</div>
@endsection
