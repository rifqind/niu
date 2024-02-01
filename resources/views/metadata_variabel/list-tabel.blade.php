<table id="table-metadata-variabel" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
    <thead id="header-metadata-variabel">
        <tr scope="col" class="bg-info-fordone">
            <th class="align-middle text-center">#</th>
            <th class="align-middle text-center">Nama Variabel</th>
            <th class="align-middle text-center">Konsep</th>
            <th class="align-middle text-center">Definisi</th>
            <th class="align-middle text-center">Referensi Pemilihan</th>
            <th class="align-middle text-center">Satuan</th>
            <th class="align-middle text-center deleted">Lihat Detail/Edit</th>
            <th class="align-middle text-center deleted">Hapus</th>
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
        <input id="id-metavars" hidden
            value="{{ sizeof($metavars) > 0 ? Illuminate\Support\Facades\Crypt::encrypt($metavars[0]->id_tabel) : '0' }}">
        @if (sizeof($metavars) > 0)
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
                        <a href="" class="edit-button show-edit-button mr-2" data-toggle="modal"
                            data-target="#updateModal">
                            <i class="fas fa-pencil"></i>
                        </a>
                    </td>
                    <td class="text-center deleted">
                        <a href="" class="delete-button" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
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
                    <td class="d-none">{{ ($key->r112 == '1') ? 'Ya' : 'Tidak'}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8" class="text-center">Belum Ada Metadata Variabel</td>
            </tr>
        @endif
    </tbody>
    <tfoot></tfoot>
</table>
<div class="row justify-content-between">
    <div class="mr-auto px-2">
        <a href="{{ route('metavar.index') }}" class="btn btn-light border"><i class="fas fa-chevron-left"></i>
            Kembali</a>
    </div>
    <div class="ml-auto mr-2 d-none" id="admin-need-prompt">
        <a href="#" id="reject-metavar"
            class="btn final-reject btn-danger {{ sizeof($metavars) > 0 ? '' : 'disabled' }}">Reject <i
                class="fas fa-ban"></i></a>
        <a href="#" id="final-metavar"
            class="btn final-reject bg-success-fordone {{ sizeof($metavars) > 0 ? '' : 'disabled' }}">Final <i
                class="fas fa-flag-checkered"></i></a>
    </div>
    <div class="mr-2 d-none" id="user-need-prompt">
        <a href="{{ route('metavar.metavarSend', ['id' => sizeof($metavars) > 0 ? Illuminate\Support\Facades\Crypt::encrypt($metavars[0]->id_tabel) : '0']) }}"
            id="send-metavar" class="btn bg-success-fordone {{ sizeof($metavars) > 0 ? '' : 'disabled' }}">Kirim <i
                class="fas fa-paper-plane"></i></a>
    </div>
</div>
