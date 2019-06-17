
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
    <!-- <div class="container" style="margin:10%">
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
    </div> -->
    
                                
 <!-- form user info -->
 <div class="col-md-8 offset-md-2" style="margin-top:10%">
    <span class="anchor" id="formUserEdit"></span>
     <hr class="my-5">
 <div class="card card-outline-secondary">

                        <div class="card-header">
                            <h3 class="mb-0">Create Books</h3>
                        </div>
                        <div class="card-body">
                            <form  method="post" action="/books/store" role="form"  enctype="multipart/form-data" autocomplete="off">
                            @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Book Name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="book_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Book author</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"  name="author_name" id="author_name">
                                        <div id="authorList">
                                        </div>
                                             @csrf
                                    </div>
                                    </div>
                              
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Category</label>
                                    <div class="col-lg-9">
                                        <select name="cat_id" id="user_time_zone" class="form-control" size="0">
                                        @foreach($categories as $category)

                                            <option value="{{$category->id}}" >{{$category->name}}</option>
                                            @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Language</label>
                                    <div class="col-lg-9">
                                        <select name="language" id="user_time_zone" class="form-control" size="0">
                                        <option value="Ar" >Arabic</option>
                                        <option value="En" >English</option>
                                        <option value="other">Others</option>
                                           
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Category</label>
                                    <div class="col-lg-9">

                                        <input type="file" name="book_image" value="fileupload" id="fileupload">
                                    </div>
                                </div>    


                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Add">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
 </div>
    </div>
   
                    <!-- /form user info -->
@endsection

















   