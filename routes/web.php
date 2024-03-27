<?php

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Supplier;
use App\Charts\KonsumenChart;
use App\Charts\PenjualanChart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('auliamotors/admin', [AuthController::class, 'index'])->name('login');
Route::get('admin/login', [AuthController::class, 'index'])->name('login');
Route::post('admin/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::post('admin/logout', [AuthController::class, 'logout']);
    Route::get('admin/dashboard', function (PenjualanChart $chart, KonsumenChart $konsumen) {
        $barang = Barang::all();
        $supplier = Supplier::all();
        $customers = Customer::all();
        $chart =  $chart->build();
        $konsumen = $konsumen->build();
        return view('admin/dashboard', compact('chart','konsumen', 'barang', 'supplier', 'customers'));

    });

    // Route Barang
    Route::get('admin/barang', [BarangController::class, 'index'])->middleware('auth');
    Route::post('admin/barang/store', [BarangController::class, 'store'])->name('barang.store');
    Route::delete('admin/barang/{barang:kd_barang}', [BarangController::class, 'destroy']);
    Route::put('admin/barang/edit/{kd_barang}', [BarangController::class, 'update']);

    // Route Supplier
    Route::get('admin/supplier', [SupplierController::class, 'index']);
    Route::post('admin/supplier/store', [SupplierController::class, 'store'])->name('supplier.store');
    Route::delete('admin/supplier/{supplier:kd_supplier}', [SupplierController::class, 'destroy']);
    Route::put('admin/supplier/edit/{kd_supplier}', [SupplierController::class, 'update']);

    // Pembelian
    Route::get('admin/pembelian', [OrderController::class, 'index']);
    Route::post('admin/pembelian/store', [OrderController::class, 'order']);

    // Penjualan
    Route::get('admin/penjualan', [SaleController::class, 'index']);
    Route::post('admin/penjualan/transaksi', [SaleController::class, 'transaksiJual']);


    // Customer
    Route::get('admin/customer', [CustomerController::class, 'adminCustomer']);

    // Galeri
    Route::get('admin/galeri', [GaleriController::class, 'index']);
    Route::get('admin/galeri/{id}', [GaleriController::class, 'show']);
    Route::post('admin/galeri/store', [GaleriController::class, 'store']);
});



Route::get('/', [HomeController::class, 'index']);
Route::get('auliamotors', [HomeController::class, 'index']);
Route::get('auliamotors/services', [HomeController::class, 'services']);
Route::get('auliamotors/services/motor', [HomeController::class, 'servicesMotor']);
Route::get('auliamotors/services/steam', [HomeController::class, 'servicesSteam']);
Route::get('auliamotors/services/modifikasi', [HomeController::class, 'servicesModifikasi']);

// pelanggan
Route::get('auliamotors/customers', function () {
    return view('customers');
});

// penilaian 
Route::get('auliamotors/customers/penilaian', function(){
    return view('grade');
});

Route::post('auliamotors/customers/penilaian/store', [CustomerController::class, 'store'])->name('penilaian');

// contact
Route::get('auliamotors/contacts', function () {
    return view('contact');
});

// galeri
Route::get('auliamotors/galeri', [HomeController::class, 'galeri']);


