<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Location;



class UserController extends Controller
{
    public function __construct()
    {
       
    }
  

    public function edit($id)
    {
        $edit = User::findOrFail($id);
       
        return view('users.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $dataupdate = User::findOrFail($id);
        $dataupdate->update($request->all());
        return redirect("/user/profile/$id");
    }

    public function userProfile($id)
    {
        $user = User::findOrFail($id);
        return view('users.profile', compact('user'));
    }

    




    public function area()
    {
        return view('auth.register', compact('loctions'));
    }


    public function showprofile($id)
    {
        $data = User::findOrFail($id);
        
        return view('users.profile', compact('data'));
    }


    public function index($id)
    {
        $users = User::all();
        //$user = User::findOrFail($id);
        return view('users.profile',compact('user'));
    }


    //admin sara
   



}
