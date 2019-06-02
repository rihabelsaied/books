
@extends('layouts.app')
@section('content')


<div class="container admin">
    <h2>Admin Controls</h2>
    <hr>
    <ul class="nav nav-tabs">

    <li><a  href="{{url('admin/users')}}">Users</a></li>
        <li><a  href="{{url('admin/books')}}">books</a></li>

    </ul>
@endsection