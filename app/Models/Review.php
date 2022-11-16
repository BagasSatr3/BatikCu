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
        'produk_id',
        'title',
        'deskripsi_review',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function produk () {
        return $this->belongsTo('App\Models\Produk', 'produk_id');
    }
}
