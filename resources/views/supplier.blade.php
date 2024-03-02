@extends('layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Data Supplier</h3>
        </div>
        <hr>
        <div class="content-supplier my-3">
            {{-- button tambah --}}
            <div class="btn-tambah d-flex justify-content-end mb-3">
                <button class="btn btn-aulia" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus"></i>
                    Tambah Data</button>
            </div>

            <!-- Modal Tambah Data-->
            <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('supplier.store') }}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah supplier baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12 col-md-12 p-3">
                                    <div class="mb-3">
                                        <label for="kd_supplier" class="form-label">Kode Supplier</label>
                                        <input type="text"
                                            class="form-control @error('kd_supplier')
                                            is-invalid
                                        @enderror"
                                            id="kd_supplier" name="kd_supplier" value="{{ old('kd_supplier') }}">
                                        @error('kd_supplier')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                        <input type="text"
                                            class="form-control @error('nama_supplier')
                                            is-invalid
                                        @enderror"
                                            id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier') }}">
                                        @error('nama_supplier')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No HP</label>
                                        <input type="number"
                                            class="form-control @error('no_hp')
                                            is-invalid
                                        @enderror"
                                            id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                                        @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text"
                                            class="form-control @error('alamat')
                                            is-invalid
                                        @enderror"
                                            id="alamat" name="alamat" value="{{ old('alamat') }}">
                                        @error('alamat')
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
                            <th>Kode Supplier</th>
                            <th>Nama Supplier</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $supplier)
                            <tr>
                                <td>{{ $supplier->kd_supplier }}</td>
                                <td>{{ $supplier->nama_supplier }}</td>
                                <td>{{ $supplier->no_hp }}</td>
                                <td>{{ $supplier->alamat }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-aulia rounded-0" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit{{ $supplier->kd_supplier }}"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <form id="deleteForm" action="{{ url('supplier/' . $supplier->kd_supplier) }}"
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
                            <div class="modal fade" id="modalEdit{{ $supplier->kd_supplier }}" tabindex="-1"
                                aria-labelledby="modalEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form id="editForm" action="{{ url('supplier/edit/' . $supplier->kd_supplier) }}"
                                            method="post">
                                            @csrf
                                            @method('put')
                                            {{-- Modal --}}
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalTambahLabel">Edit
                                                    supplier </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-md-12 p-3">
                                                    <div class="mb-3">
                                                        <label for="kd_supplier" class="form-label">Kode
                                                            supplier</label>
                                                        <input type="text"
                                                            class="form-control @error('kd_supplier')
                                                            is-invalid
                                                        @enderror"
                                                            id="kd_supplier" name="kd_supplier"
                                                            value="{{ old('kd_supplier', $supplier->kd_supplier) }}">
                                                        @error('kd_supplier')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_supplier" class="form-label">Nama
                                                            supplier</label>
                                                        <input type="text"
                                                            class="form-control @error('nama_supplier')
                                                            is-invalid
                                                        @enderror"
                                                            id="nama_supplier" name="nama_supplier"
                                                            value="{{ old('nama_supplier', $supplier->nama_supplier) }}">
                                                        @error('nama_supplier')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_hp" class="form-label">No HP
                                                            </label>
                                                        <input type="number"
                                                            class="form-control @error('no_hp')
                                                            is-invalid
                                                        @enderror"
                                                            id="no_hp" name="no_hp"
                                                            value="{{ old('no_hp', $supplier->no_hp) }}">
                                                        @error('no_hp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat
                                                            supplier</label>
                                                        <input type="text"
                                                            class="form-control @error('alamat')
                                                            is-invalid
                                                        @enderror"
                                                            id="alamat" name="alamat"
                                                            value="{{ old('alamat', $supplier->alamat) }}">
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
            {{-- Tabel supplier End --}}

        </div>
    </div>

    {{-- Modal Edit  --}}

    {{-- Modal End --}}
@endsection
