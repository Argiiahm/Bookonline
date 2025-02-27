@extends('layout.main')

@section('main')

    <h2 class="categoryText">Category : {{ $Category }}</h2>
    <div class="Book-Category">
        @foreach ($Book as $b)
            <div class="card-Book">
                <a href="/detail/{{ $b->slug }}">
                    <div class="book">
                        <h3>{{ $b->nama_buku }}</h3>
                        <p>By. {{ $b->author->name }}</p>
                        <h5>Jumlah Halaman {{ $b->jumlah_halaman }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
