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
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Tambah Kelompok Baris
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            Kelompok Baris
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "rowLabelsForm" method="post" class="form-horizontal"
                    action="{{ route('rowLabels.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="label">Nama Kelompok Baris</label>
                        <input class="form-control mb-3" name="label" placeholder="Isi Nama Kelompok Baris" required>
                    </div>
                    <div class="ml-auto">
                        <button type="submit" id="subject-save" class="btn bg-success-fordone">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <x-slot name="script">
        {{-- <script src="{{ asset('js/Subject.js') }}"></script> --}}
        <script nonce="{{ Vite::cspNonce() }}">
            const tokens = '{{ csrf_token() }}'
            const save_URL = new URL("{{ route('subject.store') }}")
        </script>
    </x-slot>
</x-niu-layout>
