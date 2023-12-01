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
        {{-- <hr> --}}
        <table class="table table-bordered table-responsive">
            <thead>
                {{-- kolom tahun --}}
                <tr>
                    <td rowspan="3">#</td>
                    <td rowspan="3">{{ $row_label[0]->label }}</td>
                    @foreach ($tahuns as $tahun)
                        <td colspan={{ sizeof($turtahuns) * sizeof($columns) }} class="text-center">{{ $tahun }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($tahuns as $tahun)
                        @foreach ($turtahuns as $turtahun)
                            <td colspan="2" class="text-center">{{ $turtahun->label }}</td>
                        @endforeach
                    @endforeach
                </tr>
                {{-- kolom grup var  --}}
                {{-- kolom var  --}}

                <tr>
                    @foreach ($turtahuns as $turtahun)
                        @foreach ($tahuns as $tahun)
                            @foreach ($columns as $index => $column)
                                <td>{{ $column->label }}</td>
                            @endforeach
                        @endforeach
                    @endforeach

                </tr>
            </thead>

            <tbody>
                @foreach ($rows as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $row->label }}</td>
                        @foreach ($tahuns as $tahun)
                            @foreach ($turtahuns as $turtahun)
                                @foreach ($columns as $column)
                                    <td><input type="text" class="input-field" data-id-content=""
                                            id={{ $tabel->id . '-' . $row->id . '-' . $column->id . '-' . $tahun . '-' . $turtahun->id }}>
                                    </td>
                                @endforeach
                            @endforeach
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        <button class="btn btn-primary" onClick="handleSaveTable();">Simpan</button>
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="{{ url('') }}/plugins/select2/js/select2.full.min.js"></script>
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // get data from the form

            const handleSaveTable = function() {
                let inputField = Array.from(document.querySelectorAll('.input-field'));
                let inputValues = inputField.map(element => ({
                    // get the Id and value of the element 
                    'id': element.dataset.idContent,
                    'label': element.id,
                    'value': element.value

                    // assign it to the arrays

                }));
                let token = '{{ csrf_token() }}'
                let data_json = ({
                    'data': inputValues,
                    _token: token,
                });

                const xhr = new XMLHttpRequest();

                xhr.open('POST', "{{ route('table.update') }}", true);

                xhr.setRequestHeader('Content-Type', 'application/json');

                let jsonData = JSON.stringify(data_json);

                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        var response = JSON.parse(xhr.responseText);
                        console.log('Success:', response);
                    } else {
                        console.error('Error:', xhr.status, xhr.statusText);
                    }
                };
                xhr.onerror = function() {
                    console.error('Network Error');
                };
                xhr.send(jsonData);

            };
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
                tableId = contentSplitted[0];
                rowId = contentSplitted[1];
                columnId = contentSplitted[2];
                tahun = contentSplitted[3];
                turtahun = contentSplitted[4];

                // rowLabel = data.rows.find((row) => {
                //     if (row.id == rowId) return row.label;
                // });
                let inputId = `${tableId}-${rowId}-${columnId}-${tahun}-${turtahun}`;
                // debugn 
                console.log({
                    inputId,
                    content
                });
                document.getElementById(inputId).value =
                    content.value;
                document.getElementById(inputId).dataset.idContent = content.id;
            });
        </script>
    </x-slot>
</x-niu-layout>
