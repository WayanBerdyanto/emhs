<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'kodeProduk',
        'namaProduk',
        'photo',
        'deskripsi',
        'harga',
        'jumlahProduk'
    ];
}
