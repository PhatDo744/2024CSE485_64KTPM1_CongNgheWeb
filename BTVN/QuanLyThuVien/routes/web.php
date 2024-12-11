<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('libaries', [LibraryController::class, "index"]);
Route::get('books', [BookController::class, "index"]);
