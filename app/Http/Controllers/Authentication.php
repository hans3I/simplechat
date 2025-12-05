<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    public function show_register(){
        return view('auth.register');
    }

    public function register(Request $request){
        $data = $request->validate([
            'username'=>'required|string|max:255|unique:users,username',
            'password'=>'required|string|min:3',
        ]);

        $user = User::create([
            'username'=>$data['username'],
            'password'=>Hash::make($data['password'])
        ]);

        Auth::login($user);

        return redirect()->route('welcome');
    }

    public function show_login(){
        return view('auth.login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'username'=>'required|string',
            'password'=>'required|string'
        ]);

        if (!Auth::attempt($data)){
            return back()->withErrors([
                'username'=>'Username atau password salah.',
            ]);
        } else {
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
