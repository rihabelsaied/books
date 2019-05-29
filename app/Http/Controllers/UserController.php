<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Location;



class UserController extends Controller
{
    public function editimg($id)
    {
        $editimg = User::findOrFail($id);
        return view('users.editimg', compact('editimg'));

    }

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
        // $dataupdate->Username = $request->Username;
        // // $dataupdate->email = $request->email;
        // $dataupdate->location_id = $request->location_id;
        // $dataupdate->phone = $request->phone;
        // $dataupdate->save();
        // return view('users.profile', compact('dataupdate'));
        $dataupdate->update($request->all());
        return redirect("/user/profile/$id");
    }

    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('users.profile', compact('user'));
    }

    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     // $user->delete();
    //     return view('users.profile', compact('user'));
    // }

    public function area()
    {
        return view('auth.register', compact('loctions'));
    }

    public function showprofile($id)
    {
        $data = User::findOrFail($id);
        return view('users.profile', compact('data'));
    }

}
