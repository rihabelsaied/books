<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
   protected $table="rate";
   protected $fillable = ['star', 'user_id', 'book_id'];


   public function user()
   {
       $this->belongsTo('App\User','user_id');
   }
   public function book()
   {
       $this->belongsTo('App\Book','book{id');
   }

}
