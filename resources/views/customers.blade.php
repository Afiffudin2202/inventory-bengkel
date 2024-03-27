@extends('layouts.main')
@section('content')
    <section id="services">
        <div class="menu-services ">
            <h3>Pelanggan Kami</h3>
        </div>

        <div class="pelanggan my-5">
            <div class="row justify-content-center m-0 gap-5">
                <div class="kolom-pelanggan col-lg-4 col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="3000">
                    <h4>Judul card</h4>
                    <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, provident dolorum minus iste
                        corrupti sapiente quibusdam itaque ullam! Sunt expedita fuga rem voluptatem? Neque atque cum totam
                        repudiandae sequi possimus.</p>
                    <span>Afiffudin</span>
                </div>
                <div class="kolom-pelanggan col-lg-4 col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="3000">
                    <h4>Judul card</h4>
                    <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, provident dolorum minus iste
                        corrupti sapiente quibusdam itaque ullam! Sunt expedita fuga rem voluptatem? Neque atque cum totam
                        repudiandae sequi possimus.</p>
                    <span>Afiffudin</span>
                </div>
                <div class="kolom-pelanggan col-lg-4 col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="3000">
                    <h4>Judul card</h4>
                    <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, provident dolorum minus iste
                        corrupti sapiente quibusdam itaque ullam! Sunt expedita fuga rem voluptatem? Neque atque cum totam
                        repudiandae sequi possimus.</p>
                    <span>Afiffudin</span>
                </div>
            </div>
        </div>

        <div class="penilaian-input mb-5">
            <div class="row justify-content-center m-0">
                <p class="">Berikan Penilaian Anda di sini</p>
                <div class="tombol-penilaian text-center">
                    <button class="btn btn-dark"
                        onclick="window.location='{{ url('auliamotors/customers/penilaian') }}'">Nilai sekarang</button>
                </div>
            </div>
        </div>
    </section>
@endsection
