<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return response()->json([
            'data'=> BookResource::collection($books),
        ],200);
    }
    public function store(StoreBookRequest $request){
        $book = $request->validated();  
        $book['publisheddate'] = $book['publishedDate'];
        $books = Book::create($book);
        return response()->json([
            'message' => 'Book created successfully',
            'data' => BookResource::make($books)
        ],201);
    }
    public function show(Book $book){
        return response()->json([
            'data'=> BookResource::make($book)
        ],200);
    }
    public function update(UpdateBookRequest $request , Book $book){
        $data = $request->validated();
        if(isset($data['publishedDate'])){
            $data['publisheddate'] = $data['publishedDate'];
        }
        $book->update($data);
                return response()->json([
            'message' => 'Book Updated successfully',
            'data' => BookResource::make($book)
        ],200);
    }
    public function destroy(Book $book){
        $book->delete();
        return response()->json([
            'message' => 'Book Deleted successfully',
        ],204);
    }
}