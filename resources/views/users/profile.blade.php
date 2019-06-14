@extends('layouts.master')

@section('body')
<div class="container bootstrap snippet" style="margin-top:15%">
    
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="{{asset('images/user/'.$data->avatar)}}" class="img-rounded" alt="avatar">
        <h3>{{$data->Username}}</h3>
      </div><br>
 
        </div><!--/col-3-->
    	<div class="col-sm-9">
      <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Request</a>
  </li>
  
</ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <div class="container" style="margin-top:10%">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
        				
                            <form  action="/user/profile/edit/{{$data->id}}" method="post">
                            @csrf
                                <div class="single-contact-form space-between">
                                  <div class="col-sm-6">
                                    <h4 >User name: </h4>
                                  </div>
                                  <div class="col-sm-6">
                                    <h4 >{{$data->Username}} </h4>
                                  </div>
     
                                </div>
                                <div class="single-contact-form space-between">
                                  <div class="col-sm-6">
                                    <h4 >Email: </h4>
                                  </div>
                                  <div class="col-sm-6">
                                    <h4 >{{$data->email}} </h4>
                                  </div>
     
                                </div>

                                <div class="single-contact-form space-between">
                                  <div class="col-sm-6">
                                    <h4 >Phone: </h4>
                                  </div>
                                  <div class="col-sm-6">
                                    <h4 >{{$data->phone}} </h4>
                                  </div>
     
                                </div>
                                <div class="single-contact-form space-between">
                                  <div class="col-sm-6">
                                    <h4 >location: </h4>
                                  </div>
                                  <div class="col-sm-6">
                                    <h4 >{{$data->location->location_name}}</h4>
                                  </div>
     
                                </div>
                                
                               
                                <div class="contact-btn">
                                <button type="submit" class="btn-info pull-right">Edit</button>
                                </div>
              	</form>
              
              
              </div>
              </div>
            </div>
                </div>
              
             </div><!--/tab-pane-->
             
                       </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      



@endsection
