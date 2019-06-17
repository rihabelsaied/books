<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
   protected $table="rate";
   protected $guarded=[];


   public function user()
   {
       $this->belongsTo('App\User','user_id');
   }
   public function book()
   {
       $this->belongsTo('App\Book','book{id');
   }

}
