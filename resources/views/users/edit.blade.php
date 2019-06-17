@extends('layouts.app')

@section('content')

<form action = "/user/profile/update/{{ $edit->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
   {{ method_field('PUT') }}
       <div class="form-group">

       

        {{-- <input type="image" src="{{ asset('images/user/'.$edit->avatar)}}" alt="Avatar" class="card-img-top" style="width:150px ; height:200px;"/> --}}
        <img src="{{asset('images/user/'.$edit->avatar)}}" class="card-img-top" style="width:150px ; height:200px;" />
        <input type="file" name="pic" accept="image/*">

        <br/>
           <label for="Username">Username</label>
           <input type = "text" name = "Username" class="form-control" value="{{ isset($edit->Username) ? $edit->Username : '' }}" />

           <label for="email">email</label>
           <p>{{ $edit->email }}</p>

          
      

           <label for="phone">Phone</label>
           <input type = "text" name = "phone" class="form-control" value="{{ isset($edit->phone) ? $edit->phone : '' }}" />

        </div>




       <div class="form-group">
           <input type = "submit" value = "Update" class="btn btn-primary form-control" />

       </div>
   </form>


   <br>
   <hr>
   <br>




@endsection
