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
        <script></script>
        <style type="text/css">
            .pagination>li {
                padding-top: 6px;
                padding-right: 12px;
                padding-bottom: 6px;
                padding-left: 12px;
            }

            .pagination>li.active {
                color: whitesmoke;
                background-color: #17a2b8;
            }

            .pagination>li:hover {
                cursor: pointer;
            }
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
        <table id="table-tabel" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
            <thead id="header-tabel">
                <tr scope="col" class="bg-info">
                    <th class="align-middle">#</th>
                    <th class="align-middle" style="width: 25%;">Nama Tabel</th>
                    <th class="align-middle" style="width: 20%;">Produsen Data</th>
                    <th class="align-middle">Nama Row</th>
                    <th class="align-middle">Daftar Kolom</th>
                    <th class="align-middle">Tahun</th>
                    <th class="align-middle">Status Pengisian</th>
                    <th class="align-middle">Cek / Ubah Isian</th>
                    <th class="align-middle">Hapus</th>
                </tr>
                <tr>
                    <td class="align-middle search-header">#</td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"></td>
                    <td class="align-middle search-header"></td>
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
                        <td>
                            {{-- <a href="/tables/show/{{ $tab['tabels'][0]->id }}">Lihat</a> --}}
                            <a
                                href="{{ route('tabel.show', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id_statustables'])]) }}">
                                <i class="fas fa-eye text-info"></i>
                            </a>
                        </td>

                        {{-- <td> --}}
                        {{-- <a
                                href="{{ route('tabel.destroy', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id'])]) }}"><i
                                    class="fas fa-trash text-info"></i></a> --}}
                        <td class="text-center">
                            <form id="delete-table-form" method="POST"
                                action="{{ route('tabel.destroy', ['id_status' => Illuminate\Support\Facades\Crypt::encrypt($tab['id_statustables'])]) }}">
                                @csrf
                                @method('DELETE')
                                <a href="#" onclick="handleDeleteTable();" class="delete-trash">
                                    <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                                </a>
                            </form>
                        </td>
                        {{-- <a href="/tables/remove/{{ $tab['tabels'][0]->id }}">Hapus</a> --}}
                        {{-- </td> --}}

                        </td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script src="{{ asset('js/tabel.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            const handleDeleteTable = function(encryptedId) {
                if (confirm('Are you sure you want to delete this subject?')) {
                    const form = document.getElementById('delete-table-form');
                    form.submit();
                }

            }
            document.addEventListener('DOMContentLoaded', function() {
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
