<?php

namespace App\Http\Controllers;

use App\Location;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('users.profile',compact('user'));
    }
    public function area()
    {
        return view('auth.register',compact('loctions'));
    }
}
