<div class="row d-flex justify-content-start">
    <div class="card col-xl-6 col-l-6 col-md-12 col-sm-12" id="box-satu">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2 text-satu">JUMLAH TABEL BARU</div>
                    <div class="h5 text-bold">{{ $newTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-bars-staggered text-satu"></i></div>
            </div>
        </div>
    </div>
    <div class="card col-xl-6 col-l-6 col-md-12 col-sm-12" id="box-lima">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2 text-lima">RILIS</div>
                    <div class="h5 text-bold">{{ $finalTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-check-double text-lima"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-start">
    <div class="card col-xl-4 col-l-4 col-md-12 col-sm-12" id="box-dua">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2 text-dua">DALAM PROSES ENTRI</div>
                    <div class="h5 text-bold">{{ $entriTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-pen-nib text-dua"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-xl-4 col-l-4 col-md-12 col-sm-12" id="box-tiga">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2 text-tiga">DIPERIKSA</div>
                    <div class="h5 text-bold">{{ $verifyTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-regular fa-2x fa-hourglass-half text-tiga"></i></div>
            </div>
        </div>
    </div>
    <div class="card col-xl-4 col-l-4 col-md-12 col-sm-12" id="box-empat">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2 text-empat">PERLU PERBAIKAN</div>
                    <div class="h5 text-bold">{{ $repairTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-screwdriver-wrench text-empat"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="p-0" id="p-progress">
        <div class="card" id="pie-charts">
            <div class="card-header text-bold text-center">
                DIAGRAM PROGRES PENGERJAAN DATA
            </div>
            <div class="card-body">
                <div class="pie-chart-container mb-3 text-center">
                    <canvas id="pie-chart"></canvas>
                </div>
                <div class="row p-2 justify-content-center">
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle text-satu"></i>
                        Tabel Baru
                    </div>
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle text-lima"></i>
                        Rilis
                    </div>
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle text-dua"></i>
                        Proses Entri
                    </div>
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle text-tiga"></i>
                        Diperiksa
                    </div>
                    <div class="text-center small">
                        <i class="fa-solid fa-circle text-empat"></i>
                        Perbaikan
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-0 ml-1 col-9">
        <div class="card mr-3" id="percentage-progress">
            <div class="card-header text-center text-bold">
                PROGRES PENGERJAAN
            </div>
            <div class="card-body" id="card-notifikasi">
                <div class="row">
                    @foreach ($notifikasiList as $key => $item)
                        <div class="col-2 mb-3">
                            <div class="">
                                <span class="badge badges-status" data-status="{{ $item->status }}">
                                    <div>{{ $item->created_at }}</div>
                                </span>
                            </div>
                        </div>
                        <div class="col-10 mb-3">
                            {{ $item->komentar }}
                            <span class="text-bold">{{ $item->judul_tabel }}</span>, Tahun {{ $item->tahundata }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
