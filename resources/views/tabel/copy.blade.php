<x-niu-layout>
    <x-slot name="title">
        {{ __('Salin Tabel') }}
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">

        <style type="text/css">
            .select2-container--default .select2-selection--single {
                height: 38px;
                line-height: 24px;
                padding-left: 6px;

                /* You can adjust this value as needed */
            }
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Salin Tabel</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body bg-info-fordone text-center">
                <h2>{{ $table->label }}</h2>
            </div>
        </div>

        <hr>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('tabel.storeCopy', ['id' => $id]) }}">
            @csrf
            <b>Pilih Tahun yang akan Dibuat</b>
            <div class="form-group">

                <label for="tahun"></label>
                <select name="tahun" id="tahun" class="form-control select2-selection select2bs4"></select>
            </div>


            <div class="form-group">

                <button type="submit" id="submit-create-table" class="btn bg-info-fordone">Salin Tabel</button>
            </div>
        </form>

    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->

        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // set initial values
            const form = document.getElementById('table');
            document.addEventListener('DOMContentLoaded', function() {
                const currentYear = new Date().getFullYear();

                const yearSelect = document.getElementById('tahun');

                for (let year = currentYear; year >= currentYear - 10; year--) {
                    const option = document.createElement('option');
                    option.value = year;
                    option.text = year;
                    yearSelect.add(option);
                }
            });
        </script>
    </x-slot>
</x-niu-layout>
