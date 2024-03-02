<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('barang', compact('barang'));
    }

    public function store(Request $request)
    {
        $rules = [
            'kd_barang' => 'required|unique:barangs,kd_barang',
            'nama_barang' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric'
        ];

        $validated = $request->validate($rules);

        Barang::create($validated);

        return redirect('/barang')->with('success', 'Data baru berhasil ditambahkan');
    }

    public function update(Request $request, $kd_barang)
    {
        $barang = Barang::where('kd_barang', $kd_barang);
        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);
        $barang->update($validated);

        return redirect('/barang')->with('success', 'Berhasil edit barang');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect('barang')->with('success', 'Data barang telah dihapus');
    }
}
