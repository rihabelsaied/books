@extends('layouts.app')

@section('content')

<br/>

<span style=" font-size: 60px; margin-right: 250px;">{{$data->Username}}</span>

<img src="{{asset('images/user/'.$data->avatar)}}" class="card-img-top" style="width:150px ; height:200px;" alt="{{$data->Fanme}}">

{{-- <button type="button"  onclick="window.location='{{ url("user/profile/editimg/".$data->id) }}'" class="btn btn-info">Edit</button> --}}

<br/>
<br/>
<br/>
<br/>
<table class="table table-hover table-dark">
  <tbody>

    <tr>
      <th scope="row">Username</th>
      <td>{{$data->Username}}</td>


    </tr>
    <tr>
      <th scope="row">Email</th>
      <td>{{$data->email}}</td>

    </tr>

    <tr>
      <th scope="row">Location</th>
      <td>{{$data->location->location_name}}</td>


    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td>{{$data->phone}}</td>


    </tr>
  </tbody>

</table>
<button type="button"  onclick="window.location='{{ url("user/profile/edit/".$data->id) }}'" class="btn btn-info">Edit</button>

@foreach($data->books as $book)
<div class="card-group">
  <div class="card">
    <img src="{{asset('images/books/'.$book->book_image)}}" class="card-img-top" alt="{{$book->book_name}}">
    <div class="card-body">
      <h5 class="card-title">{{ $book->book_name}}</h5>
      <p class="card-text">{{$book->book_author}}</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>

@endforeach


@endsection
