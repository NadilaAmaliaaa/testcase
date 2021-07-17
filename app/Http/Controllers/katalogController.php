<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Session;

class katalogController extends Controller
{
    public function katalog()
        {
            $halaman = 'katalog';
            $produk_list = Produk::all();
            return view('dashboard.index', compact('halaman', 'produk_list'));
        }

}