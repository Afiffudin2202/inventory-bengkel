@extends('auth.layout-login')
@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="content-login">
                    <div class="card shadow-lg p-0 border-0">
                        <div class="card-header bg-login ">
                            <h3 class="text-center text-white">ADMIN LOGIN </h3>
                        </div>
                        <div class="card-body px-5 py-5">
                            @if (session()->has('login_failed'))
                                <div class="alert alert-danger text-center">
                                    {{ session('login_failed') }}
                                </div>
                            @endif
                            <form action="{{ url('login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 icon-login-container">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p-0 m-0">
                                            <input type="text"
                                                class="form-control rounded-0 bg-input py-2 px-3 @error('username')
                                                is-invalid
                                            @enderror"
                                                name="username" id="username" placeholder="Username">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 icon-login-container">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                        <div class="col-lg-11 col-md-11 col-sm-11 p-0 m-0">
                                            <input type="password"
                                                class="form-control rounded-0 bg-input py-2 px-3 @error('password')
                                                is-invalid
                                            @enderror"
                                                name="password" id="password" placeholder="Password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <div class="row ">
                                        <button class="btn btn-aulia rounded-0" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
