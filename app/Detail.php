<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table="details";
    protected $guarded=[];

    public function book(){
        return $this->belongsTo('App\Book');

    }
}
