<x-niu-layout>
    <x-slot name="title">
        index
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
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Daftar Subjek
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="ml-1 h4 mb-3">
                Daftar Subjek
            </div>
            <div class="mr-1 justify-content-between row">
                <div class="ml-auto mr-1">
                    {{-- tobedestined --}}
                    <a href="{{ route('subject.create') }}" class="btn btn-info">Tambah</a>
                </div>
                {{-- <div class="ml-auto mr-1">
                    <form action="{{ route('dinas.search') }}" method="GET">
                        <input id="cariDinas" type="text" class="form-control" style="min-width: 25vw;"
                            placeholder="Cari Dinas" name="search">
                    </form>
                </div> --}}
            </div>
        </div>
        <table class="table table-hover" id="tabel-dinas">
            <thead>
                <tr>
                    <td class="first-column">No.</td>
                    <td class="text-center">Subjek</td>
                    {{-- <td class="text-center">Wilayah Kerja</td> --}}
                    <td class="text-center">Edit</td>
                    <td class="text-center">Hapus</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->label }}</td>
                        {{-- <td class="text-center">{{ $din->regions->nama }}</td> --}}
                        <td class="text-center">
                            <a href="{{ route('subject.edit', ['id' => Illuminate\Support\Facades\Crypt::encrypt($item->id)]) }}"
                                {{-- data-subjek="{{ json_encode([
                                    'id' => $item->id,
                                    'nama' => $item->label,
                                    // 'id_regions' => $din->id_regions,
                                ]) }}"
                                data-toggle="modal" data-target="#updateModal"> --}}>
                                <i class="fa-solid fa-pen" style="color: #1032e0;"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#"
                                onclick="handleDeleteSubject('{{ Illuminate\Support\Facades\Crypt::encrypt($item->id) }}');"
                                class="delete-trash">
                                <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <div class="spinner-border d-none" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    {{-- @include('dinas.modal') --}}
    <x-slot name="script">
        <script>
            const tokens = '{{ csrf_token() }}'
            const update_URL = new URL("{{ route('dinas.update') }}")
            const delete_URL = new URL("{{ route('dinas.delete') }}")
            const handleDeleteSubject = function(encryptedId) {
                if (confirm('Are you sure you want to delete this subject?')) {
                    fetch("{{ route('subject.destroy', ['id' => ':id']) }}".replace(':id', encryptedId), {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                '_method': 'DELETE'
                            })
                        })
                        .then(response => {
                            if (response.ok) {
                                return response.json();
                            }
                            throw new Error('Network response was not ok.');
                        })
                        .then(data => {
                            // Handle the response data, if needed
                            console.log(data);
                            // Redirect to a new location
                            window.location.reload();
                        })
                        .catch(error => {
                            console.error('There was a problem with the fetch operation:', error);
                        });
                }

            }
        </script>
    </x-slot>
</x-niu-layout>
