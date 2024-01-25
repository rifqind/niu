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

            .select2-selection__rendered {
                overflow: hidden !important;
                /* word-wrap: break-word !important; */
                /* text-overflow: ellipsis !important; */
                /* white-space: normal !important; */
            }
        </style>
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Reset Pengguna
        </li>
    </x-slot>
    <div id="success-alert" class="alert alert-success alert-dismissible fade show d-none" role="alert">
        <strong>Sukses!</strong> Berhasil menyimpan Perubahan data !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div style="col-xl-6 col-l-6 col-md-9 col-sm-12 col-xs-12">
        <div class="card mb-3">
            <form action="" id="form-edit">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label class="mb-0" for="username">Username</label>
                        </div>
                        <div class="col d-flex align-items-center flex-column">
                            <input type="text" id="username" name="username" class="form-control"
                                value="{{ $user->username }}">
                            <div class="text-danger text-left" id="error-username"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <input id="idHidden" name="id" class="hiddenInput" value="{{ Illuminate\Support\Facades\Crypt::encrypt($user->id) }}" hidden>
                        <div class="col-3 d-flex align-items-center">
                            <label class="mb-0" for="name">Nama</label>
                        </div>
                        <div class="col d-flex align-items-center flex-column">
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ $user->name }}">
                            <div class="text-danger text-left" id="error-name"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label class="mb-0" for="email">Email</label>
                        </div>
                        <div class="col d-flex align-items-center flex-column">
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ $user->email }}">
                            <div class="text-danger text-left" id="error-email"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label class="mb-0" for="iddinas">Instansi</label>
                        </div>
                        <div class="col d-flex align-items-center flex-column">
                            <select class="form-control select2bs4" id="iddinas" name="id_dinas">
                                {{-- <option value="{{ $user->id_dinas }}">{{ $user->dinas->nama }}</option> --}}
                                @foreach ($dinas as $din)
                                    <option value="{{ $din->id }}">{{ $din->nama }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger text-left" id="error-id_dinas"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label class="mb-0" for="noHp">Nomor Hp</label>
                        </div>
                        <div class="col d-flex align-items-center flex-column">
                            <input type="noHp" id="noHp" name="noHp" class="form-control"
                                value="{{ $user->noHp }}">
                            <div class="text-danger text-left" id="error-noHp"></div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="btn btn-sm bg-success-fordone editButton"> <i class="fa-solid fa-check mr-2"></i>Simpan
                        </div>
                        <div id="changePassword" class="btn btn-sm btn-warning"> <i
                                class="fa-solid fa-key mr-2"></i>Ganti Password</div>
                    </div>
                </div>
        </div>
        <div class="card d-none" id="card-password">
            {{-- <form action="" id="form-password"> --}}
            {{-- @csrf --}}
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
                    <div class="col d-flex align-items-center flex-column">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control">
                        <div class="text-danger text-left" id="error-password"></div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="btn btn-sm btn-warning editButton"> <i class="fa-solid fa-key"></i> Simpan Password
                        Baru</div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            const default_URL = new URL("{{ route('users.default') }}")
            const edit_URL = new URL("{{ route('users.editProfile') }}")
            const tokens = "{{ csrf_token() }}"
        </script>
    </x-slot>
</x-niu-layout>
