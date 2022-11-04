<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = [
        'user_id',
        'kode_produk',
        'nama_produk',
        'deskripsi_produk',
        'satuan',
        'harga',
        'status',
    ];
}
