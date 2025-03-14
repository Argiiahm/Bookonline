@extends('layout.main')

@section('main')
    
      
    <div class="login">
        <div>
           
            <h1>Login Account</h1>
            <form action="/login" method="POST">
                @csrf
                <label>Username</label> <br>
                <input type="text" name="username" value="{{ @old('username') }}"> <br>
                @error('username')
                    <p style="color: red">{{ $messege }}</p>
                @enderror
                <label>Password</label> <br>
                <input type="password" name="password"> <br>
                <button type="submit">Login</button>
            </form>
            <small class="reg">Belum Register? <a href="/register">Register Now!</a></small>
            <div class="pesan">
                @if (session()->has('success'))
                    <p style="color: green">
                        {{ session('success') }}
                    </p>
                @endif
                @if (session()->has('LoginGagal'))
                    <p style="color: red">
                        {{ session('LoginGagal') }}
                    </p>
                @endif
            </div>
        </div>
    </div>







@endsection