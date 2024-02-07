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
            <div class="justify-content-between row">
                <div class="ml-auto mr-2">
                    <a href="#" class="btn bg-success-fordone" title="Download" data-target="#downloadModal"
                        data-toggle="modal"><i class="fa-solid mr-1 fa-circle-down"></i></a>
                </div>
                <div class="mr-2">
                    <a href="{{ route('users.create') }}" class="btn bg-info-fordone"><i class="fa-solid fa-plus"></i>
                        Tambah Pengguna Baru</a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-sorted table-hover table-bordered table-search" id="tabel-user">
        <thead>
            <tr class="bg-info-fordone">
                <th class="first-column">No.</th>
                <th class="text-center">Username</th>
                <th class="text-center" style="width: 15%">Nama</th>
                <th class="text-center" style="width: 20%">Nama Instansi</th>
                <th class="text-center" style="width: 20%;">Wilayah Kerja</th>
                <th class="text-center">No. HP</th>
                <th class="text-center">Peran</th>
                <th class="text-center deleted" style="width: 5%;">Edit</th>
                <th class="text-center deleted">Hapus</th>
            </tr>
            <tr class="">
                <td class="search-header">#</td>
                <td class="search-header"><input type="text" class="search-input form-control"></td>
                <td class="search-header"><input type="text" class="search-input form-control"></td>
                <td class="search-header"><input type="text" class="search-input form-control"></td>
                <td class="search-header"><input type="text" class="search-input form-control"></td>
                <td class="search-header"><input type="text" class="search-input form-control"></td>
                <td class="search-header"><input type="text" class="search-input form-control"></td>
                <td class="search-header deleted"></td>
                <td class="search-header deleted"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="">
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->dinas->nama }}</td>
                    <td>{{ $user->dinas->wilayah->label }}</td>
                    <td class="text-center">{{ preg_replace('/^0/', '+62', $user->noHp) }}</td>
                    <td class="text-center" id="roles">{{ $user->role }}</td>
                    <td class="text-center deleted">
                        <a href="{{ route('users.reset', ['id' => Illuminate\Support\Facades\Crypt::encrypt($user->id)]) }}"
                            class="update-pen mx-1" {{-- data-toggle="modal" data-target="#updateModal" --}}>
                            <i class="fa-solid fa-lock" title="Reset Password" style="color: #1032e0;"></i>
                        </a>
                        <a href="" class="mx-1 role-update"
                            data-users="{{ json_encode([
                                'id' => $user->id,
                            ]) }}"><i
                                class="role-icon fa-solid" title="Ubah Role" style="color: #1032e0;"></i></a>
                        <a href="{{ route('users.edit', ['id' => Illuminate\Support\Facades\Crypt::encrypt($user->id)]) }}"
                            class="edit-pen mx-1" {{-- data-toggle="modal" data-target="#updateModal" --}}>
                            <i class="fa-solid fa-pencil" title="Edit Pengguna" style="color: #1032e0;"></i>
                        </a>
                    </td>
                    <td class="text-center deleted">
                        <a href="" class="delete-trash"
                            data-users="{{ json_encode([
                                'id' => Illuminate\Support\Facades\Crypt::encrypt($user->id),
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
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            const tokens = '{{ csrf_token() }}'
            const reset_URL = new URL("{{ route('users.reset') }}")
            const delete_URL = new URL("{{ route('users.delete') }}")
            const roleChange_URL = new URL("{{ route('users.roleChange') }}")
        </script>
    </x-slot>
</x-niu-layout>
