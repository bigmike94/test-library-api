<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Helpers\Helper;

class AuthorApiController extends Controller
{
    public function index()
    {
        return Helper::msg(true, Author::all(), 200);
    }
    public function search(Request $request)
    {
        $author = Author::find($request->input("author_id"));
        $book = $request->input("book_name");

        if($author===null)
        {
            return Helper::msg(false, "Author not found", 404);
        }
        if(!$author&&$book)
        {
            $result = Book::where('name', 'like', '%'.$book.'%')->with(array('authors' => function($query){
                    $query->select('name');}))->get();

            return Helper::msg(true, $result, 200);
        }
        else if($author&&!$book)
        {
            $result = $author->books()->with(array('authors' => function($query){
                    $query->select('name');}))->get();
            return Helper::msg(true, $result, 200);
        }
        else 
        {
            $result = $author->books()->where('name', 'like', '%'.$request->input("book_name").'%')->get();
            return Helper::msg(true, $result, 200);
        }
    }
}