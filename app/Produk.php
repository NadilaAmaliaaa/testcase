<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "Produk";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
        'stok',
        'gambar'
    ];
}