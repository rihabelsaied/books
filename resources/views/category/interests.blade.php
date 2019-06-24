@extends('layouts.master')
@section('body')


<div class="container-fluid" style="margin-top:5%">
    <div class="row ">
        <h1 class="mx-auto mb-5  alert alert-danger"  #fe4c50> Choose Your Interests Please</h1>
        <div class=" mx-auto col-xl-8 offset-1 "style="padding-left:100px" >
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
<button class=" btn btn-success btn-lg save"style="margin-top:9%  margin-bottom:9%" >Save</button>

</form>
        </div>
    </div>
</div>
@endsection


    
