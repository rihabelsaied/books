<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Location;




class UserController extends Controller
{
    public function edit($id)
    {
        $edit = User::findOrFail($id);
        $cat=  Category::all();
        $loc =Location::all();
        return view('users.edit', compact('edit','cat','loc'));
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
        //$users = User::all();
        $user = User::findOrFail($id);
        return view('users.profile',compact('user'));
    }


    //show user by admin
    public function admin()
    {

        $users = User::all();
        //$user = User::find($id);
        $users->role = 1;
       // $user->save();
        //Session::flash('message', 'User Being Admin Successfully');
        return view('admin.users.showuser',compact('users'));
    }


    //delete user by admin
    public function destroy($id)
    {
        User::find($id)->delete();
        
        return redirect('/admin/users');
    }



}
