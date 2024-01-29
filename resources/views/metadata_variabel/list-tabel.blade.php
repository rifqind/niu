<table id="table-metadata-variabel" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
    <thead id="header-metadata-variabel">
        <tr scope="col" class="bg-info-fordone">
            <th class="align-middle">#</th>
            <th class="align-middle">Nama Variabel</th>
            <th class="align-middle">Konsep</th>
            <th class="align-middle">Definisi</th>
            <th class="align-middle">Referensi Pemilihan</th>
            <th class="align-middle">Satuan</th>
            <th class="align-middle">Detail</th>
        </tr>
        <tr>
            <td class="align-middle search-header">#</td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control"></td>
            <td class="align-middle search-header"></td>
        </tr>
    </thead>
    <tbody id="body-tabel" class="bg-white">
        @if (sizeof($metavars) > 0)
            @foreach ($metavars as $item => $key) 
            <tr>
                <td>{{ $item + 1 }}</td>
                <td>{{ $key->r101 }}</td>
                <td>{{ $key->r102 }}</td>
                <td>{{ $key->r103 }}</td>
                <td>{{ $key->r104 }}</td>
                <td>{{ $satuan[0] }}</td>
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
