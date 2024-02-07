<x-front-layout>
    <x-slot name="title">
        View Tabel
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/view-tabel-homepage.css') }}">
    </x-slot>

    <div class="container">
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
                        <tbody>
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
        <div class="justify-content-between row mb-2 d-none mr-1" id="showTabel">
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
        <div class="justify-content-between row mb-2 d-none mr-1" id="showMetadataVariabel">
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
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js" nonce="{{ Vite::cspNonce() }}"></script>
        <script src="{{ asset('js/download.js') }}"></script>
        <script src="{{ asset('js/view-tabel-homepage.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const url_key = new URL("{{ route('tabel.getDatacontent') }}");
            const meta_key = new URL("{{ route('home.getMetaVariabel') }}");
            const id = {{ Js::from($tabels->id) }}
            const dataContents = {{ Js::from($datacontents) }};
        </script>
    </x-slot>
</x-front-layout>
