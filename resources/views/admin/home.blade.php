@extends('layouts.app')
@section('content')


<div class="container admin">
    <h2>Admin Controls</h2>
    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="">Users</a></li>
        <li><a  href="{{url('admin/books')}}">books</a></li>

    </ul>




@endsection