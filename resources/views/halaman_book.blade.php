@extends('layout.main')

@section('main')

    <h2 class="categoryText">Category : {{ $Category }}</h2>
    @if($Book->count())
    <div class="best-book">
            <a href="/detail/{{ $Book[0]->slug }}">
            <div class="book-1">
                @if ($Book[0]->image)
               <img src="{{ asset('storage/' . $Book[0]->image)}}" alt="">
                   @else
                   <img src="https://dummyimage.com/1200x400/000/fff&text={{ $Book[0]->Category->jenis }}" alt="Placeholder Image">
                @endif
                <h4>#Post {{ $Book[0]->Category->jenis }} By. {{ $Book[0]->author->name }}</h4>
                <div class="bawah">
                    <h3>{{ $Book[0]->nama_buku }}</h3>
                    <small>{{ $Book[0]->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </a>
        </div>
    @else
        <p>Book Tidak Ditemukan!</p>
    @endif

    <div class="Book-Category">
        @foreach ($Book as $b)
            <div class="card-Book">
                @if($b->image)
                <img src="{{ asset('storage/' . $b->image) }}" alt="">
              @else
                <img src="https://dummyimage.com/100x100/000/fff&text={{ $Book[0]->Category->jenis }}" alt="Placeholder Image">
                @endif
                <a href="/detail/{{ $b->slug }}">
                    <div class="book">
                        <h3>{{ $b->nama_buku }}</h3>
                        <p>By. {{ $b->author->name }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
