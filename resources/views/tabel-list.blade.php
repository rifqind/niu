<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold" style="color:#a80606">
        Menampilkan : {{ $counttabels }} tabel</h6>
</div>
<div class="card-body">
@foreach ($tabels as $tabel)
    <div class="d-flex flex-column mb-2">
        <a href="/view/{{ Illuminate\Support\Facades\Crypt::encrypt($tabel->id) }}/{{ $tabel->tahun }}"
            class="text-red">
            <span class="badge badge-pill badge-danger">{{ $tabel->nomor }}</span> -
            {{ $tabel->label }}, Tahun {{ $tabel->tahun }}
        </a>
        <small class="lead" style="font-size: 12px">{{ $tabel->nama_dinas }} |
            {{ $tabel->nama_regions }}</small>
        <small class="lead" style="font-size: 12px; font-weight:500"> Subjek :
            {{ $tabel->nama_subjects }}</small>
        <small class="lead" style="font-size: 12px">Terakhir diupdate :
            {{ $tabel->updated_at }}</small>
    </div>
@endforeach
</div>
