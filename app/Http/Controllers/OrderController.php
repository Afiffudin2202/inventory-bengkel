<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        $supplier = Supplier::all();
        $barang = Barang::all(); 

        return  view('admin/pembelian', compact('orders', 'supplier', 'barang'));
    }

    public function order(Request $request) {
        $rules = [
            'barang_id' => 'required',
            'supplier_id' => 'required',
            'harga_satuan' => 'required',
            'jumlah_beli' => 'required',
            'total_harga' => 'required',
            'tgl_pembelian' => 'required'
        ];

        $validated = $request->validate($rules);

        // generate nomor pembelian
        $no_pembelian = 'PB' . date('Ymd') . '-' . str_pad(Order::max('id') + 1, 3, '0' , STR_PAD_LEFT);

        // Menggabungkan 2 array
       $order = array_merge(['no_pembelian' => $no_pembelian], $validated);


       Order::create($order);

       return redirect('pembelian')->with('success', 'Berhasil input pembelian');
    }
}
