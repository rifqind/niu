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
                    <label for="">
                        Apakah Anda yakin ingin menghapus Tabel ini? Menghapus tabel ini, berarti menghapus seluruh
                        tabel tersebut dan benar-benar tidak bisa dikembalikan
                    </label>
                    <input id="idHiddenTabel" class="hiddenInput" hidden>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="deleteTabels" type="button" class="btn btn-sm btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteStatusModal" tabindex="-1" role="dia\log" aria-labelledby="deleteModal"
    aria-hidden="true">
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
                    <label for="">Apakah Anda yakin ingin menghapus Tabel tahun ini? Hal ini tidak bisa
                        diulang</label>
                    <input id="idHidden" class="hiddenInput" hidden>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="deleteStatusTabels" type="button" class="btn btn-sm btn-danger">Hapus</button>
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
                <button id="downloadTabel" type="submit" class="btn btn-sm bg-success-fordone">Download</button>
            </div>
        </div>
    </div>
</div>
