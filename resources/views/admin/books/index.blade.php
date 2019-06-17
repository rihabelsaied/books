


<div class="container admin">
    <h2>Admin Controls</h2>
    <hr>
    @section('home')
    <ul class="nav nav-tabs" >

    <li><a  href="{{url('admin/users')}}">Users</a></li>
    <li><a  href="{{url('admin/books')}}">books</a></li>

    </ul>
   
<h1>Books</h1>
<ul class="nav nav-tabs" >
  
        <li><a  href="{{url('admin/users')}}">Users</a></li>
        <li><a  href="{{url('admin/books')}}">books</a></li>
</ul>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>book_name</th>
                    <th>author_id</th>
                    <th>book_image</th>
                    <th>cat_id</th>
                    <th>status</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
{{--                        @if($book->accept==0)--}}
                            <td>{{$book->book_name}}</td>
                            <td>{{$book->author->author_name}}</td>
                            <td><img ></td>
                            <td>{{$book->cat_id}}</td>
                            <td>{{$book->accept?'Approve':'Pending'}}</td>
                            <td><a  class='btn btn-success' href="{{url('books/accept',$book->id)}}">Approve</a></td>
                            <td>
                                <form action="/admin/books/{{$book->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-danger">delete</button>
                                </form>
                            </td>
{{--                        @endif--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    </div>
    </div>
    </div>
    <h1>Users</h1>
<ul class="nav nav-tabs" >
  
  <li><a  href="{{url('admin/users')}}">Users</a></li>
  <li><a  href="{{url('admin/home')}}">books</a></li>
</ul>
  <table class="table">
    <thead>
      <tr> 
        <th>Name</th>
        <th>Email</th>
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



