<x-niu-layout>
    <x-slot name="title">
        Daftar Dinas
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
            Daftar Dinas
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="row mb-2 justify-content-end align-items-center">
            <div class="ml-2 h4 mr-auto">
                Daftar Produsen Data
            </div>
            <div class="ml-auto mr-2">
                <a href="#" class="btn bg-success-fordone" title="Download" data-target="#downloadModal"
                    data-toggle="modal"><i class="fa-solid fa-circle-down"></i></a>
            </div>
            <div class="mr-2">
                <a href="{{ route('dinas.create') }}" class="btn bg-info-fordone"><i class="fa-solid fa-plus"></i>
                    Tambah Produsen Data Baru</a>
            </div>
        </div>
        <table class="table table-sorted table-hover table-bordered table-search" id="tabel-dinas">
            <thead>
                <tr class="bg-info-fordone">
                    <th class="first-column">No.</th>
                    <th class="text-center tabel-width-50">Nama Produsen Data</th>
                    <th class="text-center">Wilayah Kerja</th>
                    <th class="text-center deleted">Edit</th>
                    <th class="text-center deleted">Hapus</th>
                </tr>
                <tr class="">
                    <td class="search-header"></td>
                    <td class="search-header"><input type="text" class="search-input form-control"></td>
                    <td class="search-header"><input type="text" class="search-input form-control"></td>
                    <td class="search-header"></td>
                    <td class="search-header"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($dinas as $din)
                    <tr>
                        <td>{{ $din->number }}</td>
                        <td>{{ $din->nama }}</td>
                        <td class="">{{ $din->wilayah->label }}</td>
                        <td class="text-center deleted">
                            <a href="" class="update-pen"
                                data-dinas="{{ Illuminate\Support\Facades\Crypt::encrypt($din->id) . ';' . $din->nama . ';' . $din->wilayah_fullcode }}"
                                data-toggle="modal" data-target="#updateModal">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                        <td class="text-center deleted">
                            <a href="" class="delete-trash"
                                data-dinas="{{ json_encode([
                                    'id' => Illuminate\Support\Facades\Crypt::encrypt($din->id),
                                ]) }}"
                                data-toggle="modal" data-target="#deleteModal">
                                <i class="fa-solid fa-trash-can icon-trash-color"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @include('dinas.modal')
    <div class="row d-flex justify-content-end align-items-center">
        <div class="mb-3 mx-3 ml-auto">Menampilkan <span id="showPage"></span> dari <span id="showTotal"></span></div>
        <div class="form-group"> <!--		Show Numbers Of Rows 		-->
            <select class  ="form-control" name="state" id="maxRows">
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="pagination-container">
            <nav>
                <ul class="pagination">
                    <li data-page="prev">
                        <span>
                            < <span class="sr-only">(current)
                        </span></span>
                    </li>
                    <!--	Here the JS Function Will Add the Rows -->
                    <li data-page="next" id="prev">
                        <span> > <span class="sr-only">(current)</span></span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/dinas.js') }}"></script>
        <script src="{{ asset('js/tabel-create.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const tokens = '{{ csrf_token() }}'
            const update_URL = new URL("{{ route('dinas.update') }}")
            const delete_URL = new URL("{{ route('dinas.delete') }}")
            const this_URL = window.location.href
            document.addEventListener("DOMContentLoaded", function(e) {
                getPagination("#tabel-dinas", 15)
                $("#updateModal").on("show.bs.modal", function(e) {
                    $(".row-select").select2({
                        'width': '100%',
                        'theme': 'bootstrap4'
                    })
                })
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
                $("#downloadDinas").on("click", function(e) {
                    GoDownload('tabel-dinas')
                })
            })
        </script>
    </x-slot>
</x-niu-layout>
