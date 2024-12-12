<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;;
Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [studentController::class, 'index']);
