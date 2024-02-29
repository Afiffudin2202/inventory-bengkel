<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'kd_barang' => 'kd001',
            'nama_barang' => 'Oli SPX Honda',
            'stok' => 30,
            'harga' => 60000
        ]);
        Barang::create([
            'kd_barang' => 'kd002',
            'nama_barang' => 'Oli Yamalube',
            'stok' => 31,
            'harga' => 50000
        ]);
        Barang::create([
            'kd_barang' => 'kd003',
            'nama_barang' => 'Oli Yamalube Matic',
            'stok' => 10,
            'harga' => 65000
        ]);
    }
}
