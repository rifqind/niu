<x-niu-layout>
    <x-slot name="title">
        Daftar Dinas
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <style type="text/css">
        </style>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Daftar Dinas
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="ml-1 h4 mb-3">
                Daftar Produsen Data
            </div>
            <div class="mr-1 justify-content-between row">
                <div class="ml-auto mr-1">
                    <a href="{{ route('dinas.create') }}" class="btn bg-info-fordone"><i class="fa-solid fa-plus"></i> Tambah Produsen Data Baru</a>
                </div>
                {{-- <div class="ml-auto mr-1">
                    <form action="{{ route('dinas.search') }}" method="GET">
                        <input id="cariDinas" type="text" class="form-control" style="min-width: 25vw;" placeholder="Cari Dinas"
                            name="search">
                    </form>
                </div> --}}
            </div>
        </div>
        <table class="table table-sorted table-hover table-bordered table-search" id="tabel-dinas">
            <thead>
                <tr class="bg-info-fordone">
                    <th class="first-column">No.</th>
                    <th class="text-center" style="width: 50%;">Nama Produsen Data</th>
                    <th class="text-center">Wilayah Kerja</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Hapus</th>
                </tr>
                <tr class="">
                    <td class="search-header"></td>
                    <td class="search-header" style="width: 50%;"><input type="text" class="search-input form-control"></td>
                    <td class="search-header"><input type="text" class="search-input form-control"></td>
                    <td class="search-header"></td>
                    <td class="search-header"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($dinas as $din)
                    <tr>
                        <td>{{ $din->number }}</td>
                        <td>{{ $din->nama }}</td>
                        <td class="">{{ $din->wilayah->label }}</td>
                        <td class="text-center">
                            <a href="" class="update-pen"
                            data-dinas="{{ $din->id . ";" . $din->nama . ";" . $din->wilayah_fullcode}}"
                                data-toggle="modal" data-target="#updateModal">
                                <i class="fa-solid fa-pen" style="color: #1032e0;"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="" class="delete-trash"
                                data-dinas="{{ json_encode([
                                    'id' => $din->id,
                                ]) }}"
                                data-toggle="modal" data-target="#deleteModal">
                                <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    @include('dinas.modal')
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
    <x-slot name="script">
        <script src="{{ asset('js/dinas.js') }}"></script>
        <script>
            const tokens = '{{ csrf_token() }}'
            const update_URL = new URL("{{ route('dinas.update') }}")
            const delete_URL = new URL("{{ route('dinas.delete') }}")
            const this_URL = window.location.href
        </script>
    </x-slot>
</x-niu-layout>
