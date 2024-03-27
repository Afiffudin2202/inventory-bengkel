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
        $deskripsi = "Aulia Motor menyediakan layanan servis motor yang komprehensif untuk memastikan kendaraan Anda tetap berjalan dengan baik.";
        return view('services', compact('galeri', 'deskripsi'));
    }

    public function servicesMotor()
    {
        $galeri = Galeri::with('kategori')->where('kategori_id', 3)->get();
        $deskripsi = "Aulia Motor menyediakan layanan servis motor yang komprehensif untuk memastikan kendaraan Anda tetap berjalan dengan baik.";
        // dd($galeri);
        return view('services', compact('galeri', 'deskripsi'));
    }
    public function servicesSteam()
    {
        $galeri = Galeri::with('kategori')->where('kategori_id', 2)->get();
        $deskripsi = "Kami menawarkan layanan steam untuk membersihkan kendaraan Anda secara menyeluruh. Dengan layanan steam kami, kendaraan Anda akan bersih dan terawat.";
        // dd($galeri);
        return view('services', compact('galeri', 'deskripsi'));
    }
    public function servicesModifikasi()
    {
        $galeri = Galeri::with('kategori')->where('kategori_id', 1)->get();
        $deskripsi = "Aulia Motor juga menyediakan layanan modifikasi motor untuk memberikan sentuhan personal pada kendaraan Anda. ";
        // dd($galeri);
        return view('services', compact('galeri', 'deskripsi'));
    }

    public function galeri(){
        $galeri = Galeri::with('kategori')->latest()->get();
        
        return view('galeri', compact('galeri'));
    }
}
