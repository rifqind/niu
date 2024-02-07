<table id="table-monitoring" class="table table-bordered table-hover table-sorted table-search overflow-y-scroll">
    <thead id="header-tabel">
        <tr scope="col" class="bg-info-fordone">
            <th class="align-middle text-center table-width-5">#</th>
            <th class="align-middle text-center table-width-35">Produsen Data</th>
            <th class="align-middle text-center table-width-8">Status Tabel Baru</th>
            <th class="align-middle text-center table-width-8">Status Proses Entri</th>
            <th class="align-middle text-center table-width-8">Status Diperiksa</th>
            <th class="align-middle text-center table-width-8">Status Perbaikan</th>
            <th class="align-middle text-center table-width-8">Status Final</th>
            <th class="align-middle text-center table-width-8">Tabel Dihapus</th>
        </tr>
        <tr>
            <td class="align-middle text-center search-header">#</td>
            <td class="align-middle search-header"><input type="text" class="search-input form-control">
            </td>
            <td class="align-middle search-header"></td>
            <td class="align-middle search-header"></td>
            <td class="align-middle search-header"></td>
            <td class="align-middle search-header"></td>
            <td class="align-middle search-header"></td>
        </tr>
    </thead>
    <tbody id="body-tabel" class="bg-white">
        @foreach ($this_monitoring as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_dinas }}</td>
                <td>{{ $item->jumlah_satu }}</td>
                <td>{{ $item->jumlah_dua }}</td>
                <td>{{ $item->jumlah_tiga }}</td>
                <td>{{ $item->jumlah_empat }}</td>
                <td>{{ $item->jumlah_lima }}</td>
                <td>{{ $item->jumlah_enam }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot></tfoot>
</table>
