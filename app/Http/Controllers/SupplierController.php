<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();

        return view('admin/supplier', compact('supplier'));
    }

    public function store(Request $request)
    {
        $rules = [
            'kd_supplier' => 'required|unique:suppliers,kd_supplier',
            'nama_supplier' => 'required',
            'no_hp' => 'numeric',
            'alamat' => 'required'
        ];

        $validated = $request->validate($rules);

        Supplier::create($validated);

        return redirect('supplier')->with('success', 'Berhasil menambah Supplier');
    }

    public function update(Request $request, $kd_supplier)
    {
        $supplier = Supplier::where('kd_supplier', $kd_supplier);

        $rules = [
            'kd_supplier' => 'required',
            'nama_supplier' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required'
        ];

        $validated = $request->validate($rules);

        $supplier->update($validated);

        return redirect('/supplier')->with('success', 'Berhasil mengedit supplier');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect('/supplier')->with('success', 'Supplier berhasil dihapus');
    }
}
