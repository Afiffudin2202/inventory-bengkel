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
        $galeri = Galeri::with('kategori')->where('kategori_id', 3)->get();
       
        return view('services', compact('galeri'));
    }

    public function servicesMotor()
    {
        $galeri = Galeri::with('kategori')->where('kategori_id', 3)->get();
        // dd($galeri);
        return view('services', compact('galeri'));
    }
    public function servicesSteam()
    {
        $galeri = Galeri::with('kategori')->where('kategori_id', 2)->get();
        // dd($galeri);
        return view('services', compact('galeri'));
    }
}
