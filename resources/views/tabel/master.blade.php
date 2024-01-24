<x-niu-layout>
    <x-slot name="title">
        Master Tabel
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
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="ml-1 h4 mb-3">
                Master Tabel
            </div>
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
            <div class="mr-1 d-flex justify-content-between row align-items-center">
                <div class="mb-3 mx-3 ml-auto">Menampilkan <span id="showPage"></span> dari <span
                        id="showTotal"></span></div>
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
                <div class="col-auto ml-auto mb-3">
                    <a href="{{ route('tabel.create') }}" class="btn bg-info-fordone"><i class="fas fa-plus"></i> Buat Tabel
                        Baru</a>
                </div>
            </div>
        </div>
        <table id="tabel-master" class="table table-bordered table-hover table-sorted">
            <thead id="header-tabel">
                <tr class="bg-info-fordone">
                    <th class="align-middle">#</th>
                    <th class="align-middle" style="width: 25%;">Nama Tabel</th>
                    <th class="align-middle" style="width: 20%;">Produsen Data</th>
                    <th class="align-middle">Nama Row</th>
                    <th class="align-middle">Daftar Kolom</th>
                    <th class="align-middle"> Daftar Tahun</th>
                    <th class="align-middle">Tambah Tahun</th>
                    {{-- <th class="align-middle">Status Pengisian</th> --}}
                    {{-- <th class="align-middle">Cek / Ubah Isian</th> --}}
                    <th class="align-middle">Edit Tabel</th>
                    <th class="align-middle">Hapus</th>
                </tr>
                <tr>
                    <td class="align-middle search-header">#</td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
                    <td class="align-middle search-header"></td>
                    {{-- <td class="align-middle search-header">Status Pengisian</td> --}}
                    {{-- <td class="align-middle search-header">Cek / Ubah Isian</td> --}}
                    <td class="align-middle search-header"></td>
                    <td class="align-middle search-header"></td>
                </tr>
            </thead>
            <tbody id="body-tabel" class="bg-white">
                @foreach ($tables as $index => $tab)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tab['label'] }}</td>
                        <td>{{ $tab['nama_dinas'] }}</td>
                        <td>{{ $tab['row_label'] }}</td>
                        <td>
                            @foreach ($tab['columns'] as $column)
                                <span class="badge badge-info">
                                    {{ $column->label }}
                                </span>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($tab['tahuns'] as $tahun)
                                <span class="badge badge-info">
                                    {{ $tahun }}
                                </span>
                            @endforeach
                            </span>
                        </td>
                        <td class="text-center"><a
                                href="{{ route('tabel.copy', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id'])]) }}"><i
                                    class="fas fa-plus-circle text-info"></i></a></td>


                        <td class="text-center">
                            <a
                                href="{{ route('tabel.edit', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id'])]) }}"><i
                                    class="fas fa-cog text-info"></i></a>

                            {{-- <a href="/tables/edit/{{ $tab['id'] }}">Ubah</a> --}}
                        </td>
                        {{-- <td> --}}
                        {{-- <a
                                href="{{ route('tabel.destroy', ['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id'])]) }}"><i
                                    class="fas fa-trash text-info"></i></a> --}}
                        <td class="text-center">
                            {{-- <form id="delete-table-form" method="POST"
                                action="{{ route('tabel.destroy', ['id_status' => Illuminate\Support\Facades\Crypt::encrypt($tab['id_statustables'])]) }}">
                                @csrf --}}
                            <a href="#" class="delete-trash"
                                data-tabel="{{ json_encode(['id' => Illuminate\Support\Facades\Crypt::encrypt($tab['id'])]) }}"
                                data-toggle="modal" data-target="#deleteModal">
                                <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                            </a>
                            {{-- </form> --}}
                        </td>
                        {{-- <a href="/tables/remove/{{ $tab['tabels'][0]->id }}">Hapus</a> --}}
                        {{-- </td> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        @include('tabel.delete-master-modal')
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script src="{{ asset('js/tabel.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            document.addEventListener('DOMContentLoaded', function() {
                // console.log({{ Js::from($tables) }});
                getPagination('#tabel-master');
                var temporaryMessages = document.querySelectorAll('.temporary-message');
                temporaryMessages = Array.from(temporaryMessages);

                // Check if the success message element exists
                if (temporaryMessages) {
                    // Set a timer to hide the success message after 5 seconds (5000 milliseconds)
                    temporaryMessages.forEach(element => setTimeout(() => {
                        element.style.opacity = '0'; // Fade out the message
                        setTimeout(() => {
                            return element.style.display = 'none'; // Hide the success message
                        }, 500);
                    }, 2000));
                }
                $('.delete-trash').on('click', function(e) {
                    let id = $(this).data('tabel');
                    $('#idHiddenTabel').val(id.id);
                })
                document.getElementById('deleteTabels').addEventListener('click', function(e) {
                    // console.log('asu');
                    let id = $('#idHiddenTabel').val();
                    $.ajax({
                        url: "{{route('tabel.destroy')}}",
                        method: "POST",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            console.log(data);
                        },
                        error: function(data) {
                            alert(data);
                        }
                    })
                })
                // $(".delete-trash").on("click", function (e) {
                //     let id = $(this).data("table");
                //     $("idHidden").val(id);
                // });
                // $("#deleteStatusTabels").on("click", function (e) {
                //     let id = $("idHidden").val();
                //     $.ajax({
                //         type: "POST",
                //         url: 
                //     })
                // })
            })
        </script>
    </x-slot>
</x-niu-layout>
