@extends('layouts.master')

@section('body')

<div class=container style="background:#f2f2f2;margin-top:20%;width:800px">
<div class="col-sm-12">
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
  <form class="form-horizontal" action="/user/profile/{{$data->id}}" method="post">
  @csrf
  <fieldset>

<div class="form-group" style="margin-top:15%">

    <div class="img" style="margin-left:40%;margin-bottom:5%">
        <img src="{{asset('images/user/'.$data->avatar)}}" class="img-circle" style="width:50%">
        <p  >{{$data->Username}}</p>
    </div>

    <div class="form-group">
            <label for="inputUsername" class="col-lg-4 control-label">User Name</label>
            <div class="col-lg-8">
              <input readonly type="text" class="form-control" id="inputUsername" value="{{$data->Username}}">
            </div>
          </div>



      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" readonly class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{$data->email}}">
      </div>
     </div>



    <div class="form-group">
            <label for="inputPhone" class="col-lg-4 control-label">Phone</label>
            <div class="col-lg-8">
              <input readonly type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone" value="{{  $data->phone}}">
            </div>
   </div>


   {{--  <div class="form-group">
        <label for="inputPass" class="col-lg-4 control-label">password</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="inputPass" placeholder="Password"  value="000000000">
        </div>
</div>  --}}
<div class="form-group">
        <label for="inputLocation" class="col-lg-4 control-label">Location</label>
        <div class="col-lg-8">
          <input readonly type="text" class="form-control" name= "location" id="inputLocation" placeholder="Location" value="{{  $data->location}}">
        </div>
</div>



    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default pull-right btn-lg">Edit</button>

      </div>
    </div>
  </fieldset>
</form>

 {{--  <button type="submit" class="btn btn-default pull-right btn-lg editajax" id="{{$data->id}}">Edit</button>  --}}
 <form class="form-horizonta " action="/user/deleteaccount/{{$data->id}}" method="post">
  @csrf
  <fieldset>
        <button type="submit" class="btn btn-default pull-right btn-lg btn btn-danger">delete your account</button>
  </fieldset>
  </form>


</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    @forelse($data->books as $book)

  <div class="card mb-5" style="max-width: 540px;">
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
        <p class="card-text">Status : {{$book->status}}</p>
        <p class="card-text"><small class="text-muted">Last updated : {{$book->updated_at}}</small></p>

{{--  delete  --}}
          <div class="col-md-4">
          <form class="form-horizonta " action="/user/deletebook/{{$book->id}}" method="post">
          @csrf
          <fieldset>
                <button type="submit" class="  btn btn-danger">delete</button>
          </fieldset>
          </form>
          </div>


{{--  edit  --}}
          <div class="col-md-4">

           <form class="form-horizonta " action="/books/editbook/{{$book->id}}" method="post">
          @csrf
          <fieldset>
                <button type="submit" class=" btn btn-warning">Edit</button>
          </fieldset>
          </form>
      </div>

      @extends('layouts.master')

      @section('body')

      <div class=container style="background:#f2f2f2;margin-top:20%;width:800px">
      <div class="col-sm-8">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Books</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Request</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent" style="width:700px">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="form form-profile">
        <form class="form-horizontal" action="/user/profile/{{$data->id}}" method="post">
        @csrf
        <fieldset>

      <div class="form-group" style="margin-top:15%">

          <div class="img" style="margin-left:40%;margin-bottom:5%">
              <img src="{{asset('images/user/'.$data->avatar)}}" class="img-circle" style="width:50%">
              <p  >{{$data->Username}}</p>
          </div>

          <div class="form-group">
                  <label for="inputUsername" class="col-lg-4 control-label">User Name</label>
                  <div class="col-lg-8">
                    <input readonly type="text" class="form-control" id="inputUsername" value="{{$data->Username}}">
                  </div>
                </div>



            <label for="inputEmail" class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
              <input type="text" readonly class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{$data->email}}">
            </div>
           </div>



          <div class="form-group">
                  <label for="inputPhone" class="col-lg-4 control-label">Phone</label>
                  <div class="col-lg-8">
                    <input readonly type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone" value="{{  $data->phone}}">
                  </div>
         </div>


         {{--  <div class="form-group">
              <label for="inputPass" class="col-lg-4 control-label">password</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="inputPass" placeholder="Password"  value="000000000">
              </div>
      </div>  --}}
      <div class="form-group">
              <label for="inputLocation" class="col-lg-4 control-label">Location</label>
              <div class="col-lg-8">
                <input readonly type="text" class="form-control" name= "location" id="inputLocation" placeholder="Location" value="{{  $data->location}}">
              </div>
      </div>



          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-warning pull-right btn-lg">Edit</button>

            </div>
          </div>
        </fieldset>
      </form>

      <form class="form-horizonta " action="/user/deleteaccount/{{$data->id}}" method="post">
        @csrf
        <fieldset>
              <button type="submit" class="btn pull-right btn-lg btn btn-danger">delete your account</button>
        </fieldset>
        </form>


      </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="width:700px">
          @forelse($data->books as $book)

        <div class="card mb-5" style="width: 700px;">
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
              <p class="card-text">Status : {{$book->status}}</p>
              <p class="card-text"><small class="text-muted">Last updated : {{$book->updated_at}}</small></p>

      {{--  delete  --}}
                <div class="col-md-4">
                <form class="form-horizonta " action="/user/deletebook/{{$book->id}}" method="post">
                @csrf
                <fieldset>
                      <button type="submit" class="  btn btn-danger">delete</button>
                </fieldset>
                </form>
                </div>


      {{--  edit  --}}
                <div class="col-md-4">

                 <form class="form-horizonta " action="/books/editbook/{{$book->id}}" method="post">
                @csrf
                <fieldset>
                      <button type="submit" class=" btn btn-warning">Edit</button>
                </fieldset>
                </form>
            </div>
            </div>
          </div>
        </div>
      </div>
          @empty
          <p>NO BOOks</p>
          @endforelse
         <a href="/books/create" class="btn btn-primary pull-right">Add Book</a>


        </div>


        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>
      </div>
      </div>







      @endsection


      </div>
    </div>
  </div>
</div>
    @empty
    <p>NO BOOks</p>
    @endforelse



  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
</div>
</div>







@endsection
