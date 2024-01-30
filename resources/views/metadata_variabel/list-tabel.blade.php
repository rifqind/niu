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
                <td colspan="7" class="text-center">Belum Ada Metadata Variabel</td>
            </tr>
        @endif
    </tbody>
    <tfoot></tfoot>
</table>
