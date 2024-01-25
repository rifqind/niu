<div class="row d-flex justify-content-start">
    <div class="card col-xl-6 col-l-6 col-md-12 col-sm-12" style="border-left:4px solid #7286a0;">
        <div class="card-body" style="">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2" style="color:#7286a0;">JUMLAH TABEL BARU</div>
                    <div class="h5 text-bold">{{ $newTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-bars-staggered"
                        style="color:#7286a0"></i></div>
            </div>
        </div>
    </div>
    <div class="card col-xl-6 col-l-6 col-md-12 col-sm-12" style="border-left:4px solid green;">
        <div class="card-body" style="">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2" style="color:green;">RILIS</div>
                    <div class="h5 text-bold">{{ $finalTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-check-double" style="color:green;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-start">
    <div class="card col-xl-4 col-l-4 col-md-12 col-sm-12" style="width: 32%; border-left:4px solid #03254e;">
        <div class="card-body" style="">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2" style="color:#03254e;">DALAM PROSES ENTRI</div>
                    <div class="h5 text-bold">{{ $entriTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-pen-nib" style="color:#03254e"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-xl-4 col-l-4 col-md-12 col-sm-12" style="width: 32%; border-left:4px solid #f18f01;">
        <div class="card-body" style="">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2" style="color:#f18f01;">DIPERIKSA</div>
                    <div class="h5 text-bold">{{ $verifyTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-regular fa-2x fa-hourglass-half"
                        style="color:#f18f01"></i></div>
            </div>
        </div>
    </div>
    <div class="card col-xl-4 col-l-4 col-md-12 col-sm-12" style="width: 32%; border-left:4px solid #8B1E3F;">
        <div class="card-body" style="">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-bold mb-2" style="color:#8B1E3F;">PERLU PERBAIKAN</div>
                    <div class="h5 text-bold">{{ $repairTabels }} Tabel</div>
                </div>
                <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-screwdriver-wrench"
                        style="color:#8B1E3F;"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="p-0" style="width: 24.5%">
        <div class="card" id="pie-charts">
            <div class="card-header text-bold text-center">
                DIAGRAM PROGRES PENGERJAAN DATA
            </div>
            <div class="card-body">
                <div class="pie-chart-container mb-3 text-center">
                    <canvas id="pie-chart" style=""></canvas>
                </div>
                <div class="row p-2 justify-content-center">
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle" style="color: #7286a0;"></i>
                        Tabel Baru
                    </div>
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle" style="color: green;"></i>
                        Rilis
                    </div>
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle" style="color: #03254e;"></i>
                        Proses Entri
                    </div>
                    <div class="text-center small mr-3">
                        <i class="fa-solid fa-circle" style="color: #f18f01;"></i>
                        Diperiksa
                    </div>
                    <div class="text-center small">
                        <i class="fa-solid fa-circle" style="color: #8B1E3F;"></i>
                        Perbaikan
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-0 ml-1 col-9" style="">
        <div class="card mr-3" style="width: 100%;" id="percentage-progress">
            <div class="card-header text-center text-bold">
                PROGRES PENGERJAAN
            </div>
            <div class="card-body" style="overflow-y:scroll;">
                <div class="row">
                    @foreach ($notifikasiList as $key => $item)
                        <div class="col-2 mb-3">
                            <div class="" style="">
                                <span class="badge badges-status" data-status="{{ $item->status }}"><div style="">{{ $item->created_at }}</div></span>
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
