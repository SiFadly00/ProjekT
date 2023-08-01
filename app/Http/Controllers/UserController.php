<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\produk;
use App\Models\user;
use App\Models\detailtransaksi;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $data = produk::all();
        return view('welcome',compact('data'));
    }

    public function detailtransaksi(Request $request, produk $produk)
    {
        return view('detailtransaksi',compact('produk'));
    }

    public function login()
    {
        return view('login');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function postdaftar(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required'
        ]);

        user::create([
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama,
            'role' => 'user'
        ]);
        
        return redirect()->route('login')->with('Data User Berhasil Di simpan');
    }
}
