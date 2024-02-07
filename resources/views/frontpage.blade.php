<x-front-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <x-slot name="head">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/filter_multi_select.css') }}">
        <style type="text/css">
            
        </style>
    </x-slot>
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-12 col-lg-7 p-0">
                <div class="card shadow mb-4 custom-card">
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
                    <form action="{{ route('home.search') }}" id="search-tabel">
                        @csrf
                        <div class="mb-2">
                            <select multiple name="tahuns[]" id="tahun-select">
                                @foreach ($tahuns as $tahun)
                                    <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card shadow mb-2">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold" style="color:#a80606">Berdasarkan Daerah</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class=""
                                    style="height : 200px; overflow-y: scroll; overflow-x: hidden; color:#333333;">
                                    @foreach ($kabs as $kab)
                                        <div class="row my-2" style="min-width: 50vw;">
                                            <input type="checkbox" id="{{ 'dinas-' . $kab->wilayah_fullcode }}"
                                                class="ml-3" name="wilayah[]" value="{{ $kab->wilayah_fullcode }}">
                                            <label class="ml-3 mb-0 click-to-check text-capitalize"
                                                data-target="{{ 'dinas-' . $kab->wilayah_fullcode }}">
                                                {{ $kab->label }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-2">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold" style="color:#a80606">Berdasarkan Produsen Data</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="" style="height :auto; color:#333333;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select multiple name="dinas[]" id="dinas-select" class="form-control">
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
                                    style="height : 200px; overflow-y: scroll; overflow-x:hidden; color:#333333;">
                                    @foreach ($subjects as $subject)
                                        <div class="row my-2" style="">
                                            <input type="checkbox" id="{{ 'subject-' . $subject->id }}" class="ml-3"
                                                name="subject[]" value="{{ $subject->id }}">
                                            <label class="col ml-3 mb-0 click-to-check"
                                                data-target="{{ 'subject-' . $subject->id }}">{{ $subject->label }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <input type="text" name="searchData" placeholder="Cari dengan Kata Kunci"
                                class="form-control mb-3 mr-2 w-75">
                            {{-- <div class="row pr-3 pb-2"> --}}
                            <button type="submit" class="btn ml-auto mb-3 w-25" style="background-color:#a80606">
                                <div class="text-white">
                                    <i class="fa-brands fa-searchengin"></i> Cari
                                </div>
                            </button>
                            {{-- </div> --}}
                        </div>
                    </form>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-8 col-lg-5">
                    <div class="card shadow" id="tabel-list">
                        @include('tabel-list')
                    </div>
                </div>
            </div>
        </div>

        <x-slot name="script">
            {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
            {{-- <script src="{{ asset('js/filter-multi-select-bundle.min.js') }}"></script> --}}
            <script src="{{ asset('js/home.js') }}" nonce="{{ Vite::cspNonce() }}"></script>
            <script nonce="{{ Vite::cspNonce() }}">
                document.addEventListener('DOMContentLoaded', function() {
                    // alert('asu')
                    $('#dinas-select').filterMultiSelect({
                        placeholderText: 'Pilih Produsen Data'
                    });
                    $(".text-capitalize").text().toLowerCase();
                    $('#tahun-select').filterMultiSelect({
                        placeholderText: 'Pilih Tahun'
                    });
                    // $('body').addClass('bg-info-fordone')
                });
            </script>
        </x-slot>
</x-front-layout>
