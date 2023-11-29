<x-register-layout>
    <x-slot name="header">
        {{ __('Pengguna') }}
    </x-slot>
    <x-slot name="title">
        Kelola Pengguna
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
    <div class="container vh-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            {{-- asu --}}
            <div class="card" style="min-width: 50vw">
                <div class="card-header h4 text-center">Daftar Pengguna Baru</div>
                <form action="{{ route('users.store') }}" method="POST" id="formUser">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row mx-2">
                                <label for="name">Nama</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="row mx-2">
                                <label for="email">Email</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="row mx-2">
                                <label for="iddinas">Instansi</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <select class="form-control select2bs4" id="iddinas" name="id_dinas">
                                    <option value="">-- Pilih Instansi --</option>
                                    @foreach ($dinas as $din)
                                        <option value="{{ $din->id }}">{{ $din->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mx-2">
                                <label for="noHp">Nomor Handphone</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="text" id="noHp" name="noHp" class="form-control">
                            </div>
                            <div class="row mx-2">
                                <label for="password">Password</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="row mx-2">
                                <label for="password_confirmation">Konfirmasi Password</label>
                            </div>
                            <div class="row mx-2 mb-2">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <button id="storeUser" class="btn btn-sm btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            $(document).ready(function() {
                // $('.select2bs4').select2();
                
            })
            const store_URL = new URL ("{{ route('users.store') }}")
            const index_URL = new URL ("{{ route('users.index') }}")
        </script>
    </x-slot>
</x-register-layout>
