@extends('layout.main')

@section('main')
    <div class="login">
        <div>
            <h1>Register Account</h1>
            <form action="/register" method="POST">
                @csrf
                
                {{-- Nama --}}
                <label>Nama</label> <br>
                <input type="text" name="name" value="{{ old('name') }}" class="border rounded p-2 w-full @error('name') border-red-500 @enderror"> <br>
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                
                {{-- Username --}}
                <label>Username</label> <br>
                <input type="text" name="username" value="{{ old('username') }}" class="border rounded p-2 w-full @error('username') border-red-500 @enderror"> <br>
                @error('username')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                
                {{-- Email --}}
                <label>Email</label> <br>
                <input type="email" name="email" value="{{ old('email') }}" class="border rounded p-2 w-full @error('email') border-red-500 @enderror"> <br>
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                
                {{-- Password --}}
                <label>Password</label> <br>
                <input type="password" name="password" class="border rounded p-2 w-full @error('password') border-red-500 @enderror"> <br>
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <button type="submit" class="mt-3 bg-blue-500 text-white p-2 rounded">Register</button>
            </form>
            
            <small class="reg">Sudah Login? <a href="/login">login</a></small>
        </div>
    </div>
@endsection
