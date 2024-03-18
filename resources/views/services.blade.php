@extends('layouts.main')
@section('content')
    <section id="services">
        <div class="menu-services ">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('services/motor') }}">Servis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('services/servis') }}">Cat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('services/servis') }}">Steam</a>
                </li>
            </ul>

            @if ($galeri == 'motor')

            @elseif ($galeri == 'cat')

            @elseif ($galeri == 'steam')
            @endif
        </div>
    </section>
@endsection
