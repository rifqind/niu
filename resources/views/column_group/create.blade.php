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
            Tambah Kelompok Kolom
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            Kelompok Kolom
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "columnGroupForm" method="post" class="form-horizontal"
                    action="{{ route('column_group.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="label">Nama Kelompok Kolom</label>
                        <input class="form-control mb-3" name="label" placeholder="Isi Nama Kelompok Kolom" required>
                    </div>
                    <div class="ml-auto">
                        <button type="submit" id="subject-save" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <x-slot name="script">
        {{-- <script src="{{ asset('js/Subject.js') }}"></script> --}}
        <script>
            const tokens = '{{ csrf_token() }}'
            const save_URL = new URL("{{ route('subject.store') }}")
        </script>
    </x-slot>
</x-niu-layout>