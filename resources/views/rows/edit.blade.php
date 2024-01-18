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
            Update Kelompok Baris
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            Kelompok Baris
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "rowsForm" method="POST" class="form-horizontal" action="{{ route('rows.update') }}">
                    @csrf
                    @method('PUT') <!-- Add this line to override the column method -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="label">Nama Baris</label>
                        <input class="form-control mb-3" name="label" value="{{ $rows->label }}"
                            placeholder="Isi Nama Baris" required>
                        <input class="form-control mb-3 d-none" name="id"
                            value="{{ Illuminate\Support\Facades\Crypt::encrypt($rows->id) }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="rowLabels">Nama Kelompok Kolom</label>
                        <select name="rowLabels" id="rowLabels" class="form-control select2bs4">
                            <option value="{{ $rows->id_rowlabels }}" disabled selected hidden>-- Pilih Kelompok Baris --</option>
                            @foreach ($rowLabels as $rowLabel)
                                <option value="{{ $rowLabel->id }}"
                                    {{ $rows->id_rowlabels == $rowLabel->id ? 'selected' : '' }}>
                                    {{ $rowLabel->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        console.log({{ Js::from($decrypted_id) }})
    </script>
    <x-slot name="script">

    </x-slot>
</x-niu-layout>
