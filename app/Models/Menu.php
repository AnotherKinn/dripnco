<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'gambar',
        'deskripsi',
        'is_active',
        'stok',
        'category',
    ];
}
