@extends('admin.layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Data Barang</h3>
        </div>
        <hr>
        <div class="content-barang my-3">
            {{-- button tambah --}}
            <div class="btn-tambah d-flex justify-content-end mb-3">
                <button class="btn btn-aulia" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus"></i>
                    Tambah Data</button>
            </div>

            <!-- Modal Tambah Data-->
            <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('barang.store') }}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah barang baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12 col-md-12 p-3">
                                    <div class="mb-3">
                                        <label for="kd_barang" class="form-label">Kode Barang</label>
                                        <input type="text"
                                            class="form-control @error('kd_barang')
                                            is-invalid
                                        @enderror"
                                            id="kd_barang" name="kd_barang" value="{{ old('kd_barang') }}">
                                        @error('kd_barang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_barang" class="form-label">Nama Barang</label>
                                        <input type="text"
                                            class="form-control @error('nama_barang')
                                            is-invalid
                                        @enderror"
                                            id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}">
                                        @error('nama_barang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga Barang</label>
                                        <input type="number"
                                            class="form-control @error('harga')
                                            is-invalid
                                        @enderror"
                                            id="harga" name="harga" value="{{ old('harga') }}">
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="stok" class="form-label">Stok Barang</label>
                                        <input type="text"
                                            class="form-control @error('stok')
                                            is-invalid
                                        @enderror"
                                            id="stok" name="stok" value="{{ old('stok') }}">
                                        @error('stok')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-aulia">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Data End-->

            {{-- Tabel Barang --}}
            <div class="card p-3">
                <table id="example" class="table display  table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $barang)
                            <tr>
                                <td>{{ $barang->kd_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->harga }}</td>
                                <td>{{ $barang->stok }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-aulia rounded-0" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit{{ $barang->kd_barang }}"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <form id="deleteForm" action="{{ url('barang/' . $barang->kd_barang) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-aulia rounded-0"
                                                onclick="return confirm(event)">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            {{-- Modal Edit  --}}
                            <div class="modal fade" id="modalEdit{{ $barang->kd_barang }}" tabindex="-1"
                                aria-labelledby="modalEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form id="editForm" action="{{ url('barang/edit/' . $barang->kd_barang) }}"
                                            method="post">
                                            @csrf
                                            @method('put')
                                            {{-- Modal --}}
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalTambahLabel">Edit
                                                    barang </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-md-12 p-3">
                                                    <div class="mb-3">
                                                        <label for="kd_barang" class="form-label">Kode
                                                            Barang</label>
                                                        <input type="text"
                                                            class="form-control @error('kd_barang')
                                                            is-invalid
                                                        @enderror"
                                                            id="kd_barang" name="kd_barang"
                                                            value="{{ old('kd_barang', $barang->kd_barang) }}">
                                                        @error('kd_barang')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_barang" class="form-label">Nama
                                                            Barang</label>
                                                        <input type="text"
                                                            class="form-control @error('nama_barang')
                                                            is-invalid
                                                        @enderror"
                                                            id="nama_barang" name="nama_barang"
                                                            value="{{ old('nama_barang', $barang->nama_barang) }}">
                                                        @error('nama_barang')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga" class="form-label">Harga
                                                            Barang</label>
                                                        <input type="number"
                                                            class="form-control @error('harga')
                                                            is-invalid
                                                        @enderror"
                                                            id="harga" name="harga"
                                                            value="{{ old('harga', $barang->harga) }}">
                                                        @error('harga')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="stok" class="form-label">Stok
                                                            Barang</label>
                                                        <input type="text"
                                                            class="form-control @error('stok')
                                                            is-invalid
                                                        @enderror"
                                                            id="stok" name="stok"
                                                            value="{{ old('stok', $barang->stok) }}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-aulia">Save
                                                    changes</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            {{-- Modal End --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- Tabel Barang End --}}

        </div>
    </div>

    {{-- Modal Edit  --}}

    {{-- Modal End --}}
@endsection
