<x-niu-layout>
    <x-slot name="title">
        Create Tabel
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tabel-create.css') }}">
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Create Table</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body bg-info-fordone text-center">
                <h2>Buat Tabel Baru</h2>
            </div>
        </div>

        <hr>
        <form action="" id="create-form">
            @csrf
            {{-- <b>Detail Tabel</b> --}}
            <div class="form-group">
                <label for="dinas">Produsen Data</label>
                <select name="dinas" id="dinas" class="form-control select2-selection select2bs4" required>
                    <option value="" disabled selected hidden>-- Pilih Dinas --</option>
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
                    <option value="" disabled selected hidden>-- Pilih Subjek --</option>
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
                <label for="tipe-row-label">Tipe Row</label>
                <select name="tipe-row-label" class="form-control" id="tipe-row-label-select" required>
                    <option value="" disabled selected hidden>-- Pilih Tipe Row --</option>
                    <option value="1">Wilayah</option>
                    <option value="2">Non - Wilayah</option>
                </select>
            </div>

            {{-- IF tipe row = wilayah --}}
            <div id="row-wilayah" class="d-none">
                <div class="form-group">
                    <label for="tingkat-label">Tingkatan Wilayah</label>
                    <select name="tingkat-label" class="form-control" id="tingkat-label-select">
                        <option value="" disabled selected hidden>-- Pilih Tingkatan --</option>
                        <option value="1">Kabupaten</option>
                        <option value="2">Kecamatan</option>
                        <option value="3">Desa</option>
                    </select>
                </div>

                <div class="form-group" id="kabupaten-group">
                    <label for="kab-label">Kabupaten</label>
                    <select name="kab-label" class="form-control select2-selection select2 row-select"
                        id="kab-label-select">
                        <option value="" disabled selected hidden>-- Pilih Kabupaten --</option>
                        @foreach ($kabupatens as $kabupaten)
                            <option value="{{ $kabupaten->wilayah_fullcode }}">{{ $kabupaten->label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" id="kecamatan-group">
                    <label for="kec-label">Kecamatan</label>
                    <select name="kec-label" class="form-control select2-selection select2 row-select"
                        id="kec-label-select">
                        {{-- <option value="" disabled selected hidden>-- Pilih Row Label --</option> --}}

                    </select>
                </div>
                <div class="form-group" id="desa-group">
                    <label for="desa-label">Desa</label>
                    <select name="desa-label" class="form-control  select2-selection select2 row-select"
                        id="desa-label-select">
                        {{-- <option value="" disabled selected hidden>-- Pilih Row Label --</option> --}}

                    </select>
                </div>
            </div>

            {{-- IF tipe row = non wilayah --}}
            <div id="non-wilayah">

                <div class="form-group">
                    <label for="row-label">Row Label</label>
                    <select name="row-label" class="form-control  select2-selection select2bs4" id="row-label-select">
                        <option value="" disabled selected hidden>-- Pilih Row Label --</option>
                        @foreach ($row_labels as $item)
                            <option value="{{ $item->id }}">{{ $item->label }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <b>Row List</b>
            <hr>
            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead class="bg-info-fordone">
                        <tr>
                            <th scope="col">
                                No.
                            </th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Label</th>
                            <th scope="col"><input type="checkbox" id="select-toggle-row"
                                    name="select-toggle-row">
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
                <select name="column-group" class="form-control select2-selection select2bs4"
                    id="column-group-select" required>
                    <option value="" disabled selected hidden>-- Pilih Grup Kolom --</option>
                    @foreach ($kolom_grup as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>

            <b>Daftar Kolom</b>
            <hr>
            <table class="table table-hover table-bordered bg-white">
                <thead class="bg-info-fordone">
                    <tr>
                        <th scope="col">
                            No.
                        </th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Label</th>
                        <th scope="col"><input type="checkbox" id="select-toggle-column"
                                name="select-toggle-column">
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
                    <option value="" disabled selected hidden>-- Pilih Turunan Tahun / Periode --</option>
                    @foreach ($turtahun_groups as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                </select>
            </div>

            <div class="">
                <b>Daftar Turunan Tahun</b>
                <hr>
                <table class="table table-hover table-bordered bg-white">
                    <thead class="bg-info-fordone">
                        <tr>
                            <th scope="col">
                                No.
                            </th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Label</th>
                            {{-- <th scope="col"><input type="checkbox" id="select-toggle-turtahun"
                                    name="select-toggle-turtahun">
                                <label for="select-toggle-turtahun"> Pilih Semua</label>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody id="turtahun-list-body" class="bg-white">



                    </tbody>
                </table>
            </div>


            <button type="button" id="check-create-table" class="btn bg-info-fordone">Buat Tabel</button>
        </form>

    </div>
    @include('tabel.create-modal');

    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ asset('js/tabel-create.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const tabelIndex = new URL("{{ route('tabel.index') }}");
            document.addEventListener("DOMContentLoaded", function() {
                let tipe_row = document.getElementById('tipe-row-label-select');
                tipe_row.addEventListener("change", function(event) {

                    if (event.target.value == 1) {
                        $("#row-wilayah").removeClass("d-none");
                        $("#row-wilayah").addClass("d-block");
                        $("#non-wilayah").addClass("d-none");
                        $("#non-wilayah").removeClass("d-block");
                        $(".row-select").select2({
                            'width' : '100%',
                        })
                    } else {
                        $("#row-wilayah").removeClass("d-block");
                        $("#row-wilayah").addClass("d-none");
                        $("#non-wilayah").removeClass("d-none");
                        $("#non-wilayah").addClass("d-block");
                    }
                });

                let tingkat_wilayah = document.getElementById('tingkat-label-select');
                tingkat_wilayah.addEventListener("change", function(event) {

                    if (event.target.value == 1) {
                        // kabupaten
                        $("#kabupaten-group").removeClass("d-block");
                        $("#kecamatan-group").removeClass("d-block");
                        $("#desa-group").removeClass("d-block");
                        $("#kabupaten-group").addClass("d-none");
                        $("#kecamatan-group").addClass("d-none");
                        $("#desa-group").addClass("d-none");
                        // fetch kabupaten
                        let kabupaten = {{ Js::from($kabupatens) }};
                        let provinsi = {
                            'wilayah_fullcode': '7100000000',
                            'label': 'PROVINSI SULAWESI UTARA',
                        }
                        kabupaten.push(provinsi);
                        let nameLabel = 'row';
                        let kabupaten_html = kabupaten.map((item, key, array) => {
                            item.tipe = (key === array.length - 1) ? 'PROVINSI' : 'KABUPATEN';
                            return `<tr onclick="handleCheckRow('${nameLabel}-${key}')">
                                <th scope="row" class="text-right">
                                    ${key + 1}
                                </th>
                                <td>${item.tipe}</td>
                                <td>${item.label}</td>
                                <td> <input type="checkbox" aria-label="Checkbox for following text input" data-label="${item.label}"
                                        class="${nameLabel}-list-checkbox" id="${nameLabel}-${key}" value="${item.wilayah_fullcode}">
                                </td>
                            </tr>`;
                        }).join('');
                        // console.log(kabupaten_html)
                        let row_list = document.getElementById('row-list-body');
                        row_list.innerHTML = kabupaten_html;


                    } else if (event.target.value == 2) {
                        $("#kabupaten-group").removeClass("d-none");
                        $("#kecamatan-group").removeClass("d-block");
                        $("#desa-group").removeClass("d-block");
                        $("#kabupaten-group").addClass("d-block");
                        $("#kecamatan-group").addClass("d-none");
                        $("#desa-group").addClass("d-none");

                        // fetch 

                    } else {
                        
                        $("#kabupaten-group").removeClass("d-none");
                        $("#kecamatan-group").removeClass("d-none");
                        $("#desa-group").removeClass("d-block");
                        $("#kabupaten-group").addClass("d-block");
                        $("#kecamatan-group").addClass("d-block");
                        $("#desa-group").addClass("d-none");
                    }
                });

                $("#kab-label-select").on("select2:select", (event) => {
                    let parents_kabupaten = $("#kab-label-select option:selected").text();
                    let kabupaten_kode = event.target.value.substring(2, 4);
                    let tingkat_wilayah = document.getElementById('tingkat-label-select').value;
                    let url = `{{ route('/') }}/master/wilayah/kecamatan/${kabupaten_kode}`;
                    if (tingkat_wilayah == 3) {
                        handleFetchKecamatan(url);
                    }
                    if (tingkat_wilayah == 2) {

                        let kecamatanHtmlId = "kec-label-select";
                        const xhr = new XMLHttpRequest();
                        xhr.open("GET", url, true);

                        // Set up event handlers
                        xhr.onload = function() {
                            if (xhr.status >= 200 && xhr.status < 300) {
                                var response = JSON.parse(xhr.responseText);
                                let nameLabel = 'row';
                                let parents = {
                                    'wilayah_fullcode': event.target.value,
                                    'label': parents_kabupaten
                                };
                                response.data.push(parents);
                                let kecamatan_html = response.data.map((item, key, array) => {
                                    item.tipe = (key === array.length - 1) ? 'KABUPATEN' :
                                        'KECAMATAN';
                                    return `<tr onclick="handleCheckRow('${nameLabel}-${key}')">
                                        <th scope="row" class="text-right">
                                            ${key + 1}
                                        </th>
                                        <td>${item.tipe}</td>
                                        <td>${item.label}</td>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input" data-label="${
                                            item.label
                                        }"
                                                class="${nameLabel}-list-checkbox" id="${nameLabel}-${key}" value="${
                                        item.wilayah_fullcode
                                    }">
                                        </td>
                                    </tr>`;
                                }).join('');
                                let row_list = document.getElementById('row-list-body');
                                row_list.innerHTML = kecamatan_html;

                            } else {
                                console.error("Error:", xhr.status, xhr.statusText);
                            }
                        };
                        xhr.onerror = function() {
                            console.error("Network Error");
                        };

                        // Send the request
                        xhr.send();

                    }

                    return 0;
                });

                $("#kec-label-select").on("select2:select", (event) => {
                    let kabupaten_kode = event.target.value.substring(2, 4);
                    let kecamatan_kode = event.target.value.substring(4, 7);
                    let parents_kecamatan = $("#kec-label-select option:selected").text();
                    let url = `{{ route('/') }}/master/wilayah/desa/${kabupaten_kode}/${kecamatan_kode}`;

                    let desaHtmlId = "desa-label-select";
                    const xhr = new XMLHttpRequest();
                    xhr.open("GET", url, true);

                    // Set up event handlers
                    xhr.onload = function() {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            var response = JSON.parse(xhr.responseText);
                            let nameLabel = 'row';
                            let parents = {
                                'wilayah_fullcode': event.target.value,
                                'label': parents_kecamatan,
                            };
                            response.data.push(parents);
                            let desa_html = response.data.map((item, key, array) => {
                                item.tipe = (key === array.length - 1) ? 'KECAMATAN' : 'DESA';
                                return `<tr onclick="handleCheckRow('${nameLabel}-${key}')">
                                        <th scope="row" class="text-right">
                                            ${key + 1}
                                        </th>
                                        <td>${item.tipe}</td>
                                        <td>${item.label}</td>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input" data-label="${
                                            item.label
                                        }"
                                                class="${nameLabel}-list-checkbox" id="${nameLabel}-${key}" value="${
                                        item.wilayah_fullcode
                                    }">
                                        </td>
                                    </tr>`;
                            }).join('');
                            let row_list = document.getElementById('row-list-body');
                            row_list.innerHTML = desa_html;

                        } else {
                            console.error("Error:", xhr.status, xhr.statusText);
                        }
                    };
                    xhr.onerror = function() {
                        console.error("Network Error");
                    };

                    // Send the request
                    xhr.send();


                    return 0;
                });
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
                                tipe_row: document.getElementById('tipe-row-label-select').value,
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
                            // const tdElementRows = document.querySelectorAll('#row-list-body tr td:nth-child(3)');
                            const tdElementRows =  Array.from(document.querySelectorAll('#row-list-body tr td:nth-child(4) input:checked'))
                                                    .map(function(checkedInput) {
                                                        return checkedInput.parentElement.parentElement.querySelector('td:nth-child(3)');
                                                    });
                            
                            // Use the map method to create an array from the inner HTML content of the selected td elements
                            const rowsArray = Array.from(tdElementRows).map(function(td) {
                                return td.innerHTML; // Return the inner HTML content of each td element
                            });
                            console.log(rowsArray);





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
                                        ${periodeArray.map(item1 => column_keyValuePair.map(item2 => `<th class="th-something">${item2.label}</th>`).join('')).join('')}
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
                                _token: "{{ csrf_token() }}",
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

                // document.getElementsByName("nomor")[0].value = "000/1";
                // document.getElementsByName("judul")[0].value = "Judul Tabel";
                // document.getElementsByName("unit")[0].value = "Unit asw";
                // $('.select2-selection').trigger('change');
                // $("#dinas").val("2").trigger("change");
                // $("#subjek").val("4").trigger("change");
            });
        </script>
    </x-slot>
</x-niu-layout>
