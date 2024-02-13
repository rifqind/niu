<x-niu-layout>
    <x-slot name="title">
        {{-- {{ __('Test') }} --}}
        {{ $tabel->judul_tabel }}
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/show-tabel.css') }}">
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Data Tabel</li>
    </x-slot>
    <!-- Alert container -->
    <div id="success-alert" class="alert alert-success alert-dismissible fade show d-none" role="alert">
        <strong>Sukses!</strong> Berhasil menyimpan Perubahan data !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="text-bold">{{ $tabel->judul_tabel }}, Tahun {{ $years }}
                    <h4 class="my-0">
                        <span class="badge" id="badges-status"> {{ $status_desc }}</span>
                    </h4>
                </h3>
            </div>
        </div>
        <div class="table-container mb-3">
            <div class="row">
                <div class="overflow-x-scroll">
                    <table class="table table-bordered" id="komponen">
                        <thead class="text-bold text-white bg-info-fordone">
                            <tr>
                                <td rowspan="3" class="align-middle table-width-45px">#</td>
                                <td rowspan="3" class="align-middle">{{ $row_label }}</td>
                            </tr>
                        </thead>
                        <tbody>
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
                        <thead class="text-bold text-white bg-info-fordone">
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
                        <tbody>
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
        <div class="card">
            <div class="card-header">
                CATATAN
            </div>
            <div class="card-body">
                <textarea name="catatan" class="form-control" id="catatan" rows="5" placeholder="Masukkan Catatan Jika Perlu">{{ $catatans ? $catatans->catatan : '' }}</textarea>
            </div>
        </div>
        <div class="container">
            <div class="justify-content-between row">
                <div class="mr-auto">
                    <a href="{{ route('tabel.index') }}" class="btn btn-light border"><i
                            class="fas fa-chevron-left"></i> Kembali</a>
                </div>
                <div class="ml-auto d-none" id="user-need-prompt">
                    <button type="button" class="btn bg-info-fordone" data-toggle="modal" data-target="#panduanModal">Panduan <i class="fa-brands fa-stack-overflow"></i></button>
                    <a href="#" class="btn bg-primary-fordone save-send" id="save-table">Simpan <i
                            class="fas fa-save"></i></a>
                    <a href="#" class="btn bg-success-fordone" id="send-modal" data-toggle="modal"
                        data-target="#sendModal">Kirim <i class="fas fa-paper-plane"></i></a>
                </div>
                <div class="ml-auto d-none" id="admin-need-prompt">
                    <a href="#" class="btn btn-danger reject-final" id="reject-table">Reject <i
                            class="fas fa-ban"></i></a>
                    <a href="#" class="btn bg-success-fordone reject-final" id="final-table">Final <i
                            class="fas fa-flag-checkered"></i></a>
                </div>
            </div>
        </div>
    </div>
    @include('tabel.update-content-modal')
    @include('tabel.panduan')

    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js" nonce="{{ Vite::cspNonce() }}"></script>
        {{-- <script src="{{ asset('js/public.js') }}"></script> --}}
        <script src="{{ asset('js/show-tabel.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const reject_final_key = new URL("{{ route('tabel.adminHandleData') }}")
            const just_route = "{{ route('tabel.update_content', $encryptedId) }}";
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
                if (status < 3 | status == "4") {
                    $("#user-need-prompt").removeClass("d-none");
                }
                if (status == "3" | status == "5") {
                    $(".input-field").prop('disabled', true);
                    $("#user-need-prompt").addClass("d-none");
                    $("#catatan").prop('disabled', true);
                }
                if (roles == "admin" | roles == "kominfo") {
                    $(".input-field").prop('disabled', true);
                    $("#catatan").prop('disabled', true);
                    $("#user-need-prompt").addClass("d-none");

                    if (status == "3") {
                        $("#admin-need-prompt").removeClass("d-none");
                    }
                    if (status == "5") {
                        $("#admin-need-prompt").removeClass("d-none");
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
