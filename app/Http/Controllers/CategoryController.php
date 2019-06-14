<?php

namespace App\Http\Controllers;

use App\Book;
use App\Interest;
use App\User;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller

{
    public function index()
{
    $categories= Category::all();
    return view('category.interests',compact('categories'));

}
    public function show($id){
        $user = User::findOrFail($id);
        //dd(empty($user->interests->items));
        
        if (empty($user->interests->items)) {
           return view('errors.403');


                }
            else{
                foreach ($user->interests as $use) {

                    $books = [];
                    $int = $use->pivot->cat_id;
                    $cat_ids = explode(',', $int);
                    foreach ($cat_ids as $cat_id)
                    {
                        array_push($books, DB::table('books')->where('cat_id', '=', $cat_id)->get());
                    }
                    return view('books.favouirate', compact('books'));

                }
            }




    }
    public function store(Request $request){
        $request->merge([
            'cat_id' => implode(',', (array) $request->get('cat_id'))
        ]);
        $user_id=Auth::user()->id;

        $intrest = new Interest();
        $intrest->user_id = $user_id;
        $intrest->cat_id = $request->cat_id;
        $intrest->save();

        //dd($cat_id);


        return redirect('/login');

    }
}
