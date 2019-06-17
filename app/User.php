<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'Username','avatar','phone','location','email', 'password','role',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function books()
    {
        return $this->hasMany('App\Book');
    }
   
    public function interests()
    {
        return $this->belongsToMany('App\Category','intersets','user_id','cat_id')->withPivot('cat_id', 'user_id');
    }

   
    public function comments()

    {
        return $this->hasMany('App\Comment');
    }
    public function rates()
    {
        $this->hasMany('App\Rate');
    }


    
}
