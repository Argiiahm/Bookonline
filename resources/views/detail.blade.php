@extends('layout.main')

@section('main')

     <h3>{{ $Book->nama_buku }}</h3>
     <p>By. <a href="/author/{{ $Book->author->username }}">{{ $Book->author->name }}</a></p>
    
@endsection