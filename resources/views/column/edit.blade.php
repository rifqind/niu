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
            Update Kolom
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            Kolom
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "columnForm" method="POST" class="form-horizontal" action="{{ route('column.update') }}">
                    @csrf
                    @method('PUT') <!-- Add this line to override the column method -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="label">Nama Kolom</label>
                        <input class="form-control mb-3" name="label" value="{{ $column->label }}"
                            placeholder="Isi Nama Kolom" required>
                        <input class="form-control mb-3 d-none" name="id"
                            value="{{ Illuminate\Support\Facades\Crypt::encrypt($column->id) }}" readonly>

                    </div>
                    <div class="form-group">
                        <label for="id_columns_group">Nama Kelompok Kolom</label>
                        <select name="id_columns_group" id="id_columns_group" class="form-control select2bs4"
                            value="{{ $column->id_columns_group }}">
                            {{-- <option value="">-- Pilih Kelompok Kolom --</option> --}}
                            @foreach ($column_groups as $column_group)
                                <option value="{{ $column_group->id }}"
                                    {{ $column->id_columns_group == $column_group->id ? 'selected' : '' }}>
                                    {{ $column_group->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ml-auto">
                        <button type="submit" class="btn bg-success-fordone">Simpan</button>
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
