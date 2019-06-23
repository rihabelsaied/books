@extends('layouts.master')

@section('body')
@extends('layouts.header')

<div class="container " style="background:#f2f2f2;margin-top:15%;padding-bottom:20px">
<div class="col-xl-12 ">
  <nav>
  <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Books</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Request</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="col-md-8 offset-md-2" >
    <span class="anchor" id="formUserEdit"></span>
 <div class="card card-outline-secondary">

                        <div class="card-header">
                          <div class="col-xs-6 offset-4">
                           <img src="{{asset('images/user/'.$data->avatar)}}" class="img-circle" style="width:150px">
                        </div>
                        </div>
                        <div class="card-body">
                            <form  method="post"  action="/user/profile/{{$data->id}}" method="post" role="form"  >
                            @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">User Name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{$data->Username}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="{{$data->email}}">
                                       
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{$data->phone}}">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Location</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{$data->location}}">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-lg-4 offset-4">
                                    <input type="submit" class="btn btn-info btn-lg" value="Edit Info">
                                      </div>
                                    </div>

                            </form>
                        </div>
                              
                                
                                 <div class="card-footer" >
                                  <div class="form-group row">
                                    <div class="col-lg-4 offset-4">
                                          <form class="form-horizonta " action="/user/deleteaccount/{{$data->id}}" method="post" style="width:55%">
                                            @csrf
                                            <button type="submit" class="btn btn-lg btn-danger" style="width:100%;font-size:13px">delete account</button>
                                          </form>
                                      </div>
                                  </div>
                                  </div>
                           
                    </div>
                 </div>
               </div>


  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    @forelse($data->books as $book)

  <div class="card mb-5" style="max-width: 540px;margin:30px">
  <div class="row no-gutters">
    <div class="col-md-4">
    <a href="/books/showbook/{{$book->id}}">
      <img  src="{{asset('images/books/'.$book->book_image)}}" class="card-img" alt="{{$book->book_name}}"  style="width:150px;height:200px;  margin: 25px;">
    </a>
    </div>
    <div class="col-md-6" style="  margin: 25px;" >
      <div class="card-body">
        <h5 class="card-title">{{$book->book_name}}</h5>
        <p class="card-text">Author : {{$book->author->author_name}}</p>
        <p class="card-text">Language : {{$book->language}}</p>
        <p class="card-text"><small class="text-muted">Last updated : {{$book->updated_at}}</small></p>

{{--  delete  --}}
          <div class="col-md-4">
          <form class="form-horizonta " action="/user/deletebook/{{$book->id}}" method="post">
          @csrf
          <fieldset>
                <button type="submit" class="  btn btn-danger">delete</button>
          </fieldset>
          </form>
          <div class="col-md-4">
          <button type="sumbit" class="btn btn-primary">{{$book->status}}</button>
          </div>

          </div>




     
      </div>
    </div>
  </div>
</div>
    @empty
    <p>NO BOOks</p>
    @endforelse



  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    @foreach($data->booksRequest as $dat)                                                                                                          
    
     <p style="color:red">{{$dat->pivot->book_id}}</p>
     @endforeach
  </div>
</div>
</div>
</div>







@endsection
