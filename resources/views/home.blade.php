@extends('layouts.main')
@section('content')
    {{-- Hero --}}
    <section class="" id="hero">
        <div class="container-carousel">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active w-100">
                        <img src="{{ asset('assets/images/motor3.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/motor2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/cb1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="transparan-bg"></div>
                    <div class="carousel-caption d-md-block">
                        <h1>Selamat Datang, di Aulia Motors</h1>
                        <p>Kami hadir untuk memberikan pengalaman terbaik bagi Anda dan motor kesayangan Anda.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </section>
    {{-- Hero End --}}

    {{-- Layanan Kami --}}
    <section id="layanan-kami" class="py-5">
        <div class="row py-3 m-0 justify-content-center">
            <div class="judul-layanan text-center ">
                <h1>Layanan Kami</h1>
                <p>Aulia Motors menawarkan berbagai layanan perawatan dan perbaikan berkualitas tinggi untuk memastikan
                    motor anda tetap beroprasi dengan optimal</p>
            </div>
            <div class="row card-layanan px-5 py-3 d-flex justify-content-evenly ">
                <div class="col-lg-3 col-md-3 col-sm-12 mb-3 p-3 layanan-kami-card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <h4>Servis Berkala</h4>
                    <p>Perawatan rutin untuk menjaga performa mesin dan komponen kedaraan</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-3 p-3 layanan-kami-card" data-aos="fade-up"
                    data-aos-duration="3000">

                    <h4>Perbaikan Mesin</h4>
                    <p>Solusi tepat dan efisien untuk masalah mesin dan sistem kelistrikan</p>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-3 p-3 layanan-kami-card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <h4>Pemasangan Aksesoris</h4>
                    <p>Tambahkan sentuhan personal pada motor anda dengan aksesoris berkualitas</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Layanan Kami ENd --}}

    {{-- Pelayanan Terbaik --}}
    <section id="pelayanan-terbaik" class="py-5">
        <div class="container-pelayanan">
            <div class="content-pelayanan text-white">
                <div class="row m-0 justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 judul-pelayanan">
                        <h1>Pelayanan Terbaik Kami</h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row m-0 justify-content-center">
                            <div class="card-pelayanan col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <img src="{{ asset('assets/images/motor2.png') }}" alt="">
                            </div>
                            <div class="card-pelayanan col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 " data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                                <img src="{{ asset('assets/images/motor3.png') }}" alt="">
                            </div>
                            <div class="card-pelayanan col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 " data-aos="flip-left"
                                data-aos-easing="ease-out-cubic" data-aos-duration="6000">
                                <img src="{{ asset('assets/images/cb1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Pelayanan Terbaik End --}}

    {{-- Galeri --}}
    <section id="galeri">
        <div class="container-fluid">
            <div class="row justify-content-center m-0 py-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="judul-galeri text-center mb-5">
                        <h1>Galeri Aulia Motors</h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row justify-content center text-center px-5">
                        @foreach ($galeri as $galeri)
                            <div class="col-lg-4 col-md-6 col-sm-12 gambar-galeri" data-aos="fade-right">
                                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="" class="my-3">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12 text-center my-1">
                    <button class="btn btn-dark" onclick="window.location='{{ url('auliamotors/galeri') }}'">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- Galeri  End --}}
@endsection
