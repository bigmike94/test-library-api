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

        if(!$author&&!$book)
        {
            return Helper::msg(false, "No author, nor book was found", 404);
        }
        else {
            switch (true) {
                case !$author&&$book:
                    $result = Book::where('name', 'like', '%'.$book.'%')->with(array('authors' => function($query){
                    $query->select('name');}))->get();
                    return Helper::msg(true, $result, 200);

                case $author&&!$book:
                    $result = $author->books()->with(array('authors' => function($query){
                    $query->select('name');}))->get();
                    return Helper::msg(true, $result, 200);

                default:
                    $result = $author->books()->where('name', 'like', '%'.$book.'%')->with(array('authors' => function($query){
                    $query->select('name');}))->get();
                    return Helper::msg(true, $result, 200);
                break;
            }
        }
    }
}