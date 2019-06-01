<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoController extends Controller
{
    function index()
    {    $categories= Category::all();
        return view('books.create',compact('categories'));
    }
    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('author')
                ->where('author_name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data->books as $row)
            {
                $output .= '
       <li><a href="#">'.$row->author_id.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }


    }

}
