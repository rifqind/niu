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
            <div class="mr-auto px-2">
                <h4>Tabel : {{ $judul[0] }} :
                    <span>{{ sizeof($status_desc) > 0 ? $status_desc[0] : 'Kosong' }}</span>
                </h4>
            </div>
            <div class="ml-auto">
                <a href="#" class="btn bg-success-fordone" title="Download" data-target="#downloadModal"
                    data-toggle="modal"><i class="fa-solid mr-1 fa-circle-down"></i></a>
            </div>
            <div class="px-2">
                <a class="btn bg-info-fordone" data-toggle="modal" data-target="#masterModal"><i
                        class="fa-solid fa-plus"></i>
                    Tambah Metadata Variabel Baru</a>
            </div>
        </div>
        <div id="list-tabels">
            @include('metadata_variabel.list-tabel')
        </div>
        @include('metadata_variabel.create-modal')
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ asset('js/metadata-variabel.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const admin_URL = new URL("{{ route('metavar.adminHandleMetavar') }}")
            const index_URL = new URL("{{ route('metavar.index') }}")
            const show_URL = new URL("{{ route('metavar.show') }}")
            const destroy_URL = new URL("{{ route('metavar.destroy') }}")
            const master_URL = "{{ route('metavar.fetchMaster') }}";
            const token = "{{ csrf_token() }}"
            let satuans = {{ Js::from($satuan[0]) }}
            const id = {{ Js::from($id) }}
            const roles = {{ Js::from($this_role) }}
            let status_metavars = {{ Js::from($status_metavars) }}
            if (status_metavars.length == 0) {
                status_metavars = 0
            } else {
                status_metavars = status_metavars[0]
            }
            document.addEventListener("DOMContentLoaded", function(e) {
                toggleButton()
                $("#masterModal").on("show.bs.modal", function(e) {
                    $(".row-select").select2({
                        width: '100%',
                        theme: 'bootstrap4'
                    })
                })
                $("#open-modal-create").on("click", function(e) {
                    $("#masterModal").modal("hide");
                    let id = $("#master-select").val();
                    $.ajax({
                        url: master_URL,
                        type: "GET",
                        data: {
                            id: id,
                        },
                        success: function(data) {
                            console.log(data);
                            if (data != "not") {
                                $.each(data, function(key, value) {
                                    var element = $("#" + key);
                                    if (element.length > 0) {
                                        element.val(value);
                                    }
                                })
                            }
                        },
                        error: function(data) {
                            alert(data.responseJSON.errors);
                        }
                    })
                    setTimeout(() => {
                        $("#createModal").modal("show");
                    }, 320);
                })
            })
        </script>
    </x-slot>
</x-niu-layout>
