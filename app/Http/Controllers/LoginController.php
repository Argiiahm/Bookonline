<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index',[
            "title" => "login"
        ]);
    }
    
    public function login(Request $request) {


        $wajib = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if(Auth::attempt($wajib)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('LoginGagal','Login Gagal!');

    }

    public function logout(Request $request) {
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
