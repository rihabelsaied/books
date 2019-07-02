@extends('layouts.admin')
@section('admin')
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Tables</h1>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                @if(count($users) ==0)
                      <p class="books">NO Users To show </p>
                      @else
                  <thead>
                   
                    <tr>
                      <th>UserName</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Location</th>
                      <th>options</th>
                     
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{$user->Username}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->location}}</td>
                      
                    <td><a  class="btn btn-outline-danger deleteUser" id="{{$user->id}}">Delete</td>
                    </tr>
                    
                      @endforeach
                    
                    </tbody>
                    @endif
                </table>
              </div>
            </div>
          </div>
@endsection