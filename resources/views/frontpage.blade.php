<x-front-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <x-slot name="head">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/filter_multi_select.css') }}">
    </x-slot>
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-12 col-lg-7 p-0">
                <div class="card shadow mb-4 custom-card">
                    <!-- Card Body -->
                    <div class="card-body d-flex align-items-start flex-column">
                        <div class=" mb-auto p-2"></div>
                        <div class="p-2" id="header-banner-text">
                            <div>
                                <h1>Selamat datang di <b>For D One
                                        <br>
                                        Forum Data Online</b></h1>
                                <p class="lead">Temukan data Pemerintah Provinsi Sulawesi Utara dengan mudah!</p>
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
                                <h6 class="m-0 font-weight-bold heading-card">Berdasarkan Daerah</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="card-large-homepage">
                                    @if (sizeof($wilayahs) > 0)
                                        @foreach ($wilayahs as $wilayah)
                                            <div class="row my-2 row-wilayah-homepage" id="">
                                                <input type="checkbox"
                                                    id="{{ 'dinas-' . $wilayah['wilayah_fullcode'] }}"
                                                    class="ml-3 kabs-checkbox" name="wilayah[]"
                                                    value="{{ $wilayah['wilayah_fullcode'] }}">
                                                <label class="ml-3 mb-0 click-to-check-kabs-prov text-capitalize"
                                                    data-target="{{ 'dinas-' . $wilayah['wilayah_fullcode'] }}">
                                                    {{ $wilayah['label'] }}
                                                </label>
                                            </div>
                                        @endforeach
                                    @else
                                    <div class="row my-2 row-wilayah-homepage" id="">
                                        <label class="ml-3 mb-0 click-to-check-kabs-prov text-capitalize"
                                            data-target=""> Data belum ada yang final
                                        </label>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="card-kecs" class="card shadow mb-2 d-none">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold heading-card">Kecamatan</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="text-center card-overlay" id="spinner-kecamatan">
                                    <div class="spinner-border text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-small-homepage">
                                    @foreach ($kecs as $kec)
                                        <div class="row my-2 d-none row-wilayah-homepage"
                                            id="{{ $kec['wilayah_fullcode'] }}">
                                            <input type="checkbox" id="{{ 'dinas-' . $kec['wilayah_fullcode'] }}"
                                                class="ml-3 kecs-checkbox" name="kecs[]"
                                                value="{{ $kec['wilayah_fullcode'] }}">
                                            <label class="ml-3 mb-0 click-to-check-kecs text-capitalize"
                                                data-target="{{ 'dinas-' . $kec['wilayah_fullcode'] }}">
                                                {{ $kec['label'] }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="card-desa" class="card shadow mb-2 d-none">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold heading-card">Desa/Kelurahan</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="text-center card-overlay" id="spinner-desa">
                                    <div class="spinner-border text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="card-small-homepage">
                                    @foreach ($desa as $des)
                                        <div class="row my-2 d-none row-wilayah-homepage"
                                            id="{{ $des['wilayah_fullcode'] }}">
                                            <input type="checkbox" id="{{ 'dinas-' . $des['wilayah_fullcode'] }}"
                                                class="ml-3 desa-checkbox" name="desa[]"
                                                value="{{ $des['wilayah_fullcode'] }}">
                                            <label class="ml-3 mb-0 click-to-check-desa text-capitalize"
                                                data-target="{{ 'dinas-' . $des['wilayah_fullcode'] }}">
                                                {{ $des['label'] }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-2">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold heading-card">Berdasarkan Produsen Data</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="card-small-homepage">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select multiple name="dinas[]" id="dinas-select" class="form-control">
                                                @foreach ($dinas as $din)
                                                    <option value="{{ $din['id'] }}">{{ $din['nama'] }}</option>
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
                                <h6 class="m-0 font-weight-bold heading-card">Berdasarkan Subjek Data</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="card-large-homepage">
                                    @foreach ($subjects as $subject)
                                        <div class="row my-2">
                                            <input type="checkbox" id="{{ 'subject-' . $subject['id'] }}"
                                                class="ml-3" name="subject[]" value="{{ $subject['id'] }}">
                                            <label class="col ml-3 mb-0 click-to-check"
                                                data-target="{{ 'subject-' . $subject['id'] }}">{{ $subject['label'] }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <input type="text" name="searchData" placeholder="Cari dengan Kata Kunci"
                                class="form-control mb-3 mr-2 w-75">
                            {{-- <div class="row pr-3 pb-2"> --}}
                            <button type="submit" class="btn ml-auto mb-3 w-25 red-bg-homepage">
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
            <script src="{{ asset('js/home.js') }}" nonce="{{ Vite::cspNonce() }}"></script>
            <script nonce="{{ Vite::cspNonce() }}">
                const kecamatan_kode = {{ Js::from($kecs) }}
                const desa_kode = {{ Js::from($desa) }}
                const kabs_kode = {{ Js::from($wilayahs) }}
                document.addEventListener('DOMContentLoaded', function() {
                    $('#dinas-select').filterMultiSelect({
                        placeholderText: 'Pilih Produsen Data'
                    });
                    $(".text-capitalize").text().toLowerCase();
                    $('#tahun-select').filterMultiSelect({
                        placeholderText: 'Pilih Tahun'
                    });
                });
            </script>
        </x-slot>
</x-front-layout>
