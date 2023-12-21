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

        <a href="/tables/create" style="background-color: green;color:white; padding:2px 4px">Buat Tabel Baru</a>
        <table id="tabel" class="table table-border">
            <thead id="header-tabel">
                <tr>
                    <td>#</td>
                    <td>Nama Tabel</td>
                    <td>Nama Row</td>
                    <td>Daftar Kolom</td>
                    <td>Status Pengisian</td>
                    <td>aksi</td>
                </tr>
            </thead>
            <tbody id="body-tabel">
                @foreach ($tables as $index => $tab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tab['tabels'][0]->label }}</td>
                        <td>{{ $tab['row_label'][0]->label }}</td>
                        <td>
                            @foreach ($tab['columns'] as $column)
                                <button class="button" style="background-color: aqua; padding:2px 4px">
                                    {{ $column->label }}
                                </button>
                            @endforeach
                        </td>
                        <td>...</td>
                        <td>
                            <a href="/tables/show/{{ $tab['tabels'][0]->id }}">Lihat</a>
                            <a href="/tables/edit/{{ $tab['tabels'][0]->id }}">Ubah</a>
                            <a href="/tables/remove/{{ $tab['tabels'][0]->id }}">Hapus</a>

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
        </script>
    </x-slot>
</x-niu-layout>
