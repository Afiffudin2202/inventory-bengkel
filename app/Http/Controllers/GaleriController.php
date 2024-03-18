<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $galeri = Galeri::with('kategori')->get();
        return view('admin.galeri', compact('kategori', 'galeri'));
    }

    public function show($id)
    {
        $galeri = Galeri::find($id);
        return view('admin.galeri-view', compact('galeri'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'deskripsi' => 'required',
                'kategori_id' => 'required',
                'gambar' => 'required|image|file|mimes:png,jpg,jpeg|max:3048'
            ]
        );
        if ($request->file('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('post-image');
        }

        Galeri::create($validated);

        return redirect('/galeri')->with('success', 'Galeri baru berhasil di tambah');
    }
}
