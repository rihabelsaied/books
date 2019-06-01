

<!DOCTYPE html>
<html>
<head>
    <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
        }
    </style>
</head>
<body>
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

                        <div>

                        <div class="form-group">
                            <input type="text" name="author_name" id="author_name" class="form-control input-lg" placeholder="Enter Name" />

                            <div id="authorList">
                            </div>
                        </div>
                            @csrf
                        </div>

                    <div class="form-group">
                        <label for="ProductColor">language</label>
                        <input type="text" class="form-control" name="language" required>
                    </div>

                    <button type="submit" class="btn-info">Add</button>
                </div>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>

</body>
</html>

<script>
    $(document).ready(function(){

        $('#author_name').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('autocomplete.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#authorList').fadeIn();
                        $('#authorList').html(data);
                    }
                });
            }
        });

        $(document).on('click', 'li', function(){
            $('#author_name').val($(this).text());
            $('#authorList').fadeOut();
        });

    });
</script>


