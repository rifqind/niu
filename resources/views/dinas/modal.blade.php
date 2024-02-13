<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalTitle">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {{-- <label for="nama">Nama Dinas</label>
                    <input class="form-control mb-3" id="namaModal" placeholder="Isi Nama Dinas">
                    <input id="idHidden" class="hiddenInput" hidden>
                    <label for="regions">Wilayah Kerja</label>
                    <select class="form-control mb-3" id="wilayahModal">
                        <option value="" selected hidden disabled>-- Pilih Wilayah Kerja --</option>
                        @foreach ($kabs as $kab)
                        <option value="{{ $kab->wilayah_fullcode }}">{{ $kab->label }}</option>
                        @endforeach
                    </select> --}}
                    <form id = "DinasUpdateForm" class="form-horizontal mb-3">
                        @csrf
                        <input id="idHidden" class="hiddenInput" hidden>
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="updateDinas" type="button" class="btn btn-sm bg-success-fordone">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Apakah Anda yakin ingin menghapus Dinas ini?</label>
                    <input id="idHidden" class="hiddenInput" hidden>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="deleteDinas" type="button" class="btn btn-sm btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalTitle">Download</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="title-file">Nama File</label>
                <input type="text" name="title-file" id="title-file" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="downloadDinas" type="submit" class="btn btn-sm bg-success-fordone">Download</button>
            </div>
        </div>
    </div>
</div>
