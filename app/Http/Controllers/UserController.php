<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $data = produk::all();
        return view('welcome',compact('data'));
    }
}
