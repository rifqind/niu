<table id="table-metadata-variabel" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
    <thead id="header-metadata-variabel">
        <tr scope="col" class="bg-info-fordone">
            <th class="align-middle">#</th>
            <th class="align-middle">Nama Variabel</th>
            <th class="align-middle">Konsep</th>
            <th class="align-middle">Definisi</th>
            <th class="align-middle">Referensi Pemilihan</th>
            <th class="align-middle">Satuan</th>
            <th class="align-middle">Lihat Detail/Edit</th>
            <th class="align-middle">Hapus</th>
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
        </tr>
    </thead>
    <tbody id="body-tabel" class="bg-white">
        <input id="id-metavars" hidden
            value="{{ sizeof($metavars) > 0 ? Illuminate\Support\Facades\Crypt::encrypt($metavars[0]->id_tabel) : '0' }}">
        @if (sizeof($metavars) > 0)
            @foreach ($metavars as $item => $key)
                <tr>
                    <td>{{ $item + 1 }}</td>
                    <td class="d-none this-id" id="{{ Illuminate\Support\Facades\Crypt::encrypt($key->id) }}">
                        {{ $item }}</td>
                    <td class="this-label">{{ $key->r101 }}</td>
                    <td>{{ $key->r102 }}</td>
                    <td>{{ $key->r103 }}</td>
                    <td>{{ $key->r104 }}</td>
                    <td>{{ $satuan[0] }}</td>
                    <td class="text-center">
                        <a href="" class="show-button show-edit-button mr-2" data-toggle="modal"
                            data-target="#updateModal">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="" class="edit-button show-edit-button mr-2" data-toggle="modal"
                            data-target="#updateModal">
                            <i class="fas fa-pencil"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="" class="delete-button" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                        </a>
                    </td>
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
