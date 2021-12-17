<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Helpers\Helper;

class BookApiController extends Controller
{
    public function index()
    {
        $booksWithAuthors = Book::query()->with(array('authors' => function($query){
                    $query->select('name');}))->get();
        return Helper::msg(true, $booksWithAuthors, 200);
    }
    public function store(BookRequest $request)
    {
        $book = new Book;
        $book->name = $request->input('name');
        $book->year = $request->input('year');
        $book->save();
        $author_ids = $request->input("author_ids");
        if (count($author_ids)>1) {
            foreach($author_ids as $id){
                $book->authors()->attach(["author_id"=>$id]);
            }
        }
        else $book->authors()->attach(["author_id"=>$author_ids[0]]);
        return Helper::msg(true, "Book was successfully stored", 200);
    }
  
    public function update(BookRequest $request, $id)
    {
        $book = Book::find($id);
        if($book){
            $book->update($request->all());
            return Helper::msg(true, "Book '{$book->name}' was successfully updated", 200);
        }
        else return Helper::msg(false, "Book with id:{$id} wasn't found", 404);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if($book!==null){
            $book->delete();
            $book->authors()->detach();//delete relationships
            return Helper::msg(true, "'{$book->name}' was successfully deleted", 200);
        }
        else return Helper::msg(false, "Book with id:{$id} wasn't found", 404);
    }
}