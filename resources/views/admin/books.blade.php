@extends('layouts.admin')
@section('admin')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Books</h1>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Books pending ({{$penddingbooks}}) </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    @if($counts == 0)
                    <p  class="books"> No books To Show </p>
                    @else

                  <thead>
                    <tr>
                      <th>Cover</th>
                      <th>Book Id</th>
                      <th>Book Name</th>
                      <th>Book author</th>
                      <th>user</th>
                      <th>Language</th>                            
                      <th>Accept</th>                      
                      <th>Options</th>
                      <th>change</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($books as $book)
                    
                    <tr>
                      @if($book->accept==0)
                      <td><img src="{{asset('images/books/'.$book->book_image)}}" alt="{{$book->book_image}}" style="width:80px"></td>
                      <td>{{$book->id}}</td>
                      <td>{{$book->book_name}}</td>
                      <td>{{$book->author->author_name}}</td>
                      <td></td>
                      <td>{{$book->language}}</td>                      
                      <td><a href=""class="btn btn-outline-warning">{{$book->accept?'Approve':'Pending'}}</a></td> 
                      <td ><a id="accept"  class='btn btn-success' href="{{url('/admin/books/accept',$book->id)}}">Approve</a></td>                       
                      <td>                                                                           
                        <input type="submit" class="btn btn-danger deleteRecord" value="Delete" id="{{$book->id}}">
                      </td>  
                      @endif                                          
                    </tr>
                      @endforeach
                    </tbody>
                    @endif
                </table>
              </div>
            </div>
          </div>
          <!-- Page Heading -->

          <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Books UnBorrow ({{$count_approv_unborrow}}) </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  @if($count_approv_unborrow == 0)
                       <p  class="books">   No books To Show</p>
                      @else
                    <thead>
                      <tr>
                        <th>Cover</th>
                        <th>Book Id</th>
                        <th>Book Name</th>
                        <th>Book author</th>
                        <th>Language</th>                        
                        <th>Accept</th>
                        <th>status</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($approv_unborrows as $approv_unborrow)                   
                      <tr>
                          <td><img src="{{asset('images/books/'.$approv_unborrow->book_image)}}" alt="{{$approv_unborrow->book_image}}" style="width:80px"></td>
                          <td>{{$approv_unborrow->id}}</td>
                          <td>{{$approv_unborrow->book_name}}</td>
                          <td>{{$approv_unborrow->author->author_name}}</td>                          
                          <td>{{$approv_unborrow->language}}</td>                          
                          <td><a href=""class="btn btn-outline-warning">{{$approv_unborrow->accept?'Approve':'Pending'}}</a></td> 
                          <td>{{$approv_unborrow->status}}</td>                                                                
                          <td>                                                                           
                            <input type="submit" class="btn btn-danger deleteRecord" value="Delete" id="{{$approv_unborrow->id}}">
                          </td>
                      </tr>
                        @endforeach
                      </tbody>
                      @endif
                  </table>
                </div>
              </div>
            </div>     
   
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Books Borrow ({{$count}}) </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                @if($count == 0)
                     <p  class="books">   No books To Show</p>
                    @else
                  <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Book Id</th>
                        <th>Book Name</th>
                        <th>Book author</th>
                        <th>Language</th>                        
                        <th>Accept</th>
                        <th>status</th>
                        <th>Options</th>                       
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($Borrows as $Borrow)
                 
                    <tr>
                        <td><img src="{{asset('images/books/'.$Borrow->book_image)}}" alt="{{$approv_unborrow->book_image}}" style="width:80px"></td>
                        <td>{{$Borrow->id}}</td>
                        <td>{{$Borrow->book_name}}</td>
                        <td>{{$Borrow->author->author_name}}</td>                          
                        <td>{{$Borrow->language}}</td>                        
                        <td><a href=""class="btn btn-outline-warning">{{$Borrow->accept?'Approve':'Pending'}}</a></td> 
                        <td >{{$Borrow->status}}</td>                                                                
                        <td>                                                                           
                          <input type="submit" class="btn btn-danger deleteRecord" value="Delete" id="{{$Borrow->id}}">
                        </td>
                    </tr>
                      @endforeach
                    </tbody>
                    @endif
                </table>
              </div>
            </div>
          </div>     
@endsection