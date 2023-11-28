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
            Daftar Pengguna
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="ml-1 h4 mb-3">
                Daftar Pengguna
            </div>
            <div class="mr-1 justify-content-between row">
                <div class="ml-auto mr-1">
                    <a href="{{ route('dinas.create') }}" class="btn btn-info">Tambah</a>
                </div>
                <div class="ml-auto mr-1">
                    <form action="{{ route('dinas.search') }}" method="GET">
                        <input id="cariDinas" type="text" class="form-control" style="min-width: 25vw;"
                            placeholder="Cari Pengguna" name="search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover" id="tabel-dinas">
        <thead>
            <tr>
                <td class="first-column">No.</td>
                <td class="text-center">Nama</td>
                <td class="text-center">Nama Instansi</td>
                <td class="text-center">No. HP</td>
                <td class="text-center">Peran</td>
                <td class="text-center">Edit</td>
                <td class="text-center">Hapus</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->dinas->nama }}</td>
                    <td class="text-center">{{ $user->noHp }}</td>
                    <td class="text-center">{{ $user->role }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <x-slot name="script">

    </x-slot>
</x-niu-layout>
