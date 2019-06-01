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
        $this->middleware('admin');
    }
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

    public function userProfile($id)
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


    public function index($id)
    {
        $users = User::all();
        //$user = User::findOrFail($id);
        return view('users.profile',compact('user'));
    }


    //admin sara
    public function admin()
    {

        $user = User::all();
        //$user = User::find($id);
        $user->role = 1;
       // $user->save();
        //Session::flash('message', 'User Being Admin Successfully');
        return view('admin.home');
    }


    //delete user by admin
    public function removeAdminDelete($id)
    {
        $user = Admin::find($id);
        File::delete($user->photo);
        $user->delete();
        Session::flash('successDelete', "ok");
        if(Auth::user()->id == $id){
            Auth::user()->logout();
            return Redirect::to("administrator");
        }else{
            return Redirect::back();
        }
    }



}
