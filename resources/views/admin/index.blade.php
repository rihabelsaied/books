@extends('layouts.admin')
@section('admin')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
  <div class="row">
  <div class="col-xl-6 col-md-6  mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="{{route('user')}}">USERS</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <div class="col-xl-16 col-md-6  mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
       <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Total Num Of Books</a></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$books}}</div>
          </div>
         <div class="col-auto">
           <i class="fas fa-book-reader fa-2x text-gray-300"></i>
          </div>
       </div>
      </div>
     </div>
  </div>


  </div>

          <!-- Content Row -->
          <div class="row">
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><aclass="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Books Pending by admin</aclass="nav-link></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$booksAccept}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-reader fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Books (Unborrow)</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$booksUnborrow}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-reader fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><aclass="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">books (Borrow)</aclass="nav-link></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$booksBorrow}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-open fa-2x text-gray-300"></i>
                    </div>
</div>
                </div>
              </div>
            </div>            
          </div>   
@endsection