<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table="location";
    protected $guarded=[];


    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function getLocationattribute($value){
        return ucfirst($value);
    }
}
