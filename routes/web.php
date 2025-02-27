<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/',[CategoryController::class, 'index']);
Route::get('Categories/{Book:slug}',[CategoryController::class, 'Book']);
Route::get('/Book',[BookController::class, 'index']);
Route::get('detail/{detail:slug}',[BookController::class,'detail']);
Route::get('/author/{author:username}',[BookController::class,'author']);