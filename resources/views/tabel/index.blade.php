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
            <div class="card-body">
                <p>Daftar Tabel</p>
            </div>
        </div>
        <hr>

        <div class="row mb-2">
            <div class="col-auto ml-auto">

                <a href="{{ route('tabel.create') }}" class="btn btn-info"><i class="fas fa-plus"></i> Buat Tabel</a>
            </div>
        </div>
        <table id="tabel" class="table table-bordered table-hover">
            <thead id="header-tabel" class="bg-info">
                <tr scope="col">
                    <td class="align-middle">#</td>
                    <td class="align-middle">Nama Tabel</td>
                    <td class="align-middle">Nama Row</td>
                    <td class="align-middle">Daftar Kolom</td>
                    <td class="align-middle">Tahun</td>
                    <td class="align-middle">Status Pengisian</td>
                    <td class="align-middle">Cek / Ubah Isian</td>
                    <td class="align-middle">Ubah Struktur</td>
                    <td class="align-middle">Hapus</td>
                </tr>
            </thead>
            <tbody id="body-tabel" class="bg-white">
                @foreach ($tables as $index => $tab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tab['tabels'][0]->label }}</td>
                        <td>{{ $tab['row_label'][0]->label }}</td>
                        <td>
                            @foreach ($tab['columns'] as $column)
                                <span class="badge badge-info">
                                    {{ $column->label }}
                                </span>
                            @endforeach
                        </td>
                        <td><span class="badge badge-info">{{ $tab['tabels'][0]->tahun }}</span></td>
                        <td>{{ $tab['tabels'][0]->status }}</td>
                        <td>
                            {{-- <a href="/tables/show/{{ $tab['tabels'][0]->id }}">Lihat</a> --}}
                            <a
                                href="{{ route('tabel.show', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['tabels'][0]->id)]) }}">
                                <i class="fas fa-eye text-info"></i>
                            </a>
                        </td>
                        <td>
                            <a
                                href="{{ route('tabel.edit', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['tabels'][0]->id)]) }}"><i
                                    class="fas fa-cog text-info"></i></a>

                            {{-- <a href="/tables/edit/{{ $tab['tabels'][0]->id }}">Ubah</a> --}}
                        </td>
                        <td>
                            <a
                                href="{{ route('tabel.destroy', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['tabels'][0]->id)]) }}"><i
                                    class="fas fa-trash text-info"></i></a>

                            {{-- <a href="/tables/remove/{{ $tab['tabels'][0]->id }}">Hapus</a> --}}
                        </td>

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
            document.addEventListener('DOMContentLoaded', function() {
                console.log({{ Js::from($tables) }});
            })
        </script>
    </x-slot>
</x-niu-layout>
