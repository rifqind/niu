<x-front-layout>
    <x-slot name="title">
        View Tabel
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script></script>
        <style type="text/css">
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

            #komponen th:first-child {
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
                height: 40px;
                padding: 0;
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
    </x-slot>

    <div class="container" style="">
        <div class="card mt-5">
            <div class="card-body bg-info-fordone">
                <h1 class="text-center" id="judulTabel">{{ $tabels->label }}, Tahun {{ $tahun }}</h1>
            </div>
        </div>
        <div class="table-container">
            <div class="row">
                <div class="overflow-x-scroll">
                    <table class="table table-bordered" id="komponen">
                        <thead class="text-bold bg-info-fordone">
                            <tr>
                                <th rowspan="3" class="align-middle">#</th>
                                <th rowspan="3" class="align-middle">{{ $row_label }}</th>
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
                        <thead class="text-bold bg-info-fordone">
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
                                        <th colspan="{{ sizeof($columns) }}" class="text-center">
                                            {{ $turtahun->label }}
                                        </th>
                                    @endforeach
                                @endforeach
                            </tr>
                            {{-- kolom grup var  --}}
                            {{-- kolom var  --}}

                            <tr>
                                @foreach ($turtahuns as $turtahun)
                                    @foreach ($tahuns as $tahun)
                                        @foreach ($columns as $index => $column)
                                            <th class="text-center">{{ $column->label }}</th>
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
                                                <td class="text-center align-middle" data-id-content=""
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
                <h5 class="mb-0 text-bold">Metadata</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p>Subjek</p>
                    </div>
                    <div class="col text-bold">
                        {{ $tabels->subjects->label }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Produsen Data</p>
                    </div>
                    <div class="col text-bold">
                        {{ $tabels->dinas->nama }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Wilayah Kerja</p>
                    </div>
                    <div class="col text-bold">
                        {{ $tabels->dinas->wilayah->label }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Satuan Data</p>
                    </div>
                    <div class="col text-bold">
                        {{ $tabels->unit }}
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-between row mb-2 d-none" id="showTabel" style="padding-right: 7.5px">
            <div class="ml-auto mr-2" id="">
                <a href="#" class="btn bg-info-fordone" id="showMetavar"><i
                        class="fa-solid mr-1 fa-book-bookmark"></i>
                    Metadata Variabel</a>
            </div>
            <div class="" id="">
                <a href="#" class="btn bg-primary-fordone" id="downloadExcel"><i
                        class="fa-solid mr-1 fa-circle-down"></i>
                    Download Tabel</a>
            </div>
        </div>
        <div class="justify-content-between row mb-2 d-none" id="showMetadataVariabel" style="padding-right: 7.5px">
            <div class="ml-auto mr-2" id="">
                <a href="#" class="btn bg-info-fordone" id="" onclick="window.location.reload()"><i
                        class="fa-solid mr-1 fa-book-bookmark"></i>
                    Tabel</a>
            </div>
            <div class="" id="">
                <a href="#" class="btn bg-primary-fordone" id="downloadMetadataVariabel"><i
                        class="fa-solid mr-1 fa-circle-down"></i>
                    Download Metadata Variabel</a>
            </div>
        </div>
    </div>


    <x-slot name="script">
        <!-- Additional JS resources text-bold -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script src="{{ asset('js/download.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // get data from the form
            const id = {{ Js::from($tabels->id) }}
            const dataContents = {{ Js::from($datacontents) }};
            const judul_tabel = document.getElementById("judulTabel").innerHTML;
            // console.log({
            //     dataContents
            // });
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
                document.getElementById(inputId).innerHTML = content.value;
                // document.getElementById(inputId).dataset.idContent = content.id;
            });
            document.getElementById("downloadExcel").addEventListener("click", function(e) {
                e.preventDefault();
                let datas = getReady();
                downloadExcel(datas, judul_tabel);
            })
            // $(document).ready(function() {
            document.addEventListener('DOMContentLoaded', function() {
                var rekonViewTheadHeight = $('#rekon-view thead').height();
                $('#komponen thead').height(rekonViewTheadHeight);
                $("#showTabel").removeClass("d-none");
                $("#showMetavar").on("click", function(e) {
                    e.preventDefault();
                    console.log("click");
                    $.ajax({
                        url: "{{ route('home.getMetaVariabel') }}",
                        type: "GET",
                        data: {
                            id_tabel: id,
                        },
                        beforeSend: function() {
                            $("#spinner-border").removeClass("d-none");
                        },
                        complete: function() {
                            setTimeout(function() {
                                $("#spinner-border").addClass("d-none");
                            }, 320);
                        },
                        success: function(data) {
                            if (typeof data === 'object') {
                                alert('Belum ada metadata variabel')
                            } else {
                                $("#showTabel").addClass("d-none");
                                $("#showMetadataVariabel").removeClass("d-none");
                                $(".table-container").html(data);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(errorThrown);
                        }
                    })
                })
                $("#downloadMetadataVariabel").on("click", function(e) {
                    e.preventDefault();
                    let datas = getReadyOnGeneral('table-metadata-variabel');
                    judul_metadata_variabel = "Metadata Variabel_" + judul_tabel;
                    downloadExcel(datas, judul_metadata_variabel);
                    window.location.reload();
                })
            })
        </script>
    </x-slot>
</x-front-layout>
