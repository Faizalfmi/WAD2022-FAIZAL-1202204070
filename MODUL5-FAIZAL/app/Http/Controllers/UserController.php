<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirm' => 'required|same:password',
        ]);

        Users::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home')->with('success', 'Login Berhasil!');
        }

        return back()->withErrors([
            'wrong' => 'Email atau password salah!',
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required|same:password',
        ]);
        if (Hash::check($request->password, Auth::user()->password)) {
            Users::where('id', Auth::user()->id)->update([
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
                'name' => $request->nama,
            ]);

            return redirect('/profile')->with('success', 'Data berhasil diubah');
        } else {
            return back()->withErrors([
                'wrong' => 'Password anda salah',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
