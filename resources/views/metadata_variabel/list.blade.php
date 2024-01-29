<x-niu-layout>
    <x-slot name="title">
        Index
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
        <li class="breadcrumb-item active">Daftar Metadata Variabel</li>
    </x-slot>
    <div class="container-fluid">
        {{-- <hr> --}}
        <div class="row">
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
        <div class="row mb-2 justify-content-between">
            <div class="col-9">
                <h4>Tabel : {{ $judul[0] }}</h4>
            </div>
            <div class="col-3 text-right">
                <div class="mr-1">
                    <a class="btn bg-info-fordone" data-toggle="modal" data-target="#createModal"><i class="fa-solid fa-plus"></i>
                        Tambah Metadata Variabel Baru</a>
                </div>
            </div>
        </div>
        @include('metadata_variabel.list-tabel')
        @include('metadata_variabel.create-modal')
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        {{-- <script src="{{ asset('js/tabel.js') }}"></script> --}}
        <script>
            let satuans = {{ Js::from($satuan[0]) }}
            const id = {{ Js::from($id) }}
            $('#satuan').val(satuans);
            $('#id_tabel').val(id);
            document.addEventListener('DOMContentLoaded', function() {
                $("form").on('submit', function(e) {
                    e.preventDefault();
                    let data = $(this).serialize();
                    $.ajax({
                        url: $(this).attr('action'),
                        type: "POST",
                        data: data,
                        success: function(data) {
                            console.log(data);
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                })

            })
        </script>
    </x-slot>
</x-niu-layout>
