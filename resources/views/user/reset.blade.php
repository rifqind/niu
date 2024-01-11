<x-niu-layout>
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
        <style type="text/css">
            #tabel-dinas thead {
                font-weight: bold;
            }
        </style>
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Reset Pengguna
        </li>
    </x-slot>
    <div style="max-width: 50vw;">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row mb-3">
                    <input id="idHidden" class="hiddenInput" value="{{ $user->id }}" hidden>
                    <div class="col-3 d-flex align-items-center">
                        <label class="mb-0" for="name">Nama</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="text" id="name" name="name" class="form-control" disabled
                            value="{{ $user->name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3 d-flex align-items-center">
                        <label class="mb-0" for="email">Email</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="email" id="email" name="email" class="form-control" disabled
                            value="{{ $user->email }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3 d-flex align-items-center">
                        <label class="mb-0" for="iddinas">Instansi</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="iddinas" id="iddinas" name="iddinas" class="form-control" disabled
                            value="{{ $user->dinas->nama }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3 d-flex align-items-center">
                        <label class="mb-0" for="noHp">Nomor Hp</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="noHp" id="noHp" name="noHp" class="form-control" disabled
                            value="{{ $user->noHp }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3 d-flex align-items-center">
                        <label class="mb-0" for="role">Peran</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="role" id="role" name="role" class="form-control" disabled
                            value="{{ $user->role }}">
                    </div>
                </div>
                <div class="text-right">
                    <div id="resetPassword" class="btn btn-sm btn-warning"> <i class="fa-solid fa-key"></i> Reset Password</div>
                </div>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <label class="mb-0" for="password">Password</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <label class="mb-0" for="password_confirmation">Konfirmasi Password</label>
                    </div>
                    <div class="col d-flex align-items-center">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control">
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            const default_URL = new URL ("{{ route('users.default') }}")
            const tokens = "{{ csrf_token() }}"
        </script>
    </x-slot>
</x-niu-layout>
