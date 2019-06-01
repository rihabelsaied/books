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



    public function area()
    {
        return view('auth.register',compact('loctions'));
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
