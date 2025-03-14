<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{


    public function Books() {
       
        // $Book = Book::latest();

        // if(request('search')) {
        //     $Book->where('nama_buku','like', '%'. request('search') . '%' );
        //         //  ->orWhere('isi','like','%' . request('search') . '%');
        // }

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->jenis;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('book',[
            "title" => "BOOKONLINE" . $title,
            "Book" => Book::latest()->Search(request(['search','category', 'author']))->paginate(16)->WithQueryString()
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

