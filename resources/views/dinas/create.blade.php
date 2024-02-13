<x-niu-layout>
    <x-slot name="title">
        create
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
            Tambah Dinas
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            PRODUSEN DATA
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "DinasForm" method="post" class="form-horizontal mb-3">
                    @csrf
                    <label for="nama">Nama Produsen Data</label>
                    <input class="form-control mb-3" name="nama" id="nama" placeholder="Isi Nama Produsen Data">
                    <div class="mb-3">
                        <label for="tingkat-label">Tingkatan Wilayah</label>
                        <select name="tingkat" class="form-control select2bs4" id="tingkat-label-select">
                            <option value="" disabled selected hidden>-- Pilih Tingkatan --</option>
                            <option value="0">PROVINSI</option>
                            <option value="1">KABUPATEN</option>
                            <option value="2">KECAMATAN</option>
                            <option value="3">DESA</option>
                        </select>
                    </div>
                    <div class="mb-3 d-none" id="kabupaten-group">
                        <label for="kab-label">Kabupaten</label>
                        <select name="kab" class="form-control row-select" id="kab-label-select">
                            <option value="" disabled selected hidden>-- Pilih Kabupaten --</option>
                            @foreach ($kabs as $kab)
                                <option value="{{ $kab->wilayah_fullcode }}">{{ $kab->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 d-none" id="kecamatan-group">
                        <label for="kec-label">Kecamatan</label>
                        <select name="kec" class="form-control row-select" id="kec-label-select">
                        </select>
                    </div>
                    <div class="mb-3 d-none" id="desa-group">
                        <label for="desa-label">Desa</label>
                        <select name="desa" class="form-control row-select" id="desa-label-select">
                        </select>
                    </div>
                </form>
                <div class="ml-auto">
                    <button id="dinas-save" class="btn bg-success-fordone">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/dinas.js') }}"></script>
        <script src="{{ asset('js/tabel-create.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const tokens = '{{ csrf_token() }}'
            const save_URL = new URL("{{ route('dinas.store') }}")
            const this_URL = "{{ url('dinas/index') }}"
            document.addEventListener("DOMContentLoaded", function() {
                $("#tingkat-label-select").on("select2:select", function(e) {
                    if (e.target.value == "1") {
                        $("#kabupaten-group").removeClass("d-none");
                        $("#kecamatan-group").addClass("d-none");
                        $("#desa-group").addClass("d-none");
                        $(".row-select").select2({
                            'width' : '100%',
                            'theme' : 'bootstrap4'
                        })
                    } else if (e.target.value == "2") {
                        $("#kabupaten-group").removeClass("d-none");
                        $("#kecamatan-group").removeClass("d-none");
                        $("#desa-group").addClass("d-none");
                        $(".row-select").select2({
                            'width' : '100%',
                            'theme' : 'bootstrap4'
                        })
                    } else if (e.target.value == "3") {
                        $("#kabupaten-group").removeClass("d-none");
                        $("#kecamatan-group").removeClass("d-none");
                        $("#desa-group").removeClass("d-none");
                        $(".row-select").select2({
                            'width' : '100%',
                            'theme' : 'bootstrap4'
                        })
                    } else if (e.target.value == "0") {
                        $("#kabupaten-group").addClass("d-none");
                        $("#kecamatan-group").addClass("d-none");
                        $("#desa-group").addClass("d-none");
                    }
                })
                $("#kab-label-select").on("select2:select", function(e) {
                    let kabupaten_kode = e.target.value.substring(2, 4);
                    let url = `{{ route('/') }}/master/wilayah/kecamatan/${kabupaten_kode}`;
                    handleFetchKecamatan(url);
                })
                $("#kec-label-select").on("select2:select", function(e) {
                    let kabupaten_kode = e.target.value.substring(2, 4);
                    let kecamatan_kode = e.target.value.substring(4, 7);
                    let url = `{{ route('/') }}/master/wilayah/desa/${kabupaten_kode}/${kecamatan_kode}`;
                    handleFetchDesa(url);
                })
            })
        </script>
    </x-slot>
</x-niu-layout>
