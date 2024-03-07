@extends('admin.layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Pembelian</h3>
        </div>
        <hr>
        <div class="content my-3 ">
            <div class="card p-5">
                {{-- Form --}}
                <form action="{{ url('pembelian/store') }}" method="post">
                    @csrf
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="tgl_pembelian" class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control @error('tgl_pembelian')
                                    is-invalid
                                @enderror" name="tgl_pembelian" id="tgl_pembelian" value="{{ old('tgl_pembelian') }}">
                                @error('tgl_pembelian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="supplier_id" class="form-label">Kode Supplier</label>
                                <select name="supplier_id" id="supplier_id" class="form-select @error('supplier_id')
                                    is-invalid
                                @enderror" onchange="inputForm(this)">
                                    <option value="">Pilih kode Supplier</option>
                                    @foreach ($supplier as $supplier)
                                        <option value="{{ $supplier->kd_supplier }}"
                                            data-supplier="{{ $supplier->nama_supplier }}">{{ $supplier->kd_supplier }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="barang_id" class="form-label">Kode Barang</label>
                                <select name="barang_id" id="barang_id" class="form-select @error('barang_id')
                                    is-invalid
                                @enderror" onchange="inputForm(this)">
                                    <option value="">Pilih kode Barang</option>
                                    @foreach ($barang as $barang)
                                        <option value="{{ $barang->kd_barang }}" data-barang="{{ $barang->nama_barang }}">
                                            {{ $barang->kd_barang }}</option>
                                    @endforeach
                                </select>
                                @error('barang_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                <input type="number" class="form-control @error('harga_satuan')
                                    is-invalid
                                @enderror" id="harga_satuan" name="harga_satuan">
                            </div>
                            @error('harga_satuan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="jumlah_beli" class="form-label ">Jumlah Beli</label>
                                <input type="number" class="form-control @error('jumlah_beli')
                                    is-invalid
                                @enderror" id="jumlah_beli" name="jumlah_beli">
                            </div>
                            @error('jumlah_beli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row gap-5 justify-content-between px-5">
                        <div class="col-lg-4 ">
                            <div class="mb-3">
                                <label for="total_harga" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga" value="" readonly>
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
            <div class="card p-5 mt-5">
                {{-- Tabel --}}
                <h3>Riwayat Pembelian</h3>
                <hr>
                <div class="card p-3">
                    <table id="example" class="table display  table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No Pembelian</th>
                                <th>Tanggal Pembelian</th>
                                <th>Nama Supplier</th>
                                <th>Nama barang</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah Beli</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders  as $order)
                                <tr>
                                    <td>{{ $order->no_pembelian }}</td>
                                    <td>{{ $order->tgl_pembelian }}</td>
                                    <td>{{ $order->supplier->nama_supplier }}</td>
                                    <td>{{ $order->barang->nama_barang }}</td>
                                    <td>{{ $order->harga_satuan }}</td>
                                    <td>{{ $order->jumlah_beli }}</td>
                                    <td>{{ $order->total_harga }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Tabel End --}}
            </div>
        </div>
    </div>

    {{-- js untuk isi form nama barang dan supplier --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function inputForm(select) {
            var supplierKode = $('#supplier_id').find('option:selected');
            var supplierNama = $('input[name="nama_supplier"]');
            var barangKode = $('#barang_id').find('option:selected');
            var barangNama = $('input[name="nama_barang"]');

            supplierNama.val(supplierKode.data('supplier'));
            barangNama.val(barangKode.data('barang'));
            console.log(supplierNama);
        }

        $('#harga_satuan, #jumlah_beli').on('input', function() {
            totalHarga();
        });

        function totalHarga() {
            // untuk total harga
            var hargaSatuan = $('#harga_satuan').val();
            var jumlahBeli = $('#jumlah_beli').val();
            console.log(hargaSatuan);
            var totalHarga = hargaSatuan * jumlahBeli;

            $('#total_harga').val(totalHarga);
        }
    </script>
@endsection
