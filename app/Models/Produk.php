<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    // protected $guarded = [
    //     '_token',
    //     'submit'
    // ];
    protected $fillable = [
        'gambar_produk',
        'nama_produk',
        'kategori_produk',
        'jumlah_produk',
        'harga_produk'
    ];
}
