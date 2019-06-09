@extends('../layouts.app')
@section('content')

  <h1>Users</h1>
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


@endsection