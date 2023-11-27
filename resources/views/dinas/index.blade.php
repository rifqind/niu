<x-niu-layout>
    <x-slot name="title">
        create
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
        @vite(['resources/css/app.css'])
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Daftar Dinas
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="ml-1 h4 mb-3">
                DINAS
            </div>
            <div class="ml-auto mr-1">
                <form action="{{ route('dinas.search') }}" method="GET">
                    <input type="text" class="form-control" placeholder="Cari Dinas" name="search">
            </div>
        </div>
        <table class="table table-hover" id="tabel-dinas">
            <thead>
                <tr>
                    <td class="first-column">No.</td>
                    <td>Dinas</td>
                    <td>Wilayah Kerja</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($dinas as $din)
                    <tr>
                        <td>{{ $din->number }}</td>
                        <td>{{ $din->nama }}</td>
                        <td>{{ $din->regions->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <div class="spinner-border d-none" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/dinas.js') }}"></script>
    </x-slot>
</x-niu-layout>
