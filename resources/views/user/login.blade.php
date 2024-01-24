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
        <script></script>
        <style type="text/css">
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>
    <div class="container vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            {{-- asu --}}
            <div class="card" style="min-width: 25vw">
                <div class="card-header h4 text-center text-bold">Aplikasi For D One</div>
                <form action="{{ route('users.attemptLogin') }}" method="POST" id="formUser">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row mx-2">
                                <label for="username">Username</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="username" id="username" name="username" class="form-control">
                            </div>
                            <div class="row mx-2">
                                <label for="password">Password</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            {{-- <a id="register" href="{{ route('users.registerNew') }}" class="btn btn-sm bg-info-fordone">Daftar</a> --}}
                            <button id="login" class="btn bg-success-fordone"><i class="fa-solid fa-right-to-bracket"></i> Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="script">
        {{-- <script src="{{ asset('js/user.js') }}"></script> --}}
        <script>
        </script>
    </x-slot>
</x-register-layout>
