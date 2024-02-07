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
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">
            Daftar Subjek
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row mb-2 justify-content-between">
            <div class="ml-2 h4">
                Daftar Subjek
            </div>
            <div class="ml-auto mr-2">
                <a href="{{ route('subject.create') }}" class="btn bg-info-fordone"><i class="fa-solid fa-plus"></i>
                    Tambah</a>
            </div>
        </div>
        <table class="table table-hover table-bordered table-sorted" id="tabel-subject">
            <thead>
                <tr class="bg-info-fordone">
                    <th class="first-column">No.</th>
                    <th class="text-center">Subjek</th>
                    {{-- <th class="text-center">Wilayah Kerja</th> --}}
                    <th class="text-center">Edit</th>
                    <th class="text-center">Hapus</th>
                </tr>
                <tr>
                    <td class="first-column tabel-width-10"></td>
                    <td class="text-center search-header tabel-width-70"><input type="text"
                            class="search-input form-control"></td>
                    {{-- <td class="text-center">Wilayah Kerja</td> --}}
                    <td class="text-center"></td>
                    <td class="text-center"></td>
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
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#"
                                onclick="handleDeleteSubject('{{ Illuminate\Support\Facades\Crypt::encrypt($item->id) }}');"
                                class="delete-trash">
                                <i class="fa-solid fa-trash-can icon-trash-color"></i>
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
    <x-slot name="script">
        <script nonce="{{ Vite::cspNonce() }}">
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
