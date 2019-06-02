@extends('layouts.app')

@section('content')

<br/>

<h1 style=" font-size: 60px; margin-right: 250px;">{{$editimg->Username}}</h1>
<div>

<div>
<img src="{{asset('images/user/'.$editimg->avatar)}}" class="card-img-top" style="width:400px ; height:600px;" alt="{{$editimg->Fanme}}">

</div>
<div>
        <button type="button" class="btn btn-info">Update</button>
</div>
</div>




  


@endsection
