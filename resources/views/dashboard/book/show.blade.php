@extends('dashboard.layout.main')

@section('content')

   <div class="detail-container">
    <h1>{{ $Book->nama_buku }}</h1>
    <a href="/dashboard/book">Kembali Ke All Post</a> |
    <a href="">Edit</a> |
    <a href="">Hapus</a>

     <div class="img-detail">
          @if ($Book->image)
          <img src="{{ asset('storage/' . $Book->image)}}" alt="">
          @else 
          <img class=" w-[300px]" src="https://picsum.photos/1200/400" alt="">
          @endif
     </div>
     <div class="paraf">  
          {{-- <small>in Category. <a href="/Book?category={{ $Book->Category->slug }}">{{ $Book->Category->jenis }}</a></small> --}}
          {{-- <p>By. <a href="/Book?author={{ $Book->author->username }}">{{ $Book->author->name }}</a></p> --}}
          <p>{!! $Book->isi !!}</p>
     </div>
   </div>
@endsection