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
        <script></script>
        <style type="text/css">
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Create Table</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>Buat Tabel</p>
            </div>
        </div>

        <hr>
        <form action="" id="table">
            <b>Detail Tabel</b>
            <div class="form-group">
                <label for="nomor">Nomor Tabel</label>
                <input type="text" class="form-control" name="nomor">
            </div>
            <div class="form-group">
                <label for="judul">Judul Tabel</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for="dinas">Dinas Tabel</label>
                <input type="text" class="form-control" name="dinas">
            </div>
            <div class="form-group">
                <label for="subjek">Subjek Tabel</label>
                <input type="text" class="form-control" name="subjek">
            </div>
            <div class="form-group">
                <label for="unit">Unit Tabel</label>
                <input type="text" class="form-control" name="unit">
            </div>
            <br>
            <hr>
            <b>Detail Rows</b>
            <br>
            <div class="form-group">
                <label for="row-label">Row Label</label>
                <select name="row-label" class="form-control">
                    @foreach ($row_labels as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>
            <b>Row List</b>
            <hr>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="row-list" id="row-list">
                <label class="form-check-label" for="row-list">Bolmong</label>
            </div>
            <br>
            <hr>
            <b>Detail Variabel</b>
            <div class="form-group">
                <label for="kolom">Kolom Tabel</label>
                <input type="text" class="form-control" name="kolom">
            </div>

            <div class="form-group">
                <label for="tahun">Tahun Tabel</label>
                <input type="text" class="form-control" name="tahun">
            </div>

            <div class="form-group">
                <label for="periode">Periode Tabel</label>
                <input type="text" class="form-control" name="periode">
            </div>


        </form>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ url('') }}/plugins/select2/js/select2.full.min.js"></script>
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')


            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                })
            });
            // set initial values
            const form = document.getElementById('table');

            const nomor = document.getElementsByName('nomor')[0];
            const judul = document.getElementsByName('judul')[0];
            const dinas = document.getElementsByName('dinas')[0];
            const subjek = document.getElementsByName('subjek')[0];
            const unit = document.getElementsByName('unit')[0];

            const row_label = document.getElementsByName('row-label')[0];
            const row_list = document.getElementsByName('row-list')[0];
            const kolom = document.getElementsByName('kolom')[0];
            const tahun = document.getElementsByName('tahun')[0];
            const periode = document.getElementsByName('periode')[0];

            nomor.value = "R/001";
            judul.value = "Judul Tabel";
            dinas.value = "Dinas";
            subjek.value = "Sosial";
            unit.value = "Persentase";
            row_label.value = "1";

            kolom.value = "Laki-laki";
            tahun.value = "2023";
            periode.value = "Januari";
        </script>
    </x-slot>
</x-niu-layout>
