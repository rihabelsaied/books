@extends('layouts.master')
@section('body')


<div class="container-fluid" style="margin-top:15%">
    <div class="row ">
        <p class="int"> Choose Your Interests Please</p>
        <div class="col-xl-8 offset-2">
            <form action="/user/interest" method="post">
                @csrf
            <ul style="width:86%">
            @foreach($categories as $category)
            <li>
            <input type="checkbox"  value="{{$category->id}}" name="cat_id[]" id="{{$category->id}}" />
              <label for="{{$category->id}}"><img src="{{asset('images/books/'.$category->image)}}" /></label>
                     <p class="interst">{{$category->name}}</p> 
            </li>
            @endforeach 
 
</ul>
<button class=" btn btn-primary btn-lg save">Save</button>

</form>
        </div>
    </div>
</div>
@endsection


    
