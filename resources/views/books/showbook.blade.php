@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-8">

        <p class="mb-0">{{$data->book_name}}</p>
        <p>{{$data->book_author}}</p>
        <div class="card bg-dark text-white" >
             <img src="{{asset('images/'.$data->book_image) }}" class="card-img" alt="..img...."style="height:100px;width:100px;">
        </div>

        @if($data->status =='unborrow')
            <input type="submit" name="unborrow" value="unborrowed" class="btn btn-warning"></a>
        @elseif($data->status =='pendding')
            <input type="submit" name="" value="pendding" class="btn btn-info"></a>
        @else
            <input type="submit" name="" value="borrowed" class="btn btn-success"></a>
        @endif

    </div>
</div>


@endsection