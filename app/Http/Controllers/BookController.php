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
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Session;

use auth;
use Illuminate\Support\Facades\Auth as IlluminateAuth;
use SebastianBergmann\Environment\Console;
use App\Rate;

class BookController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('books.create', compact('categories', 'languages'));
    }


    public function store(Request $request)
    {
        $user_id = Auth::id();
        $request->validate([
            'book_name' => 'required|max:50',
            'book_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //            'author_id'=>'required',
            'language' => 'required'


        ]);
        $bookImage = $request->file('book_image');
        $imageName = $bookImage->getClientOriginalName();
        $bookImage->move(public_path('images/books'), $imageName);

        /************* author name*/
        $author_name = $request->author_name;
        $author = Author::where('author_name', '=', $author_name)->first();
        if ($author == null) {
            $author = Author::create(['author_name' => $author_name]);
        }



        $books = Book::create([
            'book_name' => $request->book_name,
            'user_id' => $user_id,
            'author_id' => $author->id,

            'cat_id' => $request->cat_id,
            'book_image' => $imageName,
            'language' => $request->language,
            // $request->all()

        ]);


        if ($books) {
            Session::flash('msg', 'This book Is Added Sucessful');
            return redirect()->back();
        }
    }



    /************************** to display books in home */
    public function show(Request $request)
    {
        $user_id = Auth::user()->id;

        $books = Book::where([
            ['accept', '=', '1'],
            ['status', '=', 'unborrow'],

        ])->orderBy('id', 'desc')->get();


        return view('home', compact('books'));

        //    return view("books.show",compact('data'));
    }
    public function showbook($id)
    {

        $data = Book::findOrFail($id);


        return view("books.showbook")->with(["data" => $data]);
    }




    public function borrow($id)
    {
        $data = Book::find($id);
        $data->update(['status' => 'pendding']);
        session()->flash('Msg', 'Successfully Updated !!');
        return redirect('/home');
    }
    /*************** rating */
    public function rating(Request $request, $rate)
    {
        // dd($rate);
        $ratestars = explode(',', $rate);
        // dd($ratestars);
        $user_id = Auth::id();
        if(count($ratestars) == 2){
            $ratee = Rate::where('user_id', $user_id)->where('book_id' , $ratestars[1])->first();
            if(empty($ratee)){
                Rate::create([
                    'user_id' => $user_id,
                    'star' => $ratestars[0],
                    'book_id' => $ratestars[1],
                ]);
            }else{
                Rate::where('user_id', $user_id)->where('book_id' , $ratestars[1])->update(
                    [
                        'user_id' => $user_id,
                        'star' => $ratestars[0],
                        'book_id' => $ratestars[1],
                    ]
                );
            }   
        }
        return response()->json([
            "success" => true,
            "rate" => $ratestars[1],
        ]);
    }
    function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('books')
                ->where('book_name', 'LIKE', "%{$query}%")

                ->get();
            $output = '<ul class="d-block" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= "<li><a href='/books/showbook/{$row->id}' > " . $row->book_name . "</a></li>";
            }
            $output .= '</ul>';



            $datax = DB::table('author')
                ->where('author_name', 'LIKE', "%{$query}%")
                ->get();
            $outputt = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($datax as $rowx) {
                $outputt .= "<li><a href='/books/authorbook/{$rowx->id}' > " . $rowx->author_name . "</a></li>";
            }
            $outputt .= '</ul>';
            $res = $output . $outputt;
            echo $res;
        } else {
            echo "No Results";
        }
    }
    public function authorbook($id)
    {

        $data = Book::where('author_id', '=', $id)->get();

        return view("books.authorbook")->with("data", $data);
    }
}
