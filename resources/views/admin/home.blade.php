
@extends('layouts.app')
@section('content')


<div class="container admin">
    <h2>Admin Controls</h2>
    <hr>
    <ul class="nav nav-tabs">

        <li><a data-toggle="tab" href="">Users</a></li>
        <li><a  href="{{url('admin/books')}}">books</a></li>

    </ul>



 <!-- Sidebar-->

 <div class="col-lg-12">
    <aside aria-label="sidebar" class="sidebar sidebar-right">
        <div  class="widget w-tags">
            <div class="heading text-center">
                <h4 class="heading-title">ALL BLOG USERS</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>

            <div class="tags-wrap">

            </div>
        </div>
    </aside>
</div>




@endsection