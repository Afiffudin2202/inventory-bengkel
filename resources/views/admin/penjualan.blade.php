@extends('admin.layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Penjualan</h3>
        </div>
        <hr>
        <div class="content my-3 ">
            <div class="card p-5">
                <form action="{{ url('penjualan/transaksi') }}" method="post">
                    @csrf
                    <div class="row gap-5 justify-content-between px-5">
                        {{-- <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="no_penjualan" class="form-label">No Penjualan</label>
                                <input type="text" class="form-control" name="no_penjualan" id="no_penjualan">
                            </div>
                        </div> --}}
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="tgl_penjualan" class="form-label">Tanggal Penjualan</label>
                                <input type="date" class="form-control" name="tgl_penjualan" id="tgl_penjualan">
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="barang_id" class="form-label">Nama Barang</label>
                                <select name="barang_id" id="barang_id" class="form-select" onchange="inputBarang(this)">
                                    <option value="#">Pilih nama barang</option>
                                    @foreach ($barang as $barang)
                                        <option value="{{ $barang->kd_barang }}" data-harga="{{ $barang->harga }}"
                                            data-stok="{{ $barang->stok }}">{{ $barang->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok Barang</label>
                                <input type="text" class="form-control" id="stok" name="stok" readonly disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga </label>
                                <input type="number" class="form-control" id="harga" name="harga" readonly disabled>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="jumlah_jual" class="form-label">Jumlah Jual</label>
                                <input type="number" class="form-control" id="jumlah_jual" name="jumlah_jual">
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="total_harga" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga" readonly>
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
            <div class="card p-5 mt-3">
                <div class="card p-5 mt-5">
                    {{-- Tabel --}}
                    <h3>Riwayat Penjualan</h3>
                    <hr>
                    <div class="card p-3">
                        <table id="example" class="table display  table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No Penjualan</th>
                                    <th>Tanggal Penjualan</th>
                                    <th>Nama barang</th>
                                    <th>Harga </th>
                                    <th>Jumlah Jual</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sales as $sale)
                                    <tr>
                                        <td>{{ $sale->no_penjualan }}</td>
                                        <td>{{ $sale->tgl_penjualan }}</td>
                                        <td>{{ $sale->barang->nama_barang }}</td>
                                        <td>{{ $sale->barang->harga }}</td>
                                        <td>{{ $sale->jumlah_jual }}</td>
                                        <td>{{ $sale->total_harga }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Tabel End --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function inputBarang(select) {
            var barangId = $('#barang_id').find('option:selected');
            var stok = $('input[name="stok"]');
            var harga = $('input[name="harga"]');

            stok.val(barangId.data('stok'))
            harga.val(barangId.data('harga'))

        }

        $('#harga, #jumlah_jual').on('input', function() {
            totalHarga();
        });

        function totalHarga() {
            // untuk total harga
            var harga = $('#harga').val();
            var jumlahJual = $('#jumlah_jual').val();
            var totalHarga = harga * jumlahJual;
            console.log(jumlahJual);

            $('#total_harga').val(totalHarga);
        }
    </script>
@endsection
