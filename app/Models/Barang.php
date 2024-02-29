<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_barang';
    protected $keyType = 'string';
    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'stok',
        'harga'
    ];
}
