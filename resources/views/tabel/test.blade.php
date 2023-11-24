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
        <li class="breadcrumb-item active">Test Page</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>You're My Special</p>
            </div>
        </div>
        <select class="form-control select2bs4" id="select-tabel" name="tabel">
            {{-- <select class="form-control select2bs4" id="quarter" name="quarter"> --}}
            <option value="" selected>-- Pilih --</option>
            @foreach ($tabel as $tab)
                <option value="{{ $tab->id }}">{{ $tab->label }}</option>
            @endforeach
            </option>
        </select>
        <hr>
        Judul Tabel : <div id="judul-tabel"></div>
        <table id="tabel">
            <thead id="header-tabel">

            </thead>
            <tbody id="body-tabel"></tbody>
            <tfoot></tfoot>
        </table>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ url('') }}/plugins/select2/js/select2.full.min.js"></script>
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                })
            });
        </script>
    </x-slot>
</x-niu-layout>
