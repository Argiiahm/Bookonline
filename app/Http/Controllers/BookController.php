<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('book',[
            "title" => "BOOK",
            "Book" => Book::with('Category','author')->latest()->get()
        ]);
    }

    public function detail(Book $detail) {
        return view('detail',[
            "title" => "BOOK",
            "Book" => $detail->load('Category','author')
        ]);
    }

    public function author(User $author) {
        return view('book',[
            "title" => "Penulis",
            "Book" => $author->Books->load('Category','author')
        ]);
    }
}
