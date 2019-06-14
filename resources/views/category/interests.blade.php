
<form action="/user/interest" method="post">
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


    
