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
                    <label for="nama">Nama Dinas</label>
                    <input class="form-control mb-3" id="namaModal" placeholder="Isi Nama Dinas">
                    <input id="idHidden" class="hiddenInput" hidden>
                    <label for="regions">Wilayah Kerja</label>
                    <select class="form-control select2bs4 mb-3" id="wilayahModal" style="width: 100%">
                        <option value="" selected hidden disabled>-- Pilih Wilayah Kerja --</option>
                        @foreach ($kabs as $kab)
                            <option value="{{ $kab->wilayah_fullcode }}">{{ $kab->label }}</option>
                        @endforeach
                    </select>
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
