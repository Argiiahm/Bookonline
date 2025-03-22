@extends('dashboard.layout.main')

@section('content')
<div class="title-dashboard">
    <h1>Categories</h1>
    <div class="table">
        <table border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Category</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $c )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->jenis }}</td>
                    <td>
                        {{-- read --}}
                        <a href="/dashboard/category/{{ $c->slug }}">Detail</a>

                        {{-- Update --}}        
                            <a href="/dashboard/category/{{ $c->slug }}">Edit</a>
                      
                        {{-- Delete --}}
                        <form style="display: inline-block" action="/dashboard/category/{{ $c->slug }}" method="POST">
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
    <a href="/dashboard/category">Tambah Category</a>
</div>
@endsection
