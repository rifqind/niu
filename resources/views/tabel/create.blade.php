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
        <form action="" id="create-form">
            <b>Detail Tabel</b>
            <div class="form-group">
                <label for="dinas">Dinas Tabel</label>
                <select name="dinas" id="dinas" class="form-control select2-selection select2bs4" required>
                    <option value="">-- Pilih Dinas --</option>
                    @foreach ($daftar_dinas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nomor">Nomor Tabel</label>
                <input type="text" class="form-control" name="nomor" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul Tabel</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="form-group">
                <label for="subjek">Subjek Tabel</label>

                <select name="subjek" id="subjek" class="form-control select2 select2-selection select2bs4"
                    required>
                    <option value="">-- Pilih Subjek --</option>
                    @foreach ($subjects as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unit">Unit Tabel</label>
                <input type="text" class="form-control" name="unit" required>
            </div>
            <br>
            <hr>
            <b>Detail Rows</b>
            <br>
            <div class="form-group">
                <label for="row-label">Row Label</label>
                <select name="row-label" class="form-control  select2-selection select2bs4" id="row-label-select"
                    required>
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
                            <th scope="col"><input type="checkbox" id="select-toggle-row" name="select-toggle-row">
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
                <select name="column-group" class="form-control select2-selection select2bs4" id="column-group-select"
                    required>
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
                <select name="tahun" id="tahun" class="form-control select2-selection select2bs4"
                    required></select>
            </div>

            <div class="form-group">
                <label for="turtahun-group">Jenis Turunan Tahun</label>
                <select name="turtahun-group" class="form-control select2-selection select2bs4"
                    id="turtahun-group-select" required>
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


            <button type="button" id="check-create-table" class="btn btn-info">Buat Tabel</button>
        </form>

    </div>
    @include('tabel.create-modal');

    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ asset('js/tabel-create.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const createForm = document.getElementById("create-form");
                document
                    .getElementById("check-create-table")
                    .addEventListener("click", function(event) {
                        event.preventDefault();

                        let formValidity = createForm.checkValidity();
                        if (formValidity) {
                            let table = {
                                nomor: document.getElementsByName("nomor")[0].value,
                                label: document.getElementsByName("judul")[0].value,
                                unit: document.getElementsByName("unit")[0].value,
                                id_dinas: document.getElementsByName("dinas")[0].value,
                                id_subjek: document.getElementsByName("subjek")[0].value,
                            };

                            // prepare rows
                            let rows_selected = [
                                    ...document.getElementsByClassName("row-list-checkbox"),
                                ]
                                .filter((item) => item.checked)
                                .map((item) => item.value);
                            let rows = {
                                row_label: document.getElementsByName("row-label")[0].value,
                                rows_selected: rows_selected,
                            };
                            //prepare kolom
                            let columns_selected = [
                                    ...document.getElementsByClassName("column-list-checkbox"),
                                ]
                                .filter((item) => item.checked)
                                .map((item) => item.value);
                            let column_keyValuePair = [
                                    ...document.getElementsByClassName("column-list-checkbox"),
                                ]
                                .filter((item) => item.checked)
                                .map((item) => ({
                                    'label': item.getAttribute('data-label'),
                                    'key': item.value
                                }));

                            let columns = {
                                columns_label: document.getElementsByName("column-group")[0].value,
                                columns: columns_selected,
                            };

                            // prepare periode
                            let periode = {
                                tahun: document.getElementsByName("tahun")[0].value,
                                periode: document.getElementsByName("turtahun-group")[0].value,
                            };
                            const tdElements = document.querySelectorAll('#turtahun-list-body tr td:nth-child(3)');

                            // Use the map method to create an array from the inner HTML content of the selected td elements
                            const periodeArray = Array.from(tdElements).map(function(td) {
                                return td.innerHTML; // Return the inner HTML content of each td element
                            });
                            const tdElementRows = document.querySelectorAll('#row-list-body tr td:nth-child(3)');

                            // Use the map method to create an array from the inner HTML content of the selected td elements
                            const rowsArray = Array.from(tdElementRows).map(function(td) {
                                return td.innerHTML; // Return the inner HTML content of each td element
                            });





                            // create table preview
                            let row_label_ = document.querySelector(
                                '#row-list-body > tr:nth-child(1) > td:nth-child(2)').innerHTML;
                            const theadHTML = `
    <tr>
        <th rowspan="2" class="text-center align-middle">#</th>
        <th rowspan="2" class="text-center align-middle">${row_label_}</th>
        ${periodeArray.map(item => `<th colspan="${column_keyValuePair.length}" class="text-center align-middle">${item}</td>`).join('')}
        </tr>
        <tr>
            ${periodeArray.map(item1 => column_keyValuePair.map(item2 => `<th style="width:100px">${item2.label}</th>`).join('')).join('')}
    </tr>
`;
                            const tbodyHTML = rowsArray.map((rowItem, index) => {
                                return `<tr>
        <td>${index + 1}</td>
        <td>${rowItem}</td>
        ${periodeArray.map(periodItem => column_keyValuePair.map(columnItem => "<td></td>").join('')).join('')}
    </tr>`;
                            }).join('');
                            document.querySelector('#preview-table thead').innerHTML = theadHTML;
                            document.querySelector('#preview-table tbody').innerHTML = tbodyHTML;

                            // prepare table

                            window.formCreateTable = {
                                table,
                                rows,
                                columns,
                                periode,
                                _token: token_,
                            };


                            $("#confirmationModal").modal("show");
                        } else {
                            createForm.reportValidity();
                        }

                    });

                // $('.select2bs4').select2();

                $("#row-label-select").on("select2:select", () => {
                    let idRowLabel = document.getElementById("row-label-select").value;
                    let rowLabelUrl = `{{ route('rows.fetch') }}?id_rowLabels=${idRowLabel}`;

                    handleLabel(rowLabelUrl, "row", "row-list-body");
                });
                $("#column-group-select").on("select2:select", () => {
                    let idRowLabel = document.getElementById("column-group-select").value;
                    let rowLabelUrl = `{{ route('column.fetch') }}?id_columnGroups=${idRowLabel}`;

                    handleLabel(rowLabelUrl, "column", "column-list-body");
                });
                $("#turtahun-group-select").on("select2:select", () => {
                    let idRowLabel = document.getElementById("turtahun-group-select").value;
                    let rowLabelUrl = `{{ route('turtahungroups.fetch') }}?id_turtahunGroup=${idRowLabel}`;

                    handleLabel(rowLabelUrl, "turtahun", "turtahun-list-body");
                });

                $("#select-toggle-column").on("click", (event) => {
                    let isSelected = event.target.checked;
                    handleSelectAll(isSelected, ".column-list-checkbox");
                });
                $("#select-toggle-row").on("click", (event) => {

                    let isSelected = event.target.checked;
                    handleSelectAll(isSelected, ".row-list-checkbox");
                });

                const currentYear = new Date().getFullYear();

                // Populate the select dropdown with years
                const yearSelect = document.getElementById("tahun");

                for (let year = currentYear; year >= currentYear - 10; year--) {
                    const option = document.createElement("option");
                    option.value = year;
                    option.text = year;
                    yearSelect.add(option);
                }

                document.getElementsByName("nomor")[0].value = "000/1";
                document.getElementsByName("judul")[0]
                    .value = "Judul Tabel";
                document.getElementsByName("unit")[0].value = "Unit asw";
                // $('.select2-selection').trigger('change');
                $("#dinas").val("2").trigger("change");
                $("#subjek").val("4").trigger("change");
            });
        </script>
    </x-slot>
</x-niu-layout>
