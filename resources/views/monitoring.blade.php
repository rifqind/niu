<x-niu-layout>
    <x-slot name="title">
        Monitoring
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <script></script>
        <style type="text/css">
        </style>
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Monitoring Pengisian Data</li>
    </x-slot>
    <div class="container-fluid">
        <div class="row px-2">
            <div class="mr-auto h4">
                Monitoring Pengisian Tabel
            </div>
            <div class="ml-auto">
                <select name="year" class="form-control" id="year-select" onchange="searchYear()">
                    <option value="all">Pilih Semua</option>
                    @foreach ($years as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="ml-2">
                <a href="#" class="btn bg-success-fordone mb-2" title="Download" data-target="#downloadModal"
                    data-toggle="modal"><i class="fa-solid mr-1 fa-circle-down"></i> Download</a>
            </div>
        </div>
        <div id="data">
            @include('monitoring-tabel')
        </div>
        <div class="row d-flex justify-content-end align-items-center">
            <div class="mb-3 mx-3">Menampilkan <span id="showPage"></span> dari <span id="showTotal"></span></div>
            <div class="form-group"> <!--		Show Numbers Of Rows 		-->
                <select class  ="form-control" name="state" id="maxRows">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
            </div>
            <div class="pagination-container">
                <nav>
                    <ul class="pagination">
                        <li data-page="prev">
                            <span>
                                < <span class="sr-only">(current)
                            </span></span>
                        </li>
                        <!--	Here the JS Function Will Add the Rows -->
                        <li data-page="next" id="prev">
                            <span> > <span class="sr-only">(current)</span></span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="downloadModalTitle">Download</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="title-file">Nama File</label>
                    <input type="text" name="title-file" id="title-file" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button id="downloadMonitoring" type="submit" class="btn btn-sm bg-success-fordone"
                        onclick="GoDownload('table-monitoring')">Download</button>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/download.js') }}"></script>
        <script>
            const getMonitoringURL = new URL("{{ route('home.getMonitoring') }}");
            document.addEventListener('DOMContentLoaded', function() {
                getPagination('#table-monitoring', 10);

                //getPagination('.table-class');
                //getPagination('table');

                /*					PAGINATION 
                - on change max rows select options fade out all rows gt option value mx = 5
                - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
                - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
                - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
                - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
                */
            })
        </script>
    </x-slot>
</x-niu-layout>
