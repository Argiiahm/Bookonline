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

@endsection