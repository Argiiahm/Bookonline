@extends('layout.main')

@section('main')

<h3 class="categoryText">{{ $title }}</h3>

@if($Book->count())
<div class="best-book">
        <a href="/detail/{{ $Book[0]->slug }}">
        <div class="book-1">
            @if($Book[0]->image)
            <img src="{{ asset('storage/' . $Book[0]->image) }}" alt="">
            @else
            <img src="https://dummyimage.com/1200x300/000/fff&text={{ $Book[0]->Category->jenis }}" alt="Placeholder Image">
            @endif
            <h4>#Rekomendasi By. {{ $Book[0]->author->name }}</h4>
            <small>in Category {{ $Book[0]->Category->jenis }}</small>
            <div class="bawah">
                <h3>{{ $Book[0]->nama_buku }}</h3>
                <small>{{ $Book[0]->created_at->diffForHumans() }}</small>
            </div>
        </div>
    </a>
    </div>

<div class="Book-Category">
    @foreach ($Book->skip(1) as $b)
    <div class="card-Book">
        @if($b->image)
              <img src="{{ asset('storage/' . $b->image) }}" alt="">
            @else
            <img src="https://dummyimage.com/100x100/000/fff&text={{ $b->Category}}" alt="Placeholder Image">
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
@else
    <p style="text-align: center; font-weight:bold">Book Tidak Ditemukan!</p>
@endif
{{ $Book->links() }}
@endsection
