@extends('layouts.main')
@section('content')
    <section id="services">
        <div class="menu-services ">
            <h3>Berikan Masukan dan penilaian anda di bawah ini</h3>
        </div>

        <div class="form-penilaian mt-5">
            <div class="row mt-3 mx-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="card p-3">
                        <form action="{{ route('penilaian') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Masukan Email">
                            </div>
                            <div class="mb-3">
                                <textarea name="text" id="text" cols="30" rows="10" class="form-control" placeholder="Masukan Penilaian di sini"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
