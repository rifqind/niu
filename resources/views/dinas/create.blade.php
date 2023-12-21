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
        <script></script>
        <style type="text/css">
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Tambah Dinas
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            DINAS
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "DinasForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="nama">Nama Dinas</label>
                        <input class="form-control mb-3" id="nama" placeholder="Isi Nama Dinas">
                        <label for="regions">Wilayah Kerja</label>
                        <select class="form-control select2bs4 mb-3" id="regions">
                            <option value="">Pilih Wilayah Kerja</option>
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
                <div class="ml-auto">
                    <button id="dinas-save" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/dinas.js') }}"></script>
        <script>
            const tokens = '{{ csrf_token() }}'
            const save_URL = new URL("{{ route('dinas.store') }}")
            document.addEventListener("DOMContentLoaded", function() {
                document
                    .getElementById("dinas-save")
                    .addEventListener("click", function(e) {
                        saveDinas();
                    });
            })
        </script>
    </x-slot>
</x-niu-layout>
