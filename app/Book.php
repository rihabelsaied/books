<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table="books";
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function users(){
        return $this->belongsToMany('App\User','books_users','book_id','needed_id');
    }
    public function details(){
        return $this->hasMany('App\Detail');
    }
}
