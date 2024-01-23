<x-niu-layout>
    <x-slot name="title">
        {{ __('Test') }}
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">

        <style type="text/css">
            .select2-container--default .select2-selection--single {
                height: 38px;
                line-height: 24px;
                padding-left: 6px;

                /* You can adjust this value as needed */
            }
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Edit Tabel</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body bg-info text-center">
                <h2>Edit Tabel</h2>
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-danger temporary-message">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('tabel.update', $encryptedId) }}" id="edit-form" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">

                <label for="dinas">Produsen Data</label>
                <select name="dinas" class="form-control select2-selection select2bs4">
                    <option value="">-- Pilih Dinas --</option>
                    @foreach ($daftar_dinas as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $tabel['id_dinas'] ? 'selected' : '' }}>
                            {{ $item->nama }}</option>
                    @endforeach
                </select>
                @error('dinas')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nomor">Nomor Tabel</label>
                <input type="text" class="form-control" name="nomor" value="{{ $tabel['nomor'] }}">
                @error('nomor')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="judul">Judul Tabel</label>
                <input type="text" class="form-control" name="judul" value = '{{ $tabel['label'] }}'>
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="subject">Subjek Tabel</label>

                <select name="subject" class="form-control select2 select2-selection select2bs4">
                    <option value="">-- Pilih Subjek --</option>
                    @foreach ($subjects as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $tabel['id_subjek'] ? 'selected' : '' }}>
                            {{ $item->label }}</option>
                    @endforeach
                </select>
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="unit">Unit Tabel</label>
                <input type="text" class="form-control" name="unit" value="{{ $tabel['unit'] }}">
                @error('unit')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">

                <div class="col text-left">
                    <button type="button" id="back-edit-form" class="btn btn-light border"> <i
                            class="fas fa-chevron-left"></i> Kembali</button>
                </div>
                <div class="col text-right">

                    <button type="submit" id="submit-edit-form" class="btn btn-info">Simpan Perubahan</button>
                </div>
            </div>
        </form>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->

        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // set initial values





            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('edit-form');
                const submitButton = document.getElementById('submit-edit-form');
                const backButton = document.getElementById('back-edit-form');

                submitButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    submitButton.disabled = true;
                    if (confirm(
                            "Apakah Anda Yakin melakukan perubahan? Perubahan akan berlaku ke seluruh tahun data"
                            )) {
                        form.submit();
                    }
                });

                backButton.addEventListener('click', function() {
                    window.location.href = '{{ route('tabel.master') }}';
                });
                
            });
        </script>
    </x-slot>
</x-niu-layout>
