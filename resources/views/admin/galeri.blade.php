@extends('admin.layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Data Galeri</h3>
        </div>
        <hr>
        <div class="content-galeri my-3">
            {{-- button tambah --}}
            <div class="btn-tambah d-flex justify-content-end mb-3">
                <button class="btn btn-aulia" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus"></i>
                    Tambah Data</button>
            </div>

            <!-- Modal Tambah Data-->
            <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ url('galeri/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah galeri baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12 col-md-12 p-3">
                                    <div class="mb-3">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea
                                            class="form-control @error('deskripsi')
                                            is-invalid
                                        @enderror"
                                            id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori_id" class="form-label">Kategori</label>
                                        <select name="kategori_id" id="kategori_id"
                                            class="form-select @error('kategori_id')
                                            is-invalid
                                        @enderror">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Upload Gambar</label>
                                        <input
                                            class="form-control @error('gambar')
                                            is-invalid
                                        @enderror"
                                            type="file" id="gambar" name="gambar">
                                        @error('gambar')
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

            {{-- Tabel galeri --}}
            <div class="card p-3">
                <table id="example" class="table display  table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeri as $galeri)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $galeri->deskripsi }}</td>
                                <td>{{ $galeri->kategori->nama_kategori }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                       <a href="{{ url('galeri/'. $galeri->id ) }}" class="btn btn-aulia rounded-0"><i class="bi bi-eye"></i></a>
                                        <button class="btn btn-aulia rounded-0" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit{{ $galeri->id }}"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <form id="deleteForm" action="{{ url('galeri/' . $galeri->id) }}" method="post">
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

                            {{-- Modal End --}}
                        @endforeach
                    </tbody>

                </table>
            </div>
            {{-- Tabel Galeri End --}}

        </div>
    </div>

    {{-- Modal Edit  --}}

    {{-- Modal End --}}
@endsection
