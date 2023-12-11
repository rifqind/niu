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
                <select name="dinas" class="form-control">
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

                <select name="subjek" class="form-control">
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
                <select name="row-label" class="form-control" onchange="handleRowLabel(this.value)">
                    @foreach ($row_labels as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>
            <b>Row List</b>
            <hr>
            <div class="row">

                <button type="button" class="btn btn-primary px-2" onclick="handleSelectAll(true);">Pilih
                    Semua</button>
                <button type="button" class="btn btn-secondary px-2" onclick="handleSelectAll(false);">Reset</button>
            </div>
            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                No.
                            </th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Label</th>
                            <th scope="col">Pilih ?</th>
                        </tr>
                    </thead>
                    <tbody id="row-list-body">
                        @foreach ($row_list as $key => $item)
                            <tr onclick="handleCheckRow({{ $key }})">
                                <th scope="row">
                                    {{ $key + 1 }}
                                </th>
                                <td>{{ $item->tipe }}</td>
                                <td>{{ $item->label }}</td>
                                <td> <input type="checkbox" aria-label="Checkbox for following text input"
                                        class="row-list-checkbox" id="{{ $key }}">
                                </td>
                            </tr>
                            {{-- <option value="{{ $item->id }}">{{ $item->label }}</option> --}}
                        @endforeach
                    </tbody>
                </table>
                {{-- <select name="row-list-select" id="row-list-select" class="select2bs4-select form form-select">
                    @foreach ($row_list as $key => $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select> --}}
            </div>
            <br>
            <hr>
            <b>Detail Variabel</b>

            <div class="form-group">
                <label for="kolom-grup">Grup Kolom</label>
                <select name="kolom-grup" class="form-control">
                    @foreach ($kolom_grup as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>

            <b>Daftar Kolom</b>
            <hr>
            @foreach ($daftar_kolom as $key => $item)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="column-list"
                        id="column-list-{{ $key }}" value="{{ $item->id }}">
                    <label class="form-check-label" for="column-list-{{ $key }}">{{ $item->label }}</label>
                </div>
            @endforeach
            <br>
            <div class="form-group">
                <label for="tahun">Tahun Tabel</label>
                <input type="text" class="form-control" name="tahun">
            </div>

            <div class="form-group">
                <label for="periode">Periode Tabel</label>
                <input type="text" class="form-control" name="periode">
            </div>

            <button type="button" id="submit-create-table" class="btn btn-primary">Buat Tabel</button>
        </form>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->

        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
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
            dinas.value = "1";
            subjek.value = "1";
            unit.value = "Persentase";
            row_label.value = "1";

            // kolom.value = "Laki-laki";
            tahun.value = "2023";
            periode.value = "Januari";

            // handle select all
            function handleSelectAll(isSelected) {
                var selectedItems = $('.row-list-checkbox').each(function(index, item) {
                    item.checked = isSelected;
                    console.log({
                        checked: item.checked
                    });
                });
                return 1;
            }

            // handle select one row

            function handleCheckRow(idRow) {
                let rowChecked = document.getElementById(idRow).checked;
                if (rowChecked) {
                    return document.getElementById(idRow).checked = false;
                }
                return document.getElementById(idRow).checked = true;
            }

            // submit action 

            function handleSubmitCreateTable() {
                // prepare table
                let table = {
                    'nomor': document.getElementsByName('nomor')[0].value,
                    'label': document.getElementsByName('judul')[0].value,
                    'unit': document.getElementsByName('unit')[0].value,
                    'id_dinas': document.getElementsByName('dinas')[0].value,
                    'id_subjek': document.getElementsByName('subjek')[0].value,
                };

                // prepare rows 
                let rows_selected = [...document.getElementsByName('row-list')].filter(item => item.checked).map(item =>
                    item.value);
                let row = {
                    'row_label': document.getElementsByName('row-label')[0].value,
                    'rows_selected': rows_selected
                };
                //prepare kolom 
                let columns_selected = [...document.getElementsByName('column-list')].filter(item => item.checked).map(item =>
                    item.value);
                let column = {
                    'kolom': columns_selected
                };

                // prepare periode 
                let periode = {
                    'tahun': document.getElementsByName('tahun')[0].value,
                    'periode': document.getElementsByName('periode')[0].value,
                }
                let token = '{{ csrf_token() }}'

                let data = {
                    table,
                    row,
                    column,
                    periode,
                    _token: '{{ csrf_token() }}',
                }

                // prepare sending data


                const xhr = new XMLHttpRequest();

                xhr.open('POST', '/tables/create', true);

                xhr.setRequestHeader('Content-Type', 'application/json');

                let jsonData = JSON.stringify(data);

                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        var response = JSON.parse(xhr.responseText);
                        console.log('Success:', response);
                    } else {
                        console.error('Error:', xhr.status, xhr.statusText);
                    }
                };
                xhr.onerror = function() {
                    console.error('Network Error');
                };
                xhr.send(jsonData);
            }

            function handleRowLabel(id_rowLabels) {
                // Create URL with parameters
                let url = '{{ route('rows.fetch') }}?id_rowLabels=' + id_rowLabels;

                // Create XMLHttpRequest
                const xhr = new XMLHttpRequest();
                xhr.open('GET', url, true);

                // Set up event handlers
                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        var response = JSON.parse(xhr.responseText);
                        console.log('Success:', response.data);
                        const tableBodyHtml = response.data.map((item,
                            key
                        ) => {
                            console.log({
                                item
                            })
                            return `<tr onclick="handleCheckRow(${key})">
                                <th scope="row">
                                    ${key + 1 }
                                </th>
                                <td>${item.tipe}</td>
                                <td>${item.label}</td>
                                <td> <input type="checkbox" aria-label="Checkbox for following text input"
                                        class="row-list-checkbox" id="${key }">
                                </td>
                            </tr>`
                        });
                        document.getElementById('row-list-body').innerHTML = tableBodyHtml.join('');

                    } else {
                        console.error('Error:', xhr.status, xhr.statusText);
                    }
                };
                xhr.onerror = function() {
                    console.error('Network Error');
                };

                // Send the request
                xhr.send();
            }



            document.getElementById('submit-create-table').addEventListener('click', handleSubmitCreateTable);
        </script>
    </x-slot>
</x-niu-layout>
