<x-niu-layout>
    <x-slot name="title">
        Index
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
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Index Page</li>
    </x-slot>
    <div class="container-fluid">
        {{-- <hr> --}}
        <div class="row mb-2">
            @if (session('success'))
                <div class="alert alert-success temporary-message">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger temporary-message">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="row d-flex justify-content-end align-items-center">
            <div class="mr-auto h4 ml-2">
                Daftar Tabel
            </div>
            <div class="ml-auto mr-2">
                <a href="#" class="btn bg-success-fordone mb-2" title="Download" data-target="#downloadModal"
                    data-toggle="modal"><i class="fa-solid mr-1 fa-circle-down"></i> Download</a>
            </div>
        </div>
        <table id="table-tabel" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
            <thead id="header-tabel">
                <tr scope="col" class="bg-info-fordone">
                    <th class="align-middle">#</th>
                    <th class="align-middle" style="width: 25%;">Nama Tabel</th>
                    <th class="align-middle" style="width: 20%;">Produsen Data</th>
                    <th class="align-middle">Nama Row</th>
                    <th class="align-middle">Daftar Kolom</th>
                    <th class="align-middle">Tahun</th>
                    <th class="align-middle">Status Pengisian</th>
                    <th class="align-middle deleted">Cek / Ubah Isian</th>
                    @if ($role != 'produsen')
                        <th class="align-middle deleted">Hapus</th>
                    @endif
                </tr>
                <tr>
                    <td class="align-middle search-header">#</td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header deleted"></td>
                    @if ($role != 'produsen')
                        <td class="align-middle search-header deleted"></td>
                    @endif
                </tr>
            </thead>
            <tbody id="body-tabel" class="bg-white">
                @foreach ($tables as $index => $tab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tab['label'] }}</td>
                        <td>{{ $tab['nama_dinas'] }}</td>
                        <td>{{ $tab['row_label'] }}</td>
                        <td>
                            @foreach ($tab['columns'] as $column)
                                <span class="badge badge-info">
                                    {{ $column->label }}
                                </span>
                            @endforeach
                        </td>
                        <td><span class="badge badge-info">{{ $tab['tahun'] }}</span></td>

                        <td>{{ $tab['status'] }}</td>
                        <td class="text-center deleted">
                            <a
                                href="{{ route('tabel.show', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id_statustables'])]) }}">
                                <i class="fas fa-eye text-info"></i>
                            </a>
                        </td>
                        @if ($role != 'produsen')
                            <td class="text-center deleted">
                                <a href="#" class="delete-trash"
                                    data-statustabel="{{ json_encode(['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id_statustables'])]) }}"
                                    data-toggle="modal" data-target="#deleteStatusModal">
                                    <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                                </a>
                            </td>
                        @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        @include('tabel.delete-master-modal')
        <div class="row d-flex justify-content-end align-items-center">
            <div class="mb-3 mx-3 ml-auto">Menampilkan <span id="showPage"></span> dari <span id="showTotal"></span></div>
            <div class="form-group"> <!--		Show Numbers Of Rows 		-->
                <select class  ="form-control" name="state" id="maxRows">
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


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script src="{{ asset('js/tabel.js') }}"></script>
        <script src="{{ asset('js/download.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // const handleDeleteTable = function(encryptedId) {
            //     if (confirm('Are you sure you want to delete this subject?')) {
            //         const form = document.getElementById('delete-table-form');
            //         form.submit();
            //     }

            // }
            // limitPagging();
            document.addEventListener('DOMContentLoaded', function() {
                getPagination('#table-tabel',10);
                $(".delete-trash").on("click", function(e) {
                    let data = $(this).data("statustabel");
                    // console.log(data.id);
                    $("#idHidden").val(data.id);
                    // console.log($("#idHidden").val());
                });
                $("#deleteStatusTabels").on("click", function(e) {
                    let id = $("#idHidden").val();
                    console.log(id);
                    $.ajax({
                        type: "POST",
                        url: "{{ route('tabel.statusDestroy') }}",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            location.reload();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(errorThrown);
                        }
                    })
                })
                // console.log({{ Js::from($tables) }});

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
