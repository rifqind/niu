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
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Daftar Tabel</li>
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
        <div class="row d-flex justify-content-between align-items-center">
            <h4 class="col">Daftar Pengisian Metadata per Tabel</h4>
            <div class="mb-3 mx-3 ml-auto">Menampilkan <span id="showPage"></span> dari <span id="showTotal"></span></div>
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
        <table id="table-metadata-variabel"
            class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
            <thead id="header-metadata-variabel">
                <tr scope="col" class="bg-info-fordone text-center">
                    <th class="align-middle">#</th>
                    <th class="align-middle tabel-width-25">Nama Tabel</th>
                    <th class="align-middle tabel-width-20">Produsen Data</th>
                    <th class="align-middle">Status Metadata Variabel</th>
                    <th class="align-middle">Cek / Ubah Isian</th>
                </tr>
                <tr>
                    <td class="align-middle search-header">#</td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"></td>
                </tr>
            </thead>
            <tbody id="body-tabel" class="bg-white">
                @foreach ($tabels as $index => $tab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tab['label'] }}</td>
                        <td>{{ $tab['nama_dinas'] }}</td>
                        @if ($tab['status_metavar'] == '0')
                            <td>Belum di-input</td>
                        @else
                            <td>{{ $tab['status_desc'] }}</td>
                        @endif
                        <td class="text-center">
                            <a href="{{ route('metavar.lists', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id'])]) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script nonce="{{ Vite::cspNonce() }}">
            document.addEventListener('DOMContentLoaded', function() {
                getPagination('#table-metadata-variabel', 10);

            })
        </script>
    </x-slot>
</x-niu-layout>
