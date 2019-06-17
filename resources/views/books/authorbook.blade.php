@extends('layouts.master') 

 @section('body') 

<div class="row" style="margin-top:10%">
    <div class="col-lg-8">

            <p>Author boooks</p>

            @foreach($data as $da)
            <div class="card bg-dark text-white"style="margin-top: 10px;" >
                <p class="mb-0">{{$da->book_name}}</p>
                <img src="{{asset('images/books/'.$da->book_image) }}" class="card-img" alt="..img...."style="height:100px;width:100px;">
            </div>
        @endforeach     
     
     
    </div>
</div>
@endsection