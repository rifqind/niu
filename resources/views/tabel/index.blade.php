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
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Index Page</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body bg-info">
                <h1 class="text-center">Daftar Tabel</h1>
            </div>
        </div>
        <hr>

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
        <table id="tabel" class="table table-bordered table-hover table-sorted">
            <thead id="header-tabel" class="bg-info">
                <tr scope="col">
                    <th class="align-middle">#</th>
                    <th class="align-middle">Nama Tabel</th>
                    <th class="align-middle">Nama Row</th>
                    <th class="align-middle">Daftar Kolom</th>
                    <th class="align-middle">Tahun</th>

                    <th class="align-middle">Status Pengisian</th>
                    <th class="align-middle">Cek / Ubah Isian</th>

                    <th class="align-middle">Hapus</th>
                </tr>
            </thead>
            <tbody id="body-tabel" class="bg-white">
                @foreach ($tables as $index => $tab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tab['label'] }}</td>
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
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            const handleDeleteTable = function(encryptedId) {
                if (confirm('Are you sure you want to delete this subject?')) {
                    const form = document.getElementById('delete-table-form');
                    form.submit();
                }

            }
            document.addEventListener('DOMContentLoaded', function() {
                console.log({{ Js::from($tables) }});
            })
        </script>
    </x-slot>
</x-niu-layout>
