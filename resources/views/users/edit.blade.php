@extends('layouts.master')

@section('body')
@include('layouts.header')

<div class=container style="background:#f2f2f2;">
<div class="col-xl-12">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Books</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Request</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent" style="height:800px">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="col-md-8 offset-md-2" >
    <span class="anchor" id="formUserEdit"></span>
     <hr class="my-5">
 <div class="card card-outline-secondary">

    <div class="card-header">
      <div class="col-xs-6 offset-4">
        <img src="{{asset('images/user/'.$edit->avatar)}}" class="img-circle" style="width:150px">
      </div>
    </div>
   <div class="card-body">
     <form  action = "/user/profile/update/{{ $edit->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('PUT') }} 
                           
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">User Name</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="Username" value="{{$edit->Username}}">
               </div>
           </div>
          <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Email</label>
           <div class="col-lg-9">
              <input class="form-control" type="email"  name="email" value="{{$edit->email}}">
                                       
            </div>
          </div>
          <div class="form-group row">
             <label class="col-lg-3 col-form-label form-control-label">Phone</label>
              <div class="col-lg-9">
               <input class="form-control" type="text" name="phone" value="{{$edit->phone}}">
              </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Location</label>
            <div class="col-lg-9">
              <input class="form-control" type="text" name="location" value="{{$edit->location}}">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4 offset-4">
             <input type="submit" class="btn btn-info btn-sucess" value="Update">
            </div>
          </div>

    </form>
  </div>
 </div>
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
