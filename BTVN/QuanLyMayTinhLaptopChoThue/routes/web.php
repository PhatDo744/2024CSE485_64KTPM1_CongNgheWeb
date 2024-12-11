<?php

use App\Http\Controllers\LaptopController;
use App\Http\Controllers\RenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('renters',  [RenterController::class, "index"]);
Route::get('latops',  [LaptopController::class, "index"]);
