@extends('layouts.admin')
@section('admin')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Books</h1>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Books Un Borrow ({{$counts}}) </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    @if($counts == 0)
                    <p  class="books"> No books To Show </p>
                    @else

                  <thead>
                    <tr>
                      <th>Book Name</th>
                      <th>Book author</th>
                      <th>Language</th>
                      <th>Image</th>
                     
                      <th>Accept?</th>
                       
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($books as $book)
                 
                    <tr>
                      <td>{{$book->book_name}}</td>
                      <td>{{$book->author->author_name}}</td>
                      <td>{{$book->language}}</td>
                      <td>{{$book->book_image}}</td>
                      <td><a href=""class="btn btn-outline-warning">{{$book->accept}}</a></td>
                      
                       
    
                    </tr>
                      @endforeach
                    </tbody>
                    @endif
                </table>
              </div>
            </div>
          </div>
          <!-- Page Heading -->

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Books Borrow ({{$counts}}) </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                @if($counts == 0)
                     <p  class="books">   No books To Show</p>
                    @else
                  <thead>
                    <tr>
                      <th>Book Name</th>
                      <th>Book author</th>
                      <th>Language</th>
                      <th>Image</th>
                      <th>status</th>
                       
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($Borrows as $Borrow)
                 
                    <tr>
                      <td>{{$Borrow->book_name}}</td>
                      <td>{{$Borrow->author->author_name}}</td>
                      <td>{{$Borrow->language}}</td>
                      <td>{{$Borrow->book_image}}</td>
                      <td><a href=""class="btn btn-outline-success">{{$Borrow->status}}</a></td>
                      
                       
                     
                    </tr>
                      @endforeach
                    </tbody>
                    @endif
                </table>
              </div>
            </div>
          </div>
          









@endsection