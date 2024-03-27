@extends('admin.layouts.main')
@section('content')
    <div class="header">
        <h3>Detail Galeri</h3>
    </div>
    <hr>

    <div class="row m-0 p-3 justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="gambar-view d-flex justify-content-center flex-column align-items-center">
                <img src="{{ asset('storage/' . $galeri->gambar) }}" width="400px" height="400px" alt="" class="my-3">
                <button class="btn btn-aulia" onclick="window.location='{{ url('/admin/galeri') }}'">
                    kembali
                </button>
                <h4>Judul Gambar</h4>
                <p>{{ $galeri->deskripsi }}</p>
            </div>
        </div>
    </div>
@endsection
