@extends('layouts.main')
@section('content')
    <section id="services">
        <div class="menu-services ">
            <h3>Galeri Aulia Motor's</h3>
        </div>

        <div class="galeri my-5">
            <div class="row m-0 justify-content-center p-3 gap-2">
                @foreach ($galeri as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 gambar-galeri-2  p-0" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
