@extends('dashboard.layout.main')

@section('content')
<div class="title-dashboard">
    <h1>My Post</h1>
    <div class="table">
        <table border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Judul Book</th>
                    <th>Category</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Books as $book )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->nama_buku }}</td>
                    <td>{{ $book->category->jenis }}</td>
                    <td>
                        {{-- read --}}
                        <a href="/dashboard/book/{{ $book->slug }}">Detail</a>

                        {{-- Update --}}        
                            <a href="/dashboard/book/{{ $book->slug }}/edit">Edit</a>
                      
                        {{-- Delete --}}
                        <form style="display: inline-block" action="/dashboard/book/{{ $book->slug }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit"  onclick="return confirm('Anda Yakin?')">Hapus</button>            
                        </form>
                    </td>      
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- create --}}
    <a href="/dashboard/book/create">Tambah Postingan</a>
</div>
@endsection
