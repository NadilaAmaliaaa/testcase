<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Session;

class produkController extends Controller
{
    //cek login
    public function __construct(){
        $this->middleware([
           'cek_login'
        ]);
   } 

    public function produk()
    {
        $halaman = 'produk';
        $produk_list = Produk::all();
        return view('dataproduk.index', compact('halaman', 'produk_list'));
    }
    public function create()
    {
        $halaman = 'produk';
        $produk = Produk::all();
        return view('dataproduk.create', compact('halaman', 'produk'));
    }
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nama_produk'=>'required|unique:produk',
                'harga'=>'required',
                'deskripsi'=>'required',
                'stok'=>'required',
                'gambar'=>'required',
            ]
        );
        $gambar = $request->file('gambar');
        $nama_file = time()."_".$gambar->getClientOriginalName();
        $tujuan_upload = 'images';
        $gambar->move($tujuan_upload, $nama_file);
        Produk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,
            'stok'=>$request->stok,
            'gambar'=>$nama_file
        ]);
        return redirect('produk');
    }
    public function show($id)
    {
        $halaman = 'produk';
        $produk = Produk::findOrFail($id);
        return view('dataproduk.show', compact('halaman', 'produk'));
    }
    public function edit($id)
    {
        $halaman = 'produk';
        $produk = Produk::findOrFail($id);
        return view('dataproduk.edit', compact('halaman', 'produk'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request,
            [
                'gambar'=>'required'
            ]
        );
        $halaman = 'produk';
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->stok = $request->stok;
        $produk->gambar = $request->gambar;
        if($request->hasFile('gambar')){
        $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
        $produk->gambar = $request->file('gambar')->getClientOriginalName();
        $produk->save();
        }
        $produk->save();
        return redirect('produk');
    }
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('produk');
    }
}
