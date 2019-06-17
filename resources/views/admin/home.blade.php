
@extends('layouts.master')
@section('body')
<div class="layout-2cols" style="margin-top:10%">
        
            <div class="project-detail">
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"><a href="#">Users</a></li>                      
                      <li><a href="#" class="be-fc-orange">Books</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Profile</h3>
                            <div class="tab-pane accordion-content active">
                                    <table class="table">
                                            <thead>
                                              <tr> 
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Option</th>
                                              </tr>
                                        
                                            </thead>
                                            <tbody>                                            
                                                @foreach($users as $user)
                                                  <tr>                                        
                                                    <td>{{$user->Username}}</td>
                                                    <td>{{$user->email}}</td>                                    
                                                    <td>
                                                        <form method="POST" action="/admin/users/{{$user->id}}">
                                                            @csrf                                                    
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                                                            </div>
                                                        </form>
                                                    </td>
                                                  </tr>
                                                @endforeach                                             
                                            </tbody>
                                          </table>
                            </div><!--end: .tab-pane -->
                        </div>                                            
                        <div>
                            
                            <div class="tab-pane accordion-content">
                                
                                    <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">                                              
                                              <a class="nav-item nav-link" id="nav-pendding-tab" data-toggle="tab" href="#nav-pendding" role="tab" aria-controls="nav-pendding" aria-selected="false" class="active">pendding</a>
                                              <a class="nav-item nav-link" id="nav-Aprove-tab" data-toggle="tab" href="#nav-Aprove" role="tab" aria-controls="nav-Aprove" aria-selected="false">Aprove</a>
                                            </div>
                                          </nav>                                                                                     
                                            <div class="tab-pane fade" id="nav-pendding" role="tabpanel" aria-labelledby="nav-pendding-tab" class="tab-pane accordion-content active">
                                                    <table class="table table-hover" id="book_table">
                                                            <thead>
                                                            <tr>
                                                                <th>book_id</th>
                                                                <th>book_name</th>
                                                                <th>author_name</th>
                                                                <th>Language</th>
                                                                <th>book_image</th>
                                                                <th>cat_name</th>
                                                                <th>user_book status</th>
                                                                <th>admin status</th>                                                                
                                                                <th >Options</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($books as $book)
                                                                <tr>
                                                                   @if($book->accept==0)
                                                                         <td>{{$book->id}}</td>
                                                                        <td>{{$book->book_name}}</td>
                                                                        <td>{{$book->author->author_name}}</td>
                                                                        <td>{{$book->language}}</td>
                                                                        <td><img src="{{asset('images/books/'.$book->book_image) }}" alt="{{$book->name}}" ></td>
                                                                        <td>cat</td>
                                                                        <td>{{$book->status}}</td>
                                                                        <td>{{$book->accept?'Approve':'Pending'}}</td>                                                                        
                                                                        <td ><a id="accept"  class='btn btn-success' href="{{url('books/accept',$book->id)}}">Approve</a></td>                                                                  
                                                                        <td>                                                                           
                                                                            <input type="submit" class="btn btn-danger deleteRecord" value="Delete" id="{{$book->id}}">
                                                                        </td>                                            
                                                                   @endif
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                            </div>
                                            <div class="tab-pane fade" id="nav-Aprove" role="tabpanel" aria-labelledby="nav-Aprove-tab">
                                                    <table class="table table-hover" id="book_table">
                                                            <thead>
                                                            <tr>
                                                                 <th>book_id</th>
                                                                <th>book_name</th>
                                                                <th>author_name</th>
                                                                <th>Language</th>
                                                                <th>book_image</th>
                                                                <th>cat_name</th>
                                                                <th>user_book status</th>
                                                                <th>admin status</th>
                                                                <th >Options</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($books as $book)
                                                                <tr>
                                                                   @if($book->accept==1)
                                                                        <td>{{$book->id}}</td>
                                                                        <td>{{$book->book_name}}</td>
                                                                        <td>{{$book->author->author_name}}</td>
                                                                        <td><td>{{$book->language}}</td></td>                                                                        
                                                                        <td><img src="{{asset('images/books/'.$book->book_image) }}" alt="{{$book->book_name}}" ></td>
                                                                        <td>{{$book->cat_id}}</td>
                                                                        <td>{{$book->status}}</td>
                                                                        <td>{{$book->accept?'Approve':'Pending'}}</td>
                                                                    <td><input type="submit" class="btn btn-danger deleteRecord" value="Delete" id="{{$book->id}}"> </td>                                                                                                                                                                                                                                                                    </td>                                            
                                                                   @endif
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                            </div>
                                          </div>
                            </div><!--end: .tab-pane -->
                        </div>
                      </div>                
                    </div><!--end: .project-tab-detail -->
            </div>
               
    </div>
@endsection       

