@extends('layout.main')

@section('main')

<div class="Container">
<p class="j1">JELAJAHI BOOK FAVORITMU!</p>
<div class="Category">
    @foreach ($Category as $C)
    <div class="list-category">
        <span><p>BOOK | <b><a href="/Categories/{{ $C->slug }}">{{ $C->jenis }}</a></b></p></span>
    </div>
    @endforeach  
</div>
</div>
@endsection