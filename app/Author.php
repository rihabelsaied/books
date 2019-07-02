<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table="author";
    protected $guarded=[];




    /***********************
     *
     */
    public function books()
    {
        return $this->hasMany('App\Book');
    }
    public function setAuthorNameAttribute($value)
    {
        $this->attributes['author_name'] = strtolower($value);
    }
}
