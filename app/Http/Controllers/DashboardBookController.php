<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;



class DashboardBookController extends Controller
{
    /**
     * C R U D
     */
    public function index()   //READ
    {
        return view('dashboard.book.index',[
           "Books" => Book::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.book.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)  //CREATE
    {

        // return $request->file('image')->store('book-images', 'public');

        $validasiData = $request->validate([
            "nama_buku" => "required|max:255",
            "slug" => "required",
            "image" => "image|file|max:1024",
            "category_id" => "required",
            "isi" => "required"
        ]);

        if($request->file('image')) {
            $validasiData['image'] = $request->file('image')->store('book-images', 'public');
        }

        //menambah data baru
        $validasiData['user_id'] = Auth::user()->id;
        Book::create($validasiData)->with('success', 'Book Baru Berhasil Di Tambah!');  //menambahkan data dan menampilkan pesan

        return redirect('/dashboard/book');
        return back('/dashboard/book')->with('gagal', 'Book Gagal Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book) //READ
    {
        return view('dashboard.book.show',[
            "Book" => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('dashboard.book.edit',[
            "Book" => $book,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            "nama_buku" => "required|max:255",
            "category_id" => "required",
            "isi" => "required"
        ];

        if($request['slug'] != $book->slug) {
            $rules['slug'] = "required";
        }

        $validasiData = $request->validate($rules);
        $validasiData['user_id'] = Auth::user()->id;
        Book::where('id', $book->id)->update($validasiData); //menambahkan data dan menampilkan pesan

        return redirect('/dashboard/book')->with('success', 'Book Baru Berhasil Di Update!'); 
        return back('/dashboard/book')->with('gagal', 'Book Gagal Di Update!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book) //DELETE
    {
        Book::destroy($book->id);

        return redirect('/dashboard/book')->with('success', 'Book Baru Berhasil Di Hapus!'); 
        return back('/dashboard/book')->with('gagal', 'Book Gagal Di Hapus!');
    }




    public function cekSlug(Request $request) { //Slug Otomatis
        $slug = SlugService::createSlug(Book::class, 'slug', $request->nama_buku);
        return response()->json(['slug' => $slug]);
    }
}
