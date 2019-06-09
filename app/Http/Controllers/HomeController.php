<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $books = DB::table('books')->orderBy('id','desc')->get();
        $books = Book::orderBy('id','desc')->get();

//            foreach ($books->details as $detail)
//            {
//               dd($detail->language);
//            }



        return view('home',compact('books'));
    }

    public function dashboard()
    {
        return view('/admin/showuser')->with([
            'users_count' => User::all()->count(),
            'books_count' => Post::all()->count(),

        ]);
    }
}
