@extends('layout.main')

@section('main')

<div class="Container">
<p class="">JELAJAHI BOOK FAVORITMU!</p>
<div class="Category">
    @foreach ($Category as $C)
    <div class="list-category">
        <span><p><b><a href="/Book?category={{ $C->slug }}">{{ $C->jenis }}</a></b></p></span>
    </div>
    @endforeach  
</div>
</div>
<section style="margin: 30px;">
    <div>
        <h3>Apa Yang Terbaru?</h3>
    </div>
    <div style=" width: 400px;">
        @foreach ($Book as $b)          
        <div style="display: flex; border:1px solid black; margin-top:20px; border-radius:10px; align-items:center; gap:4rem; padding:10px;">
            <div >
                <img style="border-radius: 10px;" width="130" src="{{ asset('storage/' . $b->image) }}" alt="gambar">
            </div>
            <div>
                <p>{{ $b->nama_buku }}</p>
                <h3>Create By. <a style="color: blue; font-weight:bold;" href="/Book?author={{ $b->author->username }}">{{ $b->author->username }}</a></h3>
                <small></small>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection