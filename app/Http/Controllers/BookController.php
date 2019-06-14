<?php

namespace App\Http\Controllers;

use App\User;
use App\Author;
use App\Category;
use App\Detail;
use App\Book;
use App\Language;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Session;

use auth;
use Illuminate\Support\Facades\Auth as IlluminateAuth;

class BookController extends Controller
{
    public function create(){
        $categories= Category::all();
        
        return view('books.create',compact('categories','languages'));
    }


    public function store(Request $request)
    {   $user_id = Auth::id();
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
            'user_id' =>$user_id,
            'author_id' => $author->id,

            'cat_id' => $request->cat_id,
            'book_image' => $imageName,
            'language'=>$request->language,
            // $request->all()

        ]);
       

        if($books){
            Session::flash('msg','This book Is Added Sucessful');
            return redirect()->route('allbook');

        }


    }



/************************** to display books in home */
    public function show(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $books=Book::where([
            ['accept','=','1'],
            ['status', '!=','borrow'],
            
            ])->orderBy('id','desc')->get();
        
           
        return view('home',compact('books'));
            
    //    return view("books.show",compact('data'));
    }
    public function showbook($id)
    {
        
        $data=Book::findOrFail($id);
        // foreach($data->languages as $lang)
        // {
        //     $lang=$lang->pivot->user_id;
           
        // }
        // // dd($lang);
        // $user=DB::table('users')->whereId($lang)->get();
        // // dd($user);
        
        return view("books.showbook")->with(["data"=>$data]);
    }




    public function borrow($id)
    {
        $data=Book::find($id);
        $data->update(['status' => 'pendding']);
        session()->flash('Msg', 'Successfully Updated !!');
        return redirect()->back();
    }


}





