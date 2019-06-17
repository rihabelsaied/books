@extends('layouts.master')
@section('body')
<form action="/user/interest" method="post" style="margin-top:15%">
    @csrf
    <div class="row">
        <div class="col-md-12">
            @foreach($categories as $category)
                <input type="checkbox" value="{{$category->id}}" name="cat_id[]">{{$category->name}}
            @endforeach


            <button class="btn-save btn btn-primary btn-sm">Save</button>

        </div>
    </div>
</form>
<!-- Material unchecked -->
<!-- Material indeterminate -->
<div class="form-check">
  <input type="checkbox" class="form-check-input" id="materialIndeterminate2" checked>
  <label class="form-check-label" for="materialIndeterminate2">Material indeterminate</label>
</div>
@endsection


    
