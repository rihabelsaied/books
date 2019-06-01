@extends('layouts.app')
@section('content')

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>book_name</th>
                    <th>author_id</th>
                    <th>book_image</th>
                    <th>cat_id</th>
                    <th>status</th>
                    <th >Options</th>
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
@endsection

