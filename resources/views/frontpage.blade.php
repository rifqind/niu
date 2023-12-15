<x-front-layout>
    <x-slot name="title">
    </x-slot>
    <x-slot name="head">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/filter_multi_select.css') }}">
    </x-slot>
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4 bg-gradient-primary">
                    <!-- Card Body -->
                    <div class="card-body d-flex align-items-start flex-column">
                        <div class=" mb-auto p-2"></div>
                        <div class="p-2" style="margin-top:40px">
                            <div style="color: white">
                                <h1>Selamat datang di <b>For D One
                                        <br>
                                        Forum Data Online</b></h1>
                                <p class="lead">Temukan data Pemerintah Provinsi Sulawesi Utara dengan mudah!</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-7">
                                    <div class="input-group">
                                        <div class="form-check mb-2 mr-sm-2" style="padding-left:0em;">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-4 col-lg-7">


                    <div class="card shadow mb-2">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color:#a80606">Berdasarkan Daerah</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class=""
                                style="height : 200px; overflow-y: scroll; overflow-x: hidden; color:#333333;">
                                @foreach ($regions as $region)
                                    <div class="row my-2" style="min-width: 50vw">
                                        <input type="checkbox" id="{{ 'label-' . $region->id }}" class="ml-3"
                                            name="nama" value="{{ $region->id }}">
                                        <div class="ml-3 mb-0" for="{{ 'label-' . $region->id }}">{{ $region->nama }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-2">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color:#a80606">Berdasarkan Dinas</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="" style="height :auto; color:#333333;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <select multiple name="dinas-select" id="dinas-select" class="form-control">
                                            @foreach ($dinas as $din)
                                                <option value="{{ $din->id }}">{{ $din->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card shadow mb-2">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color:#a80606">Berdasarkan Subjek Data</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class=""
                                style="height : 200px; overflow-y: scroll; overflow-x: hidden; color:#333333;">
                                <div class="row">
                                    <div class="col-sm-10">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-8 col-lg-5">
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="color:#a80606">
                                Menampilkan : {{ $counttabels }} tabel</h6>
                        </div>
                        <div class="card-body">
                            @foreach ($tabels as $tabel)
                                <div class="d-flex flex-column">
                                    <a href="/view/{{ Illuminate\Support\Facades\Crypt::encrypt($tabel->id) }}" class="text-red">
                                        <span class="badge badge-pill badge-danger">{{ $tabel->nomor }}</span> -
                                        {{ $tabel->label }}
                                    </a>
                                    <small class="lead" style="font-size: 12px">{{ $tabel->dinas->nama }} | </small>
                                    <small class="lead" style="font-size: 12px">Terakhir diupdate : {{ $tabel->updated_at }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-slot name="script">
            {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
            <script src="{{ asset('js/filter-multi-select-bundle.min.js') }}"></script>
            <script>
                $(function() {
                    $('#dinas-select').filterMultiSelect({
                        placeholderText: 'Pilih Dinas'
                    });
                });
            </script>
        </x-slot>
</x-front-layout>
