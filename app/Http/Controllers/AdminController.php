<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Author;
use Illuminate\Http\Request;

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
        User::find($id)->delete();
        
        return redirect('/admin/users');
    }
    public function index()
    {
        $books=Book::all();
        $users = User::all();        
        return view('admin.books.index',["books"=>$books,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
       return redirect('admin/books');
    }
    public function accept($id){
        $book=Book::find($id);
        if($book->accept==0){
            $book->update(['accept'=>1]);
        }
        return redirect('admin/books');
    }
}
