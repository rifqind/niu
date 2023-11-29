<x-niu-layout>
    <x-slot name="title">
        {{-- {{ __('Test') }} --}}
        asads
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <script></script>
        <style type="text/css">
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Test Page</li>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>{{ $tabel->label }}</p>
            </div>
        </div>

        </select>
        <hr>
        <table class="table table-bordered">
            <thead>
                {{-- kolom tahun --}}
                <tr>
                    <td rowspan="2">#</td>
                    <td rowspan="2">{{ $row_label[0]->label }}</td>
                    <td colspan="2" class="text-center">2023</td>
                </tr>
                {{-- kolom grup var  --}}
                {{-- kolom var  --}}

                <tr>

                    @foreach ($columns as $index => $column)
                        <td>{{ $column->label }}</td>
                    @endforeach
                </tr>
            </thead>
            <tbody>

                @foreach ($rows as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $row->label }}</td>
                        @foreach ($columns as $column)
                            <td><input type="text" id={{ 'input-' . $row->id . '-' . $column->id . '-2023' }}></td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        <button class="btn btn-primary">Simpan</button>
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ url('') }}/plugins/select2/js/select2.full.min.js"></script>
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                })
            });
            const dataContents = {{ Js::from($datacontents) }};
            dataContents.map((content) => {
                contentSplitted = content.label.split("-");
                rowId = contentSplitted[1];
                columnId = contentSplitted[2];

                // rowLabel = data.rows.find((row) => {
                //     if (row.id == rowId) return row.label;
                // });
                let inputId = `input-${rowId}-${columnId}`;
                // debugn 
                console.log({
                    inputId,
                    content
                });
                document.getElementById(inputId).value =
                    content.value;
            });
        </script>
    </x-slot>
</x-niu-layout>
