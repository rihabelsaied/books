@extends('layouts.app')

@section('content')
    <span class="alert-success text-center" style="margin-left:30%;font-size:20px">
    <?php
        $msg = Session::get('msg');
        if($msg){
            echo "$msg";
            Session::put('msg',null);
        }
        ?>
  </span>
    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    {{$error}}
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">

    <div class="col-sm-10 panel panel-default"  >
        <div class="panel-heading" style="color:#f51167;font-size:25px">
            <i> Create Book</i>
        </div>
        <div class="panel-body">
            <form method="POST" action="/books/store" enctype="multipart/form-data" >

                @csrf
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="ProductName">Name</label>
                        <input type="text" class="form-control" name="book_name" placeholder="Enter Name Of Book" required>
                    </div>
                    <div class="form-group">
                        <label for="Image"> Image</label>
                        <input class="file-path validate" type="file" placeholder="Upload your file" name="book_image" required>

                    </div>
                    <div class="form-group">
                        <label for="ProductCategory">book Category</label>
                        <div class="form-group">
                            <select name="cat_id" >
                                <option >select</option>
                                @foreach($categories as $category)

                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="ProductColor">Author</label>
                        <input type="text" class="form-control" name="book_author" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductColor">language</label>
                        <input type="text" class="form-control" name="language" required>
                    </div>

                    <button type="submit" class="btn-info">Add</button>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>

    @endsection
