<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Author;
use App\Models\Book;

class AuthorBookController extends Controller
{
    public function index(Author $author){
        $data = $author->books()->get();
        return response()->json([
            'data' => BookResource::collection($data),
        ]);
    }
    public function store(StoreBookRequest $request, Author $author){
        $authorBook = $author->books()->create($request->validated());
        return response()->json([
            'data' => BookResource::make($authorBook),
        ],201);
    }
    public function update(UpdateBookRequest $request,Author $author ,Book $book){
        $book->update($request->validated());
        return response()->json([
            'data' => BookResource::make($book),
        ]);
    }
    public function show(Author $author, Book $book){
        return response()->json([
            'data' => BookResource::make($book),
        ]);
    }
    public function destroy(Author $author , Book $book){
        $book->delete();
        return response()->noContent();
    }
}
