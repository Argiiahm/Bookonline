@extends('dashboard.layout.main')

@section('content')
<div class="title-dashboard-2">
    <h1>My Post</h1>
    @if(session()->has('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    @if(session()->has('gagal'))
        <p style="color: red">{{ session('gagal') }}</p>
    @endif
    <form action="/dashboard/book" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label>Judul Buku</label>
        <input type="text" id="nama_buku" name="nama_buku" value="{{ old('nama_buku') }}">
        @error('nama_buku')

        <p style="color: red">Silahkan Isi</p>
          
        @enderror
      
        <label>slug</label>
        <input type="text" id="slug" name="slug" value="{{ old('slug') }}">
        @error('slug')

          <p style="color: red">Silahkan Isi Slug!</p>
            
        @enderror
         
        <label for="image">Upload Thumbnail Produk</label>
        <input type="file" id="image" name="image">

        <label>Pilih Jenis Category</label>
        <select name="category_id">
            @foreach ($categories as $category)
            @if(old('category_id') == $category->id)            
            <option value="{{ $category->id }}" selected>{{ $category->jenis }}</option>          
            @else
            <option value="{{ $category->id }}">{{ $category->jenis }}</option>    
            @endif      
            @endforeach
        </select> <br> <br>
         <label>Postingan Here</label>
         @error('isi')
         <p style="color: red">Silahkan Isi!</p>   
       @enderror
        <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
        <trix-editor input="isi"></trix-editor>

         <button type="submit">Posting</button>
    </form>
</div>
<script>

    //slug otomatis dengan fecth API

    const nama_buku = document.querySelector('#nama_buku');
    const slug = document.querySelector('#slug');

    nama_buku.addEventListener('change', function() {
        fetch('/dashboard/book/cekSlug?nama_buku=' + nama_buku.value) 
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    //end slug otomatis dengan fetch API

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection