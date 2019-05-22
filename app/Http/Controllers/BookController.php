<?php

namespace App\Http\Controllers;

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
            'book_author'=>'required|max:50',
            'language'=>'required'


        ]);
        $books= Book::create($request->only(['book_name', 'book_image','book_author','cat_id']));
     //dd($books->id);
        $book_id=array("book_id"=>$books->id);
        $details =Detail::create(array_merge($book_id,$request->only(['language'])));


        if($books and $details){
            Session::put('msg','This book Is Added Sucessful');
            return redirect('/books/create');
        }


    }
}
