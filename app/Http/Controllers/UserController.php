<?php

namespace App\Http\Controllers;

use App\Location;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index($id)
    {
        $user = User::findOrFail($id);

        return view('users.profile',compact('user'));
    }
    public function admin()
    {

        $user = User::all();
        $user->role = 1;

        return view('admin.home');
    }
    public function area()
    {
        return view('auth.register',compact('loctions'));
    }
}
