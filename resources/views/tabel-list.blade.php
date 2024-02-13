<div class="card-header py-3">
    <h6 class="ml-3 my-0 mr-0 font-weight-bold heading-card">
        Menampilkan : {{ $counttabels }} tabel</h6>
</div>
<div class="card-body" id="list-tabel-card">
@foreach ($tabels as $tabel)
    <div class="d-flex flex-column mb-2 ml-3">
        <a href="/view/{{ Illuminate\Support\Facades\Crypt::encrypt($tabel->id_statustables) }}/{{ $tabel->tahun }}"
            class="text-red">
            <span class="badge badge-pill badge-danger">{{ $tabel->nomor }}</span> -
            {{ $tabel->label }}, Tahun {{ $tabel->tahun }}
        </a>
        <small class="lead smalltext-homepage">{{ $tabel->nama_dinas }} |
            {{ $tabel->nama_regions }}</small>
        <small class="lead smalltext-homepage" id="subjek-weight"> Subjek :
            {{ $tabel->nama_subjects }}</small>
        <small class="lead smalltext-homepage">Terakhir diupdate :
            {{ $tabel->updated_at }}</small>
    </div>
@endforeach
</div>
