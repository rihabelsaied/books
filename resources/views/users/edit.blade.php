@extends('layouts.master')

@section('body')

<div class=container style="background:#f2f2f2;margin-top:15%;width:800px">
<div class="col-sm-8">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Books</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Request</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="form form-profile">

        <form action = "/user/profile/update/{{ $edit->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
           {{ method_field('PUT') }}
  <fieldset>

<div class="form-group" style="margin-top:15%">

    <div class="img" style="margin-left:40%;margin-bottom:5%">
        <img src="{{asset('images/user/'.$edit->avatar)}}" class="img-circle" style="width:50%">
        <p  >{{$edit->Username}}</p>
    </div>

    <div class="form-group">
            <label for="inputUsername" class="col-lg-4 control-label">User Name</label>
            <div class="col-lg-8">
              <input type="text" class="form-control"name="Username" value="{{$edit->Username}}">
            </div>
          </div>


      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{$edit->email}}">
      </div>
    </div>



    <div class="form-group">
            <label for="inputPhone" class="col-lg-4 control-label">Phone</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone" value="{{  $edit->phone}}">
            </div>
   </div>



 

<div class="form-group">
        <label for="inputLocation" class="col-lg-4 control-label">Location</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" name= "location" id="inputLocation" placeholder="Location" value="{{  $edit->location}}">
        </div>
</div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default pull-right btn-lg">update</button>
      </div>
    </div>
  </fieldset>
</form>





</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    @forelse($edit->books as $book)
            {{$book->book_name}}
            {{$book->author->author_name}}
    @empty
    <p>NO BOOks</p>
    @endforelse



  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
</div>
</div>







@endsection
