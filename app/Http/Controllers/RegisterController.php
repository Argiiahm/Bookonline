<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index',[
            "title" => "Register"
        ]);
    }
 
    public function store(Request $request) {

       $validasiData = $request->validate([     
            "name" => "required|max:255",
            "username" => "required|unique:users|min:5|max:255",
            "email" => "required|email:dns",
            "password" => "required|min:5|max:255"
        ]);

        $validasiData['password'] = bcrypt($validasiData['password']);
        User::create($validasiData);    
        // session()->flash('success','Registrasi Berhasil!, Silahkan Login');
        return redirect('/login')->with('success','Registrasi Berhasil!, Silahkan Login');
        


    }

}
