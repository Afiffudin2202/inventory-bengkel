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
}
