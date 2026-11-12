<?php

use App\Http\Controllers\AuthorBookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;


Route::apiResource('authors',AuthorController::class);

Route::apiResource('authors.books', AuthorBookController::class)->scoped();