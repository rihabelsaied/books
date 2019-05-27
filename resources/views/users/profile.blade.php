
@extends('layouts.app')
<style type="text/css">
    .profile{
        max-width:150px;
        border:5px solid #fff;
        border-radius: 100%;
        box-shadow: 2px 2px gray;
        margin-top:5%

    }
    .card{
        margin-top:10%;
    }



    .card h1{
        color:darkred
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">

                <div class="col-md-6 ">
                    <div class="card">
                        <form method="post" action="/profile/{{$user->id}}">
                            {{method_field('PUT')}}
                            @csrf

                        <div class="card-block text-center">
                            <img class="profile" src="{{asset('images/'.$user->avatar)}}">
                            <h1>{{$user->Username}}</h1>
                            <h3>{{$user->email}}</h3>
                            <h2>{{$user->phone}}</h2>
                            <button class="btn btn-warning">Edit</button>
                        </div>

            </form>
                    </div>
                </div>

        </div>
    </div>
@endsection
