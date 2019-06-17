<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table="books";
    protected $guarded=[];


    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
   
   
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
   
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function ratesBook()
   {
       $this->belongsTo('App\Rate');
   }
}
