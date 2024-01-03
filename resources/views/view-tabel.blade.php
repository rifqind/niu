<x-front-layout>
    <x-slot name="title">
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
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
            }

            #komponen td:first-child {
                width: 4vh;
            }

            #komponen thead,
            #rekon-view thead {
                /* min-height: 200px; */
                /* height: 200px; */
                vertical-align: middle;
                padding: .1rem;
                /* white-space: nowrap; */
                text-overflow: ellipsis;
                overflow: hidden;
            }

            #rekon-view tbody tr td {
                /* padding-right: 1rem; */
                min-width: 180px;
            }

            #komponen tbody tr td,
            #rekon-view tbody tr td{
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
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <div class="container-fluid" style="padding-left: 2vw; padding-right: 2vw;">
        <div class="table-container">
            <div class="row mt-5">
                <div class="overflow-x-scroll">
                    <table class="table table-bordered" id="komponen">
                        <thead class="text-bold text-white" style="background-color: #40476d">
                            <tr>
                                <td rowspan="3" class="align-middle">#</td>
                                <td rowspan="3" class="align-middle">{{ $row_label[0]->label }}</td>
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
                        <thead class="text-bold text-white" style="background-color: #40476d">
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
                                                <td class="text-center align-middle"
                                                    id={{ $tabel->id_tabel . '-' . $row->id . '-' . $column->id . '-' . $tahun . '-' . $turtahun->id }}>
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
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ url('') }}/plugins/select2/js/select2.full.min.js"></script>
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // get data from the form

            const dataContents = {{ Js::from($datacontents) }};
            dataContents.map((content) => {
                contentSplitted = content.label.split("-");
                tableId = contentSplitted[0];
                rowId = contentSplitted[1];
                columnId = contentSplitted[2];
                tahun = contentSplitted[3];
                turtahun = contentSplitted[4];

                // rowLabel = data.rows.find((row) => {
                //     if (row.id == rowId) return row.label;
                // });
                let inputId = `${tableId}-${rowId}-${columnId}-${tahun}-${turtahun}`;
                // debugn 
                console.log({
                    inputId,
                    content
                });
                document.getElementById(inputId).innerHTML = content.value;
                // document.getElementById(inputId).dataset.idContent = content.id;
            });
            $(document).ready(function() {
                var rekonViewTheadHeight = $('#rekon-view thead').height();
                $('#komponen thead').height(rekonViewTheadHeight);
            })
        </script>
    </x-slot>
</x-front-layout>
