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
                    <select class="form-control select2bs4 mb-3" id="regionsModal">
                        <option value="">Pilih Wilayah Kerja</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="updateDinas" type="button" class="btn btn-sm btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div>
