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
            <div class="card-body bg-info text-center">
                <h2>Buat Tabel</h2>
            </div>
        </div>

        <hr>
        <form action="" id="table">
            <b>Detail Tabel</b>
            <div class="form-group">
                <label for="dinas">Dinas Tabel</label>
                <select name="dinas" class="form-control select2-selection select2bs4">
                    <option value="">-- Pilih Dinas --</option>
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

                <select name="subjek" class="form-control select2 select2-selection select2bs4">
                    <option value="">-- Pilih Subjek --</option>
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
                <select name="row-label" class="form-control  select2-selection select2bs4" id="row-label-select">
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
                <select name="column-group" class="form-control select2-selection select2bs4" id="column-group-select">
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
                <select name="tahun" id="tahun" class="form-control select2-selection select2bs4"></select>
            </div>

            <div class="form-group">
                <label for="turtahun-group">Jenis Turunan Tahun</label>
                <select name="turtahun-group" class="form-control select2-selection select2bs4"
                    id="turtahun-group-select">
                    <option value="">-- Pilih Turunan Tahun / Periode --</option>
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

            <button type="button" id="submit-create-table" class="btn btn-info">Buat Tabel</button>
        </form>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->

        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // set initial values
            const form = document.getElementById('table');


            // handle select all
            function handleSelectAll(isSelected, elementSelector) {
                var selectedItems = $(elementSelector).each(function(index, item) {
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
                let rows_selected = [...document.getElementsByClassName('row-list-checkbox')].filter(item => item.checked).map(
                    item =>
                    item.value);
                let rows = {
                    'row_label': document.getElementsByName('row-label')[0].value,
                    'rows_selected': rows_selected
                };
                //prepare kolom 
                let columns_selected = [...document.getElementsByClassName('column-list-checkbox')].filter(item => item.checked)
                    .map(
                        item =>
                        item.value);
                let columns = {
                    'columns_label': document.getElementsByName('column-group')[0].value,
                    'columns': columns_selected
                };

                // prepare periode 
                let periode = {
                    'tahun': document.getElementsByName('tahun')[0].value,
                    'periode': document.getElementsByName('turtahun-group')[0].value,
                }
                let token = '{{ csrf_token() }}'

                let data = {
                    table,
                    rows,
                    columns,
                    periode,
                    _token: '{{ csrf_token() }}',
                }
                console.log({
                    data
                })
                // return 0;

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

            function handleLabel(url, nameLabel, bodyHtmlId, ) {
                // Create URL with parameters
                // let url = '{{ route('rows.fetch') }}?id_rowLabels=' + id_rowLabels;

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
                            return `<tr onclick="handleCheckRow('${nameLabel}-${key}')">
                                <th scope="row" class="text-right">
                                    ${key + 1 }
                                </th>
                                <td>${item.tipe}</td>
                                <td>${item.label}</td>
                                <td> <input type="checkbox" aria-label="Checkbox for following text input"
                                        class="${nameLabel}-list-checkbox" id="${nameLabel}-${key }" value="${item.id}">
                                </td>
                            </tr>`
                        });
                        document.getElementById(bodyHtmlId).innerHTML = tableBodyHtml.join('');

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




            document.addEventListener('DOMContentLoaded', function() {

                document.getElementById('submit-create-table').addEventListener('click', function(event) {
                    event.preventDefault();
                    handleSubmitCreateTable();

                });

                // $('.select2bs4').select2();

                $('#row-label-select').on('select2:select', () => {
                    let idRowLabel = document.getElementById('row-label-select').value;
                    let rowLabelUrl = `{{ route('rows.fetch') }}?id_rowLabels=${idRowLabel}`;

                    handleLabel(rowLabelUrl, 'row', 'row-list-body')
                });
                $('#column-group-select').on('select2:select', () => {
                    let idRowLabel = document.getElementById('column-group-select').value;
                    let rowLabelUrl = `{{ route('column.fetch') }}?id_columnGroups=${idRowLabel}`;

                    handleLabel(rowLabelUrl, 'column', 'column-list-body');
                });
                $('#turtahun-group-select').on('select2:select', () => {
                    let idRowLabel = document.getElementById('turtahun-group-select').value;
                    let rowLabelUrl = `{{ route('turtahungroups.fetch') }}?id_turtahunGroup=${idRowLabel}`;

                    handleLabel(rowLabelUrl, 'turtahun', 'turtahun-list-body');

                });

                $('#select-toggle-column').on('click', (event) => {
                    let isSelected = event.target.checked;
                    handleSelectAll(isSelected, '.column-list-checkbox');
                });
                $('#select-toggle-row').on('click', (event) => {
                    let isSelected = event.target.checked;
                    handleSelectAll(isSelected, '.row-list-checkbox');
                });

                const currentYear = new Date().getFullYear();

                // Populate the select dropdown with years
                const yearSelect = document.getElementById('tahun');

                for (let year = currentYear; year >= currentYear - 10; year--) {
                    const option = document.createElement('option');
                    option.value = year;
                    option.text = year;
                    yearSelect.add(option);
                }

                document.getElementsByName('nomor')[0].value = "000/1";
                document.getElementsByName('judul')[0].value = "Judul Tabel";
                document.getElementsByName('unit')[0].value = "Unit asw";
                // $('.select2-selection').trigger('change');

            });
        </script>
    </x-slot>
</x-niu-layout>
