<x-register-layout>
    <x-slot name="header">
        {{ __('Pengguna') }}
    </x-slot>
    <x-slot name="title">
        Login
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    </x-slot>
    {{-- <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div> --}}
    <div class="container vh-100">
        <div class="flex-column d-flex justify-content-center align-items-center h-100">
            <div class="card shadow login-card" id="card-login">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('images/login-try.jpg') }}" id="login-image" alt="login"
                            class="login-card-img">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="card-body">
                            <div class="brand-wrapper text-center">
                                <img src="{{ asset('images/Logo Tryhard.png') }}" class="mr-auto" id="logo-login"
                                    alt="logo-login">
                            </div>
                            <form action="{{ route('users.attemptLogin') }}" method="POST" id="formUser">
                                @csrf
                                <div class="form-group">
                                    <div class="row mx-2 mb-2">
                                        <input type="username" id="username" name="username"
                                            class="form-control form-login" placeholder="Username">
                                    </div>
                                    <div class="row mx-2 mb-2">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-login" placeholder="Password">
                                    </div>
                                </div>
                                <div class="mx-2">
                                    {{-- <a id="register" href="{{ route('users.registerNew') }}" class="btn btn-sm bg-info-fordone">Daftar</a> --}}
                                    <button id="login" class="btn bg-success-fordone form-login"><i
                                            class="fa-solid fa-right-to-bracket"></i> Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-slot name="script">
            {{-- <script src="{{ asset('js/user.js') }}"></script> --}}
            <script></script>
        </x-slot>
</x-register-layout>
