<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    protected $guarded=[];
    public function books()
    {
        return $this->hasMany('App\Book');
    }
    public function users(){
        return $this->belongsToMany('App\User','intersets','cat_id','user_id')->withPivot('cat_id', 'user_id');

    }
}
