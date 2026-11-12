<?php

namespace App\Http\Controllers;

use App\Http\Requests\Author\StoreAuthorRequest;
use App\Http\Requests\Author\UpdateAuthorRequest;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return response()->json([
            'data' => AuthorResource::collection($authors),
        ],200);
    }
    public function store(StoreAuthorRequest $request){
        $author = Author::create($request->validated());
        return response()->json([
            'data' => AuthorResource::make($author), 
        ],201);
    }
    public function show(Author $author){
        return response()->json([
            'data' => AuthorResource::make($author),
        ],200);
    }
    public function update(UpdateAuthorRequest $request , Author $author){
        $author->update($request->validated());
        return response()->json([
            'data' => AuthorResource::make($author),
        ]);
    }
    public function destroy(Author $author){
        $author->delete();
        return response()->noContent();
    }
}
