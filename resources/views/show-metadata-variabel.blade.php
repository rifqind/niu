<table id="table-metadata-variabel" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
    <thead id="header-metadata-variabel">
        <tr scope="col" class="bg-info-fordone">
            <th class="align-middle text-center">#</th>
            <th class="align-middle text-center">Nama Variabel</th>
            <th class="align-middle text-center">Konsep</th>
            <th class="align-middle text-center">Definisi</th>
            <th class="align-middle text-center">Referensi Pemilihan</th>
            <th class="align-middle text-center">Satuan</th>
            <th class="align-middle text-center deleted">Lihat Detail</th>
            {{-- tersembunyi --}}
            <th class="d-none">Referensi Waktu</th>
            <th class="d-none">Alias</th>
            <th class="d-none">Ukuran</th>
            <th class="d-none">Tipe Data</th>
            <th class="d-none">Klasifikasi Isian</th>
            <th class="d-none">Aturan Validasi</th>
            <th class="d-none">Kalimat Pertanyaan</th>
            <th class="d-none">Apakah Variabel dapat diakses?</th>
        </tr>
        <tr>
            <td class="align-middle search-header">#</td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"></td>
            {{-- tersembunyi --}}
            <td class="d-none"></td>
            <td class="d-none"></td>
            <td class="d-none"></td>
            <td class="d-none"></td>
            <td class="d-none"></td>
            <td class="d-none"></td>
            <td class="d-none"></td>
            <td class="d-none"></td>
        </tr>
    </thead>
    <tbody id="body-tabel" class="bg-white">
        @foreach ($metavars as $item => $key)
            <tr>
                <td>{{ $item + 1 }}</td>
                <td class="d-none this-id deleted" id="{{ Illuminate\Support\Facades\Crypt::encrypt($key->id) }}">
                    {{ $item }}</td>
                <td class="this-label">{{ $key->r101 }}</td>
                <td>{{ $key->r102 }}</td>
                <td>{{ $key->r103 }}</td>
                <td>{{ $key->r104 }}</td>
                <td>{{ $satuan[0] }}</td>
                <td class="text-center deleted">
                    <a href="" class="show-button show-edit-button mr-2" data-toggle="modal"
                        data-target="#updateModal">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                {{-- tersembunyi --}}
                <td class="d-none">{{ $key->r105 }}</td>
                <td class="d-none">{{ $key->r106 }}</td>
                <td class="d-none">{{ $key->r107 }}</td>
                <td class="d-none">{{ $key->r108 }}</td>
                <td class="d-none">{{ $key->r109 }}</td>
                <td class="d-none">{{ $key->r110 }}</td>
                <td class="d-none">{{ $key->r111 }}</td>
                <td class="d-none">{{ $key->r112 == '1' ? 'Ya' : 'Tidak' }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot></tfoot>
</table>
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalTitle">Lihat Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                    <textarea class="form-control mb-3" id="show-r104" name="r104"
                        placeholder="Isi referensi pemilihan dari variabel"></textarea>
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
            </div>
        </div>
    </div>
</div>
