<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route::get('/barang', function () {
//     return view('barang');
// });

// Route Barang
Route::get('/barang', [BarangController::class, 'index'])->middleware('auth');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::delete('/barang/{barang:kd_barang}', [BarangController::class, 'destroy']);
Route::put('/barang/edit/{kd_barang}', [BarangController::class, 'update']);

Route::get('/pembelian', function () {
    return view('pembelian');
});
Route::get('/penjualan', function () {
    return view('penjualan');
});

// Route Supplier
Route::get('/supplier', [SupplierController::class, 'index']);
Route::post('/supplier/store', [SupplierController::class, 'store'])->name('supplier.store');
Route::delete('/supplier/{supplier:kd_supplier}', [SupplierController::class, 'destroy']);
Route::put('/supplier/edit/{kd_supplier}', [SupplierController::class, 'update']);