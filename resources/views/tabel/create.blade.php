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
                <label for="dinas">Dinas Tabel</label>
                <select name="dinas" class="form-control select2-selection">
                    @foreach ($daftar_dinas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nomor">Nomor Tabel</label>
                <input type="text" class="form-control" name="nomor">
            </div>
            <div class="form-group">
                <label for="judul">Judul Tabel</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for="subjek">Subjek Tabel</label>

                <select name="subjek" class="form-control select2 select2-selection">
                    <option value="">-- Pilih Subjek Tabel --</option>
                    @foreach ($subjects as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
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
                <select name="row-label" class="form-control select2-selection" id="row-label-select">
                    <option value="">-- Pilih Row Label --</option>
                    @foreach ($row_labels as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>
            <b>Row List</b>
            <hr>

            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">
                                No.
                            </th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Label</th>
                            <th scope="col"><input type="checkbox" id="select-toggle-row"name="select-toggle-row">
                                <label for="select-toggle-row"> Pilih Semua</label>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="row-list-body" class="bg-white">

                    </tbody>
                </table>

            </div>
            <br>
            <hr>
            <b>Detail Variabel</b>

            <div class="form-group">
                <label for="column-group">Grup Kolom</label>
                <select name="column-group" class="form-control select2-selection" id="column-group-select">
                    <option value="">-- Pilih Grup Kolom --</option>
                    @foreach ($kolom_grup as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>

            <b>Daftar Kolom</b>
            <hr>
            <table class="table table-hover table-bordered bg-white">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">
                            No.
                        </th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Label</th>
                        <th scope="col"><input type="checkbox" id="select-toggle-column" name="select-toggle-column">
                            <label for="select-toggle-column"> Pilih Semua</label>
                        </th>
                    </tr>
                </thead>
                <tbody id="column-list-body" class="bg-white">

                </tbody>
            </table>

            <br>
            <div class="form-group">
                <label for="tahun">Tahun Tabel</label>
                <select name="tahun" id="tahun" class="form-control select2-selection">
                    <option value="">-- Pilih Tahun --</option>
                </select>
            </div>

            <div class="form-group">
                <label for="turtahun-group">Jenis Turunan Tahun</label>
                <select name="turtahun-group" class="form-control select2-selection" id="turtahun-group-select">
                    <option value="">-- Pilih Turunan Tahun --</option>
                    @foreach ($turtahun_groups as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>

            <b>Daftar Turunan Tahun</b>
            <hr>
            <table class="table table-hover table-bordered bg-white">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">
                            No.
                        </th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Label</th>
                        <th scope="col"><input type="checkbox" id="select-toggle-turtahun"
                                name="select-toggle-turtahun">
                            <label for="select-toggle-turtahun"> Pilih Semua</label>
                        </th>
                    </tr>
                </thead>
                <tbody id="turtahun-list-body" class="bg-white">

                </tbody>
            </table>

            <button type="button" id="submit-create-table" class="btn btn-primary">Buat Tabel</button>
        </form>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ asset('js/tabel.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // set initial values
            const form = document.getElementById('table');
            const token = '{{ csrf_token() }}'

            const rowFetchURL = "{{ route('rows.fetch') }}";
            const columnFetchURL = "{{ route('column.fetch') }}";
            const turtahunFetchURL = "{{ route('turtahungroups.fetch') }}";

            // submit action 
        </script>
    </x-slot>
</x-niu-layout>
