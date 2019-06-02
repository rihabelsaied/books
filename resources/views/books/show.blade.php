@extends('layouts.app')


@section('title','All Books')


@section('content')

<div class="row">
<div class="col-lg-8">

 @foreach($data as $da)
 <div class="card bg-dark text-white"style="margin-top: 10px;" >

    <p class="mb-0">{{$da->book_name}}</p>
    
    <p>{{$da->author->author_name}}</p>
   
    <img src="{{asset('images/books/'.$da->book_image) }}" class="card-img" alt="..img...."style="height:100px;width:100px;">
    
   <a href="{{url('/books/showbook/'.$da->id)}}" class='btn btn-like'>Show</a>
 

   @if($da->status == 'unborrow') 
        <form action="{{ route('borrow', $da->id) }}" method="get">
            {{ csrf_field() }}                          
            <button type="submit" class="btn btn-warning" name="changeStatus" value="">Un borrowed</button>
        </form>                    
    @elseif($da->status == 'pendding')
        <form action="{{ route('borrow', $da->id) }}" method="get">
            {{ csrf_field() }}                              
            <button type="submit" class="btn btn-info" >pendding</button>      
          </form>  
    @else
        <form action="{{ route('borrow', $da->id) }}" method="get">
            {{ csrf_field() }}                              
            <button type="submit" class="btn btn-success" name="changeStatus" value="">borrowed</button>
        </form>                                                    
    @endif

  
  </div>
   @endforeach     
     
     
</div>
</div>
@endsection