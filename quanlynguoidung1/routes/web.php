<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User1Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [User1Controller::class, 'index'])->name('user1s.index');
Route::get('/user1s/create', [User1Controller::class, 'create'])->name('user1s.create');
Route::post('/user1s', [User1Controller::class, 'store'])->name('user1s.store');
Route::get('user1s/{user1}', [User1Controller::class, 'show'])->name('user1s.show');
Route::get('/user1s/{user1}/edit', [User1Controller::class, 'edit'])->name('user1s.edit');
Route::put('/user1s/{user1}', [User1Controller::class, 'update'])->name('user1s.update');
Route::delete('/user1s/{user1}', [User1Controller::class, 'destroy'])->name('user1s.destroy');
