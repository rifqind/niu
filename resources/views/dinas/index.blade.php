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
            #tabel-dinas thead {
                font-weight: bold;
            }
            #tabel-dinas th {
                cursor: pointer;
            }

            #tabel-dinas .th-sort-asc::after {
                content: "\25b4";
            }

            #tabel-dinas .th-sort-desc::after {
                content: "\25be";
            }

            #tabel-dinas .th-sort-asc::after,
            #tabel-dinas .th-sort-desc::after {
                margin-left: 5px;
            }

            #tabel-dinas .th-sort-asc,
            #tabel-dinas .th-sort-desc {
                background: rgba(0, 0, 0, 0.1);
            }
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
                Daftar Dinas
            </div>
            <div class="mr-1 justify-content-between row">
                <div class="ml-auto mr-1">
                    <a href="{{ route('dinas.create') }}" class="btn btn-info">Tambah</a>
                </div>
                <div class="ml-auto mr-1">
                    <form action="{{ route('dinas.search') }}" method="GET">
                        <input id="cariDinas" type="text" class="form-control" style="min-width: 25vw;" placeholder="Cari Dinas"
                            name="search">
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-sorted table-hover" id="tabel-dinas">
            <thead>
                <tr>
                    <th class="first-column">No.</th>
                    <th class="text-center" style="width: 50%;">Dinas</th>
                    <th class="text-center">Wilayah Kerja</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dinas as $din)
                    <tr>
                        <td>{{ $din->number }}</td>
                        <td>{{ $din->nama }}</td>
                        <td class="text-center">{{ $din->wilayah->label }}</td>
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
