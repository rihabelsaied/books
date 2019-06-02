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
// use Session;

use auth;

class BookController extends Controller
{
    public function create(){
        $categories= Category::all();
        $languages= Language::all();
        return view('books.create',compact('categories','languages'));
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
        $imageName = $bookImage->getClientOriginalName();
        $bookImage->move(public_path('images/books'), $imageName);

        /************* author name*/
        $author_name=$request->author_name ;
        $author =Author::where('author_name','=',$author_name)->first();
        if($author == null)
        {
         $author =Author::create(['author_name'=> $author_name]);



        }



        $books= Book::create([
            'book_name' => $request->book_name,

            'author_id' => $author->id,

            'cat_id' => $request->cat_id,
            'book_image' => $imageName,

        ]);
        /********* store in language table*******/

            // $lan = Language::create($request->only('language'));


        /************** to get userId***********/
            $user_id = auth::user()->id;
      /***************** to store in table connect books,lang,userID*/


              $details =DB::table('book_languages')->insert([
                  'lang_id'=>$request->language,
                  'book_id'=>$books->id,
                  'user_id'=>$user_id

              ]);


        if($books){
            Session::flash('msg','This book Is Added Sucessful');
            return redirect()->route('allbook');

        }


    }




    public function show()
    {
        //
        $data=\App\Book::all()->where('status', '!=','borrow');
        //$data=\App\Book::all()->status('unborrow');
       // $data = \App\Book::where('status', 'unborrow')->get();

       // $authorids= Author::all()->lists('id');
        $data2=\App\Author::all();

        return view("books.show",compact('data','data2'));
    }
    public function showbook($id)
    {
        //
        $data=\App\Book::find($id);

        return view("books.showbook")->with("data",$data);
    }




    public function borrow($id)
    {
        $data=\App\Book::find($id);
        $data->update(['status' => 'pendding']);
        session()->flash('Msg', 'Successfully Updated !!');
        return redirect()->back();
    }


}





