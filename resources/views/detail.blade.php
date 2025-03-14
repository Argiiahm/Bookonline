@extends('layout.main')

@section('main')

   <div class="detail-container">
     <div class="img-detail">
          <h3>{{ $Book->nama_buku }}</h3>
          @if ($Book->image)
               <img src="{{ asset('storage/' . $Book->image)}}" alt="">
               @else
               <img class=" w-[300px]" src="https://picsum.photos/1200/400" alt="">
          @endif
     </div>
     <div class="paraf">  
          <small>in Category. <a href="/Book?category={{ $Book->Category->slug }}">{{ $Book->Category->jenis }}</a></small>
          <p>By. <a href="/Book?author={{ $Book->author->username }}">{{ $Book->author->name }}</a></p>
          <p>{!! $Book->isi !!}</p>
     </div>
   </div>
@endsection