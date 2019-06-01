<?php

namespace App\Http\Controllers;

use App\User;
use App\Author;
use App\Category;
use App\Detail;
use App\Book;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use auth;

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
//            'author_id'=>'required',
            'language'=>'required'


        ]);
        $bookImage = $request->file('book_image');
        $imageName = str_slug($bookImage->getClientOriginalName());
        $bookImage->move(public_path('images/books'), $imageName);
        /************* author name*/
        $author_name=$request->author_name ;
        $author =Author::where('author_name','=',$author_name)->value('id');
        if(! $author)
        {
         $author =Author::create($request->only('author_name'));

        }



        $books= Book::create([
            'book_name' => $request->book_name,
            'author_id' => $author,
            'cat_id' => $request->cat_id,
            'book_image' => $imageName,
        ]);
        /********* store in language table*******/
            $lan = Language::create($request->only('language'));

        /************** to get userId***********/
            $user_id = auth::user()->id;
      /***************** to store in table connect books,lang,userID*/

              $details =DB::table('book_languages')->insert([
                  'lang_id'=>$lan->id,
                  'book_id'=>$books->id,
                  'user_id'=>$user_id

              ]);

        if($books and $lan){
            Session::put('msg','This book Is Added Sucessful');
            return redirect('/books/create');
        }


    }


}
