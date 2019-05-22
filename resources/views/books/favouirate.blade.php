@foreach($books as $book)
    @foreach($book as $bo)
        {{$bo->book_name}}
    @endforeach
@endforeach
