<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
use App\Http\Controllers\TambahController;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/tambah', [TambahController::class, 'tambah']);