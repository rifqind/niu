<x-niu-layout>
    <x-slot name="header">
        {{ __('Pengguna') }}
    </x-slot>
    <x-slot name="title">
        Kelola Pengguna
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

            #tabel-user th {
                cursor: pointer;
            }

            #tabel-user .th-sort-asc::after {
                content: "\25b4";
            }

            #tabel-user .th-sort-desc::after {
                content: "\25be";
            }

            #tabel-user .th-sort-asc::after,
            #tabel-user .th-sort-desc::after {
                margin-left: 5px;
            }

            #tabel-user .th-sort-asc,
            #tabel-user .th-sort-desc {
                background: rgba(0, 0, 0, 0.1);
            }
        </style>
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Daftar Pengguna
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="ml-1 h4 mb-3">
                Daftar Pengguna
            </div>
            <div class="mr-1 justify-content-between row">
                <div class="ml-auto mr-1">
                    <a href="{{ route('users.create') }}" class="btn btn-info">Tambah</a>
                </div>
                <div class="ml-auto mr-1">
                    <form action="{{ route('users.search') }}" method="GET" id="formSearch">
                        <input id="cariUsers" type="text" class="form-control" style="min-width: 25vw;"
                            placeholder="Cari Pengguna" name="search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover" id="tabel-user">
        <thead>
            <tr>
                <th class="first-column">No.</th>
                <th class="text-center">Username</th>
                <th class="text-center" style="width: 15%">Nama</th>
                <th class="text-center" style="width: 30%">Nama Instansi</th>
                <th class="text-center">Wilayah Kerja</th>
                <th class="text-center">No. HP</th>
                <th class="text-center">Peran</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->dinas->nama }}</td>
                    <td>{{ $user->dinas->regions->nama }}</td>
                    <td class="text-center">{{ $user->noHp }}</td>
                    <td class="text-center" id="roles">{{ $user->role }}</td>
                    <td class="text-center">
                        <a href="{{ route('users.reset', ['id' => $user->id]) }}" class="update-pen mx-1"
                            {{-- data-toggle="modal" data-target="#updateModal" --}}>
                            <i class="fa-solid fa-lock" title="Reset Password" style="color: #1032e0;"></i>
                        </a>
                        {{-- @if ($user->role == 'produsen') --}}
                        <a href="" class="mx-1 role-update"
                            data-users="{{ json_encode([
                                'id' => $user->id,
                            ]) }}"><i
                                class="role-icon fa-solid" title="Ubah Role" style="color: #1032e0;"></i></a>
                        {{-- @else
                            <a href=""  class="mx-1 role-update" data-users="{{ json_encode([
                                'id' => $user->id
                            ]) }}"><i class="fa-solid fa-user-tie"
                                    title="Ubah Role" style="color: #1032e0;"></i></a>
                        @endif --}}
                    </td>
                    <td class="text-center">
                        <a href="" class="delete-trash"
                            data-users="{{ json_encode([
                                'id' => $user->id,
                            ]) }}"
                            data-toggle="modal" data-target="#deleteModal">
                            <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
        @include('user.modal')
    </table>
    <x-slot name="script">
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            const tokens = '{{ csrf_token() }}'
            const reset_URL = new URL("{{ route('users.reset') }}")
            const delete_URL = new URL("{{ route('users.delete') }}")
            const roleChange_URL = new URL("{{ route('users.roleChange') }}")
        </script>
    </x-slot>
</x-niu-layout>
