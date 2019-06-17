@extends('layouts.master')

@section('body')

<div class=container style="background:#f2f2f2;margin-top:20%;max-width:900px;overflow:auto;">
<div class="col-sm-8">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-left:40%;margin-top:5%">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Books</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Request</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="form form-profile">
  <form class="form-horizontal" action="/user/profile/edit/{{$data->id}}" method="post">
  @csrf
  <fieldset>
    
    <div class="form-group" style="margin-top:15%">
    <div class="img" style="margin-left:60%;margin-bottom:5%">
        <img src="{{asset('images/user/'.$data->avatar)}}" class="img-circle" style="width:50%">
        <p  >{{$data->Username}}</p>
    </div>
      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{$data->email}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-4 control-label">User Name</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" value="{{$data->Username}}">
       
      </div>
    </div>
    
   
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary btn-lg" style="margin-left:50%">Edit</button>
        
      </div>
    </div>
  </fieldset>
</form>

                                     
</div> 
  </div>
<!-- Books -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="margin-top:5%">
  <div class="container">
        <div class="row">
        @forelse($data->books as $book)
          
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/books/'.$book->book_image)}}">

                    <div class="card-block">
                        <h4 class="card-title text-center"> {{$book->book_name}}</h4>
                        <div class="meta ">
                            <a href="#"><h5  class="card-title text-center">{{$book->author->author_name}}</h5></a>
                        </div>
                        <div class="card-text">
                           
                        </div>
                    </div>
                    <div class="card-footer">
                        
                        <span>Uploaded at:<i style="color:#fe4c50;">{{($book->created_at)->diffForHumans()}}</i></span>
                    </div>
                </div>
            </div>
            @empty
                <p>NO BOOks</p>
    @endforelse

            
        </div>
</div>
  </div>



















    


  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
</div>
</div>







@endsection
