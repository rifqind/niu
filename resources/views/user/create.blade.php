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
                <form action="{{ route('users.add') }}" method="POST" id="createUsers">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-5 d-flex align-items-center">
                            <label class="mb-0" for="username">Username</label>
                        </div>
                        <div class="col-7 d-flex flex-column">
                            <input type="text" id="username" name="username" class="form-control">
                            <div class="text-danger text-left" id="error-username"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <input id="idHidden" class="hiddenInput" hidden>
                        <div class="col-5 d-flex align-items-center">
                            <label class="mb-0" for="name">Nama</label>
                        </div>
                        <div class="col-7 d-flex flex-column">
                            <input type="text" id="name" name="name" class="form-control">
                            <div class="text-danger text-left" id="error-name"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5 d-flex align-items-center">
                            <label class="mb-0" for="email">Email</label>
                        </div>
                        <div class="col-7 d-flex flex-column">
                            <input type="email" id="email" name="email" class="form-control">
                            <div class="text-danger text-left" id="error-email"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5 d-flex align-items-center">
                            <label class="mb-0" for="iddinas">Instansi</label>
                        </div>
                        <div class="col-7 d-flex flex-column">
                            <select class="form-control select2bs4" id="iddinas" name="id_dinas">
                                <option value="">-- Pilih Instansi --</option>
                                @foreach ($dinas as $din)
                                    <option value="{{ $din->id }}">{{ $din->nama }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger text-left" id="error-id_dinas"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5 d-flex align-items-center">
                            <label class="mb-0" for="noHp">Nomor Hp</label>
                        </div>
                        <div class="col-7 d-flex flex-column">
                            <input type="tel" id="noHp" name="noHp" pattern="[0-9]{12,13}" placeholder="081234567809" class="form-control">
                            <div class="text-danger text-left" id="error-noHp" ></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5 d-flex align-items-center">
                            <label class="mb-0" for="role">Peran</label>
                        </div>
                        <div class="col-7 d-flex flex-column">
                            <select class="form-control select2bs4" id="role" name="role">
                                <option value="">-- Pilih peran --</option>
                                <option value="produsen">Produsen</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div class="text-danger text-left" id="error-role"></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-5 d-flex align-items-center">
                        <label class="mb-0" for="password">Password</label>
                    </div>
                    <div class="col-7 d-flex flex-column">
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5 d-flex align-items-center">
                        <label class="mb-0" for="password_confirmation">Konfirmasi Password</label>
                    </div>
                    <div class="col-7 d-flex flex-column">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control">
                        <div class="text-danger text-left" id="error-password"></div>
                    </div>
                </div>
                <div class="text-right">
                    <button id="addUsers" class="btn btn-sm btn-info"> <i class="fa-solid fa-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            const add_URL = new URL("{{ route('users.add') }}")
            const this_URL = new URL("{{ route('users.index') }}")
            const tokens = "{{ csrf_token() }}"
        </script>
    </x-slot>
</x-niu-layout>
