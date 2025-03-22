<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Middleware\isAdmin;

Route::get('/',[CategoryController::class, 'index']);
Route::get('Categories/{Book:slug}',[CategoryController::class, 'Book']);

Route::get('/Book',[BookController::class, 'Books']);
Route::get('detail/{detail:slug}',[BookController::class,'detail']);
Route::get('/author/{author:username}',[BookController::class,'author']);



Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);



Route::get('/dashboard',function(){
    return view('dashboard.index',[
        "title" => "Dashboard"
    ]); 
})->middleware('auth');

Route::get('/dashboard/book/cekSlug', [DashboardBookController::class, 'cekSlug'])->middleware('auth');  //Slug Otomatis
Route::resource('/dashboard/book',DashboardBookController::class)->middleware('auth');

Route::resource('/dashboard/category', AdminCategoryController::class)->except('show')->middleware(isAdmin::class);

