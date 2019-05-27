<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Detail;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function create(){
        $categories= Category::all();
        return view('books.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'book_name'=>'required|max:50',
            'book_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'author_id'=>'required',
            'language'=>'required'


        ]);
        $bookImage = $request->file('book_image');
        $imageName = str_slug($bookImage->getClientOriginalName());
        $bookImage->move(public_path('images/books'), $imageName);
        $books= Book::create([
            'book_name' => $request->book_name,
//            'author_id' => $request->author_id,
            'cat_id' => $request->cat_id,
            'book_image' => $imageName,
        ]);
     //dd($books->id);
        $book_id=array("book_id"=>$books->id);
        $details =Detail::create(array_merge($book_id,$request->only(['language'])));


        if($books and $details){
            Session::put('msg','This book Is Added Sucessful');
            return redirect('/books/create');
        }


    }

    public function showprofile($id){
        $data=User::findOrFail($id);
        return view('users.profile',compact('data'));
    }
}
