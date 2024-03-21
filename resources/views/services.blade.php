@extends('layouts.main')
@section('content')
    <section id="services">
        <div class="menu-services ">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(3) == '' || request()->segment(3) == 'motor' ? 'active' : '' }}"
                        href="{{ url('auliamotors/services/motor') }}">Servis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(3) == 'modifikasi' ? 'active' : '' }}"
                        href="{{ url('auliamotors/services/modifikasi') }}">Modifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(3) == 'steam' ? 'active' : '' }}"
                        href="{{ url('auliamotors/services/steam') }}">Steam</a>
                </li>
            </ul>
        </div>

        <div class="deskripsi-services row m-3 px-5 justify-content-center">
            <p class="mb-3 mt-2 w-50 " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200"
                data-aos-offset="0">
                {{ $deskripsi }}</p>
        </div>
        <div class="row mx-0 my-0 p-3 justify-content-center">
            @foreach ($galeri as $galeri)
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" width="200px" height="200px" alt=""
                        class="my-3">
                </div>
            @endforeach
        </div>
    </section>
@endsection
