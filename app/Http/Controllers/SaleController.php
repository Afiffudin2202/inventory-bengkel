<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Barang;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        $barang = Barang::all();
        $sales = Sale::all();

        return view('admin/penjualan', compact('barang', 'sales'));
    }

    public function transaksiJual(Request $request){
        $rules = [
            'tgl_penjualan' => 'required',
            'barang_id' => 'required',
            'jumlah_jual' => 'required',
            'total_harga' => 'required'
        ];

        $validated = $request->validate($rules);
        // generate no penjualan
        $no_penjualan = 'PJ' . date('Ymd'). '-' .str_pad(Sale::max('id') + 1, 3, '0', STR_PAD_LEFT);

        // Menggabungkan 2 array
        $sale = array_merge(['no_penjualan' => $no_penjualan], $validated);

        Sale::create($sale);

        return redirect('penjualan')->with('success', 'Transaksi penjualan berhasil');
    }
}
