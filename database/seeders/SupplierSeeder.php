<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        Supplier::create([
            'kd_supplier' => 'S001',
            'nama_supplier' => 'Honda Astra',
            'alamat' => 'Cikarang',
           
        ]);
        Supplier::create([
            'kd_supplier' => 'S002',
            'nama_supplier' => 'Yamaha ',
            'alamat' => 'Karawang',
           
        ]);
    }
}
