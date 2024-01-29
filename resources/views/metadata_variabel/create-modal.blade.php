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
                <form action="{{ route('metavar.store') }}" method="post">
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