<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function commentStore(Request $request)
    {   

        $request->validate([
            'body'=>'required|max:2555'

        ]);
       $user_id = Auth::user()->id;
       $book_id =$request->book_id;

       $comment= Comment::create([
            'body'=>$request->body,
            'user_id'=>$user_id,
            'book_id'=>$book_id,
 
            ]);
        return redirect()->back();
    }
   
}
