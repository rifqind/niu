<x-niu-layout>
    <x-slot name="title">
        {{-- {{ __('Test') }} --}}
        {{ $tabel->judul_tabel }}
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script></script>
        <style type="text/css">
            .badge-status-satu {
                background-color: #A6ECE0;
                color: white;
            }

            .badge-status-dua {
                background-color: #086788;
                color: white;
            }

            .badge-status-tiga {
                background-color: #BFAE48;
                color: white;
            }

            .badge-status-empat {
                background-color: #8B1E3F;
                color: white;
            }

            .badge-status-lima {
                background-color: #2F4B26;
                color: white;
            }

            #komponen {
                table-layout: fixed;
                width: 400px;
                /* display: inline-block; */
                background: #f9fafc;
                border-right: 1px solid #e6eaf0;
                vertical-align: top;

                /* white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden; */
            }

            #komponen td:first-child {
                width: 10%;
            }

            #komponen thead,
            #rekon-view thead {
                /* min-height: 200px; */
                /* height: 200px; */
                vertical-align: middle;
                padding: .1rem;
                /* white-space: nowrap; */
                /* text-overflow: ellipsis; */
                overflow: auto;
            }

            #rekon-view tbody tr td {
                /* padding-right: 1rem; */
                min-width: 180px;
            }

            #komponen tbody tr td,
            #rekon-view tbody tr td {
                /* height: 20px; */
                height: 65px;
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
                /* padding: 0; */
                /* text-align: left; */
                /* display: flex; */
                /* align-content: center; */
                /* align-items: center; */
            }

            .table-data-wrapper {
                /* display: inline-block; */
                overflow-x: auto;
                vertical-align: top;
                width: calc(100% - 400px);
            }

            .table-data-wrapper table {
                border-left: 0;
            }

            .table-container {
                padding-left: 7.5px;
                padding-right: 7.5px;
            }
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Data Tabel</li>
    </x-slot>
    <!-- Alert container -->
    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert"
        style="display: none;">
        <strong>Sukses!</strong> Berhasil menyimpan Perubahan data !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container-fluid">

        <div class="card col-9">
            <div class="card-body">
                <h3 class="text-bold">{{ $tabel->judul_tabel }}, Tahun {{ $years }}
                    <h4 class="my-0">
                        <span class="badge" id="badges-status"> {{ $status_desc }}</span>
                    </h4>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="table-container mb-3">
                    <div class="row">
                        <div class="overflow-x-scroll">
                            <table class="table table-bordered" id="komponen">
                                <thead class="text-bold text-white bg-info">
                                    <tr>
                                        <td rowspan="3" class="align-middle" style="width: 45px;">#</td>
                                        <td rowspan="3" class="align-middle">{{ $row_label }}</td>
                                    </tr>
                                </thead>
                                <tbody style="background-color: white">
                                    @foreach ($rows as $key => $row)
                                        <tr>
                                            <td class="align-middle pl-2">{{ $key + 1 }}</td>
                                            <td class="align-middle pl-2">{{ $row->label }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="table-data-wrapper">
                            <table class="table table-bordered" id="rekon-view">
                                <thead class="text-bold text-white bg-info">
                                    {{-- <tr>
                                        @foreach ($tahuns as $tahun)
                                            <td colspan={{ sizeof($turtahuns) * sizeof($columns) }} class="text-center">
                                                {{ $tahun }}
                                            </td>
                                        @endforeach
                                    </tr> --}}
                                    <tr>
                                        @foreach ($tahuns as $tahun)
                                            @foreach ($turtahuns as $turtahun)
                                                <td colspan="{{ sizeof($columns) }}" class="text-center">
                                                    {{ $turtahun->label }}
                                                </td>
                                            @endforeach
                                        @endforeach
                                    </tr>
                                    {{-- kolom grup var  --}}
                                    {{-- kolom var  --}}
        
                                    <tr>
                                        @foreach ($turtahuns as $turtahun)
                                            @foreach ($tahuns as $tahun)
                                                @foreach ($columns as $index => $column)
                                                    <td class="text-center">{{ $column->label }}</td>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody style="background-color: white">
                                    @foreach ($rows as $key => $row)
                                        <tr>
                                            @foreach ($tahuns as $tahun)
                                                @foreach ($turtahuns as $turtahun)
                                                    @foreach ($columns as $column)
                                                        <td><input type="text" class="form-control input-field text-right"
                                                                data-id-content=""
                                                                data-wilayah-fullcode="{{ $row->wilayah_fullcode }}"
                                                                id={{ $tabel->id_tabel . '-' . (is_null($row->id) ? $row->wilayah_fullcode : $row->id) . '-' . $column->id . '-' . $tahun . '-' . $turtahun->id }}>
                                                        </td>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="justify-content-between row">
                        <div class="mr-auto">
                            <a href="{{ route('tabel.index') }}" class="btn btn-light border"><i
                                    class="fas fa-chevron-left"></i> Kembali</a>
                        </div>
                        {{-- <div class="ml-auto">
                        </div> --}}
                        <div class="ml-auto" id="user-need-prompt">
                            <a href="#" class="btn btn-primary save-send" id="save-table">Simpan <i
                                    class="fas fa-save"></i></a>
                            <a href="#" class="btn btn-success" id="send-modal" data-toggle="modal"
                                data-target="#sendModal">Kirim <i class="fas fa-paper-plane"></i></a>
                        </div>
                        <div class="ml-auto d-none" id="admin-need-prompt">
                        <a href="#" class="btn btn-danger reject-final" id="reject-table">Reject <i
                                    class="fas fa-ban"></i></a>
                            <a href="#" class="btn btn-success reject-final" id="final-table">Final <i
                                    class="fas fa-flag-checkered"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        CATATAN
                    </div>
                    <div class="card-body">
                        <textarea name="catatan" class="form-control" id="catatan" rows="5"
                        placeholder="Masukkan Catatan Jika Perlu" >{{ $catatans->catatan }}</textarea>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    @include('tabel.update-content-modal')

    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        {{-- <script src="{{ asset('js/public.js') }}"></script> --}}
        <script src="{{ asset('js/tabel.js') }}"></script>
        <script>
            const reject_final_key = new URL("{{ route('tabel.adminHandleData') }}")
            const token = "{{ csrf_token() }}"
            // get data from the form
            let status = {{ Js::from($status) }};
            const statusMapping = {
                1: "badge-status-satu",
                2: "badge-status-dua",
                3: "badge-status-tiga",
                4: "badge-status-empat",
                5: "badge-status-lima"
            };
            let roles = {{ Js::from($roles) }};
            document.addEventListener('DOMContentLoaded', function() {
                // document.getElementById('save-table').addEventListener('click', function(event) {
                // console.log(status);
                var rekonViewTheadHeight = $('#rekon-view thead').height();
                $('#komponen thead').height(rekonViewTheadHeight);
                // var rekonViewTbodyHeight = $('#rekon-view tbody tr td').height();
                // $('#komponen tbody tr td').height(rekonViewTbodyHeight);


                $("#badges-status").addClass(statusMapping[status]);
                if (status == "3" | status == "5") {
                    $(".input-field").prop('disabled', true);
                    $("#user-need-prompt").addClass("d-none");
                }
                if (roles == "admin") {
                    $(".input-field").prop('disabled', true);
                    $("#user-need-prompt").addClass("d-none");
                    if (status != "4") {
                        $("#admin-need-prompt").removeClass("d-none");
                    }
                    if (status == "5") {
                        $("#final-table").addClass("d-none");
                    }
                }

                $(".save-send").on("click", function(e) {
                    e.preventDefault();
                    $("#spinner-border").removeClass("d-none")
                    const button = this;
                    const decisions = this.id;
                    let catatans = document.getElementById("catatan").value;
                    // console.log(catatans);
                    var buttonInitialText = this.innerHTML;
                    setTimeout(() => {
                        $("#spinner-border").addClass("d-none")
                        handleSaveTable(button, buttonInitialText, decisions, catatans);
                    }, 1500);
                })

            })

            const handleSaveTable = function(element, buttonInitialText, decisions, catatans) {
                element.disabled = true;

                element.innerHTML = 'Loading...';

                let decisions_type = (decisions == "save-table") ? "save" : "send";
                // return 0
                let inputField = Array.from(document.querySelectorAll('.input-field'));


                let inputValues = inputField.map(element => {
                    let explodedId = element.id.split('-');
                    // console.log({explodedId})

                    return ({
                        // get the Id and value of the element 
                        'id': element.dataset.idContent,
                        'id_tabel': explodedId[0],
                        // 'id_row': explodedId[1].length == 10 ? 0 : explodedId[1],
                        // 'id_column': explodedId[2],
                        'tahun': explodedId[3],
                        // 'id_turtahun': explodedId[4],
                        // 'wilayah_fullcode': element.dataset.wilayah_fullcode,
                        'value': element.value

                        // assign it to the arrays

                    })
                });
                let token = '{{ csrf_token() }}'
                let data_json = ({
                    'data': inputValues,
                    'decisions': decisions_type,
                    'catatans' : catatans,
                    _token: token,
                });

                const xhr = new XMLHttpRequest();

                xhr.open('PUT', "{{ route('tabel.update_content', $encryptedId) }}", true);

                xhr.setRequestHeader('Content-Type', 'application/json');

                let jsonData = JSON.stringify(data_json);

                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        var response = JSON.parse(xhr.responseText);
                        // console.log('Success:', response);
                        showSuccessAlert();
                        setTimeout(hideSuccessAlert, 3000);
                        element.disabled = false;
                        element.innerHTML = buttonInitialText;
                        // console.log(response.status);
                        $("#badges-status").addClass(statusMapping[response.status]);
                        $("#badges-status").text(response.status_label);
                        if (decisions_type == "send") {
                            window.location.reload();
                        }

                    } else {
                        console.error('Error:', xhr.status, xhr.statusText);
                    }
                };
                xhr.onerror = function() {
                    console.error('Network Error');
                };
                xhr.send(jsonData);

            };


            // Show the success alert
            function showSuccessAlert() {
                var alert = document.getElementById('success-alert');
                alert.style.display = 'block';
            }

            // Hide the success alert after a certain time (e.g., 3 seconds)
            function hideSuccessAlert() {
                var alert = document.getElementById('success-alert');
                alert.style.display = 'none';
            }

            // Call the function to show the success alert as needed
            // For example, after saving or updating data

            // Call the function to hide the success alert after a certain time
            // For example, after 3 seconds

            const dataContents = {{ Js::from($datacontents) }};
            // console.log({dataContents});
            dataContents.map((content) => {
                // contentSplitted = content.label.split("-");
                tableId = content.id_tabel;
                rowId = content.id_row;
                columnId = content.id_column;
                tahun = content.tahun;
                turtahun = content.id_turtahun;
                wilayah = content.wilayah_fullcode;

                // rowLabel = data.rows.find((row) => {
                //     if (row.id == rowId) return row.label;
                // });
                let inputId = `${tableId}-${rowId==0?wilayah:rowId}-${columnId}-${tahun}-${turtahun}`;
                // debugn 
                // console.log({inputId,content});
                document.getElementById(inputId).value =
                    content.value;
                document.getElementById(inputId).dataset.idContent = content.id;
            });
        </script>
    </x-slot>
</x-niu-layout>
