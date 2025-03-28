<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('Home',[
            "title" => "HOME",
            "Category" => Category::all(),
            "Book" => Book::latest()->take(5)->get()
        ]);
    }

    public function Book(Category $Book) {
        return view('halaman_book',[

            "title" => "BOOK",
            "Category" => $Book->jenis,
            "Book" => $Book->Book->load('author','Category')

        ]);
    }

    
}
