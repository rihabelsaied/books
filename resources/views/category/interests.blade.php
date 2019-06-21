@extends('layouts.master')
@section('body')


<div class="container-fluid" style="margin-top:15%">
    <div class="row ">
        <p class="int"> Choose Your Interests Please</p>
        <div class="col-xl-8 offset-2">
            <form action="/user/interest" method="post">
                @csrf
            <ul>
            @foreach($categories as $category)
            <li><input type="checkbox"  value="{{$category->id}}" name="cat_id[]"  />
                <label for="cb1"><img src="{{asset('images/books/'.$category->image)}}" /></label>
                    <!-- <p class="interst">{{$category->name}}</p> -->
            </li>
            @endforeach
  <!-- <li><input type="checkbox" id="cb2" />
    <label for="cb2"><img src="{{asset('images/books/index.jpeg')}}" /></label>
  </li>
  <li><input type="checkbox" id="cb3" />
    <label for="cb3"><img src="{{asset('images/books/images.jpeg')}}" /></label>
  </li>
  <li><input type="checkbox" id="cb4" />
    <label for="cb4"><img src="{{asset('images/books/i.png')}}" /></label>
  </li> -->
</ul>
<button class=" btn btn-primary btn-lg save">Save</button>

</form>
        </div>
    </div>
</div>
@endsection


    
