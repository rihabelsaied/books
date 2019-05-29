<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table='languages';
    protected $guarded=[];


    /***************/
    public function books()
    {
        return $this->belongsToMany('App\Book','book_languages');
    }
}
