<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Location;
use App\Book;
use DB;

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

   
    public function delete($id){

        $deleteuser=User::findOrFail($id);
        $books = Book::where('user_id', $deleteuser->id)->get();
        DB::table('intersets')->where('user_id', $deleteuser->id)->delete();
        DB::table('books_users')->where('owner_id', $deleteuser->id)->delete();

      


        if($books)
        {
            foreach($books as $book)
            {
                $book->delete();
            }
         
        }
           $deleteuser->delete();
        return redirect('/');
    }
    
    
    public function deletebook($id){
    
        $deletebook=Book::findOrFail($id);
       
        $deletebook->delete();
       
        return redirect()->back();
    }
    
    public function showprofile($id)
    {
        $data = User::findOrFail($id);
        return view('users.profile', compact('data'));
    }


    public function index($id)
    {
        $users = User::all();
        return view('users.profile',compact('user'));
    }
    

}
