<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Author;
use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    //delete user by admin
    
    public function destroy($id)
    {
       
        $deleteuser=User::findOrFail($id);
       
        $books = Book::where('user_id', $deleteuser->id)->get();
        if($books)
        {
            foreach($books as $book)
            {
                $book->delete();
            }
        }
      $deleteuser->delete();

        return redirect('/panal');
 
    }
    public function index()
    {
        
        $users = User::whereRole('0')->get();       
        return view('admin.admin',compact('users'));
    }

   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $book = Book::find($id);
        $book->delete();             
    }
    public function accept($id)
    {
        $book=Book::find($id);
        if($book->accept==0){
            $book->update(['accept'=>1]);
        }
        return redirect('/admin/panal');
    }

    /***************** books category */
    public function selectBook($name)
    {
        $catName = Category::whereName($name)->value('id');
        // dd($catName);
        $books = Book::whereCat_id($catName)->whereStatus('unborrow')->get();
        $Borrows = Book::whereCat_id($catName)->whereStatus('borrow')->get();
        $counts=count($books);
        $count = count($Borrows);
       

       return view('admin.books',compact(['books','counts','Borrows']));

    }
    public function dashbord()
    {   $books = Book::all()->count();
        $booksBorrow= Book::whereStatus('borrow')->count();
        $booksUnborrow= Book::whereStatus('unborrow')->count();
        $booksPend= Book::whereStatus('pending')->count();
        $booksAccept= Book::whereAccept('0')->count();

        $users = User::whereRole(0)->count();

        return view('admin.index',compact(['booksBorrow','booksUnborrow','booksPend','users','booksAccept','books']));


    }
}
