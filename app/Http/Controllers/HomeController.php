<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeri = Galeri::with('kategori')->latest()->take(6)->get();
        return view('home', compact('galeri'));
    }

    public function services()
    {
        $galeri = Galeri::with('kategori')->get();
        foreach ($galeri as $galeri) {
          
        }
        $galeri = $galeri->kategori->nama_kategori;
        return view('services', compact('galeri'));
    }
    public function servicesKategori($kategory_id = null)
    {
        if ($kategory_id == null) {
            $kategori_id = 'servis';
        }
        return view('services', compact('kategory'));
    }
}
