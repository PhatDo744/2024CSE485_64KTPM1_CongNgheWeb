<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cinema', [CinemaController::class, 'index']);
Route::get('movie', [MovieController::class, 'index']);
