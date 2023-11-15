<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/show", [PostController::class, 'show']);
Route::post("/update", [PostController::class, 'update']);
Route::get("/add", [PostController::class, 'add']);
Route::post("/insert", [PostController::class, 'insert']);
Route::get("/edit/{id}", [PostController::class, 'findone']);
Route::get("/delete/{id}", [PostController::class, 'delete']);
