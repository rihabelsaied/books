<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;

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

      return response()->json([
        'msg'=>'data',
        ]);
 
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
        return response()->json([
            'msg'=>'data',
        ]);
                     
    }
    public function accept($id)
    {
        $book=Book::find($id); 
        $cat=Category::find($book->cat_id);
        $catname=$cat->name;
        // dd($catname);
        if($book->accept==0){
            $book->update(['accept'=>1]);
        }
        return redirect('/admin/category/'.$catname);
    }

    /***************** books category */
    public function selectBook($name)
    {
        $catName = Category::whereName($name)->value('id');
        // dd($catName);
        $books = Book::whereCat_id($catName)->whereStatus('unborrow')->whereAccept('0')->get();  
        $approv_unborrows = Book::whereCat_id($catName)->whereStatus('unborrow')->whereAccept('1')->get();      
        $Borrows = Book::whereCat_id($catName)->whereStatus('borrow')->get();
        $booksUnaccept = Book::whereCat_id($catName)->whereAccept('0')->get();
        $counts=count($books);
        $count = count($Borrows);
        $penddingbooks=count($booksUnaccept); 
        $count_approv_unborrow=count($approv_unborrows);    

       return view('admin.books',compact(['books','counts','Borrows','penddingbooks','count','count_approv_unborrow','approv_unborrows']));

    }
    public function dashbord()
    {   $books = Book::all()->count();
        $booksBorrow= Book::whereStatus('borrow')->count();
        $booksUnborrow= Book::whereStatus('unborrow')->whereAccept('1')->count();
        
        $booksAccept= Book::whereAccept('0')->count();

        $users = User::whereRole(0)->count();

        return view('admin.index',compact(['booksBorrow','booksUnborrow','users','booksAccept','books']));


    }
}
