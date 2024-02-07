<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalTitle">Menambah metadata variabel baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('metavar.store') }}" method="post" id="form-store">
                    @csrf
                    <div class="form-group">
                        <input id="id_tabel" name="id_tabel" hidden>
                        <label for="r101">Nama Variabel</label>
                        <input class="form-control mb-3" id="r101" name="r101" placeholder="Isi nama variabel">
                        <label for="r102">Konsep</label>
                        <input class="form-control mb-3" id="r102" name="r102"
                            placeholder="Isi konsep yang sesuai"></textarea>
                        <label for="r103">Definisi</label>
                        <textarea class="form-control mb-3" id="r103" name="r103" placeholder="Isi definisi yang sesuai"></textarea>
                        <label for="r104">Referensi Pemilihan</label>
                        <textarea class="form-control mb-3" id="r104" name="r104" placeholder="Isi referensi pemilihan dari variabel"></textarea>
                        <label for="r105">Referensi Waktu</label>
                        <input class="form-control mb-3" id="r105" name="r105"
                            placeholder="Isi referensi waktu dari variabel">
                        <label for="satuan">Satuan</label>
                        <input class="form-control mb-3" id="satuan" name="satuan" placeholder="">
                        <label for="r106">Alias</label>
                        <input class="form-control mb-3" id="r106" name="r106"
                            placeholder="Isi alias dari variabel">
                        <label for="r107">Ukuran</label>
                        <input class="form-control mb-3" id="r107" name="r107"
                            placeholder="Isi ukuran dari variabel">
                        <label for="r108">Tipe Data</label>
                        <input class="form-control mb-3" id="r108" name="r108"
                            placeholder="Isi tipe data dari variabel">
                        <label for="r109">Klasifikasi Isian</label>
                        <input class="form-control mb-3" id="r109" name="r109"
                            placeholder="Apakah variabel memiliki klasifikasi isian?">
                        <label for="r110">Aturan Validasi</label>
                        <input class="form-control mb-3" id="r110" name="r110"
                            placeholder="Bagaimana aturan validasi untuk variabel?">
                        <label for="r111">Kalimat Pertanyaan</label>
                        <input class="form-control mb-3" id="r111" name="r111"
                            placeholder="Bagaimana bentuk kalimat pertanyaan untuk variabel?">
                        <label for="r112">Apakah variabel dapat diakses?</label>
                        <select name="r112" id="r112" class="form-control">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="storeMetavar" type="submit" class="btn btn-sm bg-success-fordone">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalTitle">Lihat Detail/Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('metavar.update') }}" method="post" id="form-update">
                    @csrf
                    <div class="form-group">
                        <input id="show-id" name="id" hidden>
                        <input id="show-id_tabel" name="id_tabel" hidden>
                        <label for="r101">Nama Variabel</label>
                        <input class="form-control mb-3" id="show-r101" name="r101" placeholder="Isi nama variabel">
                        <label for="r102">Konsep</label>
                        <input class="form-control mb-3" id="show-r102" name="r102"
                            placeholder="Isi konsep yang sesuai"></textarea>
                        <label for="r103">Definisi</label>
                        <textarea class="form-control mb-3" id="show-r103" name="r103" placeholder="Isi definisi yang sesuai"></textarea>
                        <label for="r104">Referensi Pemilihan</label>
                        <textarea class="form-control mb-3" id="show-r104" name="r104" placeholder="Isi referensi pemilihan dari variabel"></textarea>
                        <label for="r105">Referensi Waktu</label>
                        <input class="form-control mb-3" id="show-r105" name="r105"
                            placeholder="Isi referensi waktu dari variabel">
                        <label for="satuan">Satuan</label>
                        <input class="form-control mb-3" id="show-satuan" name="satuan" placeholder="">
                        <label for="r106">Alias</label>
                        <input class="form-control mb-3" id="show-r106" name="r106"
                            placeholder="Isi alias dari variabel">
                        <label for="r107">Ukuran</label>
                        <input class="form-control mb-3" id="show-r107" name="r107"
                            placeholder="Isi ukuran dari variabel">
                        <label for="r108">Tipe Data</label>
                        <input class="form-control mb-3" id="show-r108" name="r108"
                            placeholder="Isi tipe data dari variabel">
                        <label for="r109">Klasifikasi Isian</label>
                        <input class="form-control mb-3" id="show-r109" name="r109"
                            placeholder="Apakah variabel memiliki klasifikasi isian?">
                        <label for="r110">Aturan Validasi</label>
                        <input class="form-control mb-3" id="show-r110" name="r110"
                            placeholder="Bagaimana aturan validasi untuk variabel?">
                        <label for="r111">Kalimat Pertanyaan</label>
                        <input class="form-control mb-3" id="show-r111" name="r111"
                            placeholder="Bagaimana bentuk kalimat pertanyaan untuk variabel?">
                        <label for="r112">Apakah variabel dapat diakses?</label>
                        <select name="r112" id="show-r112" class="form-control">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="updateMetavar" type="submit" class="btn btn-sm bg-success-fordone">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">Hapus Metadata Variabel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="delete-id" hidden>
                <label for="">Apakah yakin akan menghapus metadata variabel : <span id="judul-deleted"></span></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="deleteMetavar" type="submit" class="btn btn-sm badge-status-empat">Hapus</button>
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
                <button id="downloadMetadataVariabel" type="submit" class="btn btn-sm bg-success-fordone">Download</button>
            </div>
        </div>
    </div>
</div>