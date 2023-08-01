<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\produk;
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
}
