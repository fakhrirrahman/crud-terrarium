<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'telp',
        'produk',
        'jumlah',
        'foto',
    ];
}
