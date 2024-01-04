<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preview Hasil Tabulasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: calc(100vh - 200px); overflow-y: auto;">
                <table id="preview-table" class="table table-bordered table-hover table-responsive">
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Periksa Kembali</button>
                <button type="button" id="submit-create-table" class="btn btn-primary">Kirim Form</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const token_ = "{{ csrf_token() }}";
        createTableURL = "{{ route('tabel.store') }}";
        document.getElementById("submit-create-table").addEventListener("click", handleSubmitCreateTable(
            createTableURL, window.formCreateTable));
    });
</script>
