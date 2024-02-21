@extends('layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Penjualan</h3>
        </div>
        <hr>
        <div class="content-card my-3 ">
            <div class="card p-5">
                <form action="" method="post">
                    @csrf
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="no_penjualan" class="form-label">No Penjualan</label>
                                <input type="text" class="form-control" name="no_penjualan" id="no_penjualan">
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="tgl_penjualan" class="form-label">Tanggal Penjualan</label>
                                <input type="date" class="form-control" name="tgl_penjualan" id="tgl_penjualan">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="kd_supplier" class="form-label">Kode Supplier</label>
                                <select name="kd_supplier" id="kd_supplier" class="form-select">
                                    <option value="#">Pilih kode Supplier</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                <input type="text" class="form-control" id="nama_supplier" readonly disabled>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <select name="nama_barang" id="nama_barang" class="form-select">
                                    <option value="#">Pilih nama barang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok Barang</label>
                                <input type="text" class="form-control" id="stok" readonly disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="harga_beli" class="form-label">Harga </label>
                                <input type="number" class="form-control" id="harga_beli" readonly disabled>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="jumlah_masuk" class="form-label">Jumlah Beli</label>
                                <input type="number" class="form-control" id="jumlah_masuk">
                            </div>
                        </div>

                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="total_harga" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="total_harga" readonly disabled>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-end">
                            <div class="mb-3 ">
                                <button type="submit" class="btn btn-aulia">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
