
    @extends('layouts.master')
    @section('body')
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
    <div class="container" style="margin:10%">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
                            <h2 class="contact__title">Create Books</h2>
                            <form  method="Post" class="md-form" action="/books/store" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                        
                                <div class="single-contact-form space-between">
                                    <input type="text"  name="book_name" placeholder="Enter Name Of Book*" required>
                                    <input type="text" name="author_name" id="author_name"  placeholder="Enter Author Name*" >

                                    <div id="authorList">
                                    </div>
                                    @csrf
                                </div>
                                <div class="form-row">
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
                        <div>
    
   <input type="text" name="language">
                                </div>
                               

<input type="file" name="book_image" value="fileupload" id="fileupload">
 <label for="fileupload"> Select a file to upload</label> 






                                <div class="contact-btn">
                                <button type="submit" class="btn-info pull-right">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
    
                                


















    <!-- <div class="container">
        <div class="row justify-content-center">

    <div class="col-sm-10 panel panel-default"  >
        <div class="panel-heading" style="color:#f51167;font-size:25px">
            <i> Create Book</i>
        </div>
        <div class="panel-body">

            <form method="POST" action="/books/store" enctype="multipart/form-data" autocomplete="off">


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
                        <div>

                        <div class="form-group">
                            <input type="text" name="author_name" id="author_name" class="form-control input-lg" placeholder="Enter Name" />

                            <div id="authorList">
                            </div>
                        </div>
                            @csrf
                        </div>

                        <div class="form-group">
                        <label for="ProductCategory">book language</label>
                      
                        <div>
                    <button type="submit" class="btn-info">Add</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div> -->
    

@endsection