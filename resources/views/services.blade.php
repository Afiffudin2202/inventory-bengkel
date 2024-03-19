@extends('layouts.main')
@section('content')
    <section id="services">
        <div class="menu-services ">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(3) == 'motor' ? 'active' : '' }}" href="{{ url('auliamotors/services/motor') }}">Servis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(3) == 'cat' ? 'active' : '' }}" href="{{ url('auliamotors/services/servis') }}">Cat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(3) == 'steam' ? 'active' : '' }}" href="{{ url('auliamotors/services/steam') }}">Steam</a>
                </li>
            </ul>
        </div>

        <div class="row  my-0 p-3 justify-content-center">
            {{-- @if ($galeri == 'motor')
                    @foreach ($galeri as $galeri)
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" width="400px" height="400px"
                                alt="" class="my-3">
                        </div>
                    @endforeach
                @elseif ($galeri == 'cat')

                @elseif ($galeri == 'steam')
                    @foreach ($galeri as $galeri)
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" width="400px" height="400px"
                                alt="" class="my-3">
                        </div>
                    @endforeach
                @endif --}}
            @foreach ($galeri as $galeri)
                <div class="col-lg-4">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" width="200px" height="200px" alt=""
                        class="my-3">
                </div>
            @endforeach
        </div>
    </section>
@endsection
