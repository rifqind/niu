<x-front-layout>
    <x-slot name="title">
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script></script>
        <style type="text/css">
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h5>{{ $tabel->label }}</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="text-white" style="background-color: #028090">
                        {{-- kolom tahun --}}
                        <tr>
                            <th rowspan="2" class="text-center align-middle">#</th>
                            <th rowspan="2" class="text-center align-middle">{{ $row_label[0]->label }}</th>
                            @foreach ($tahuns as $tahun)
                                <th colspan={{ sizeof($turtahuns) * sizeof($columns) }} class="text-center">{{ $tahun }}
                                </th>
                            @endforeach
                        </tr>
                        {{-- kolom grup var  --}}
                        {{-- kolom var  --}}
                        <tr>
                            @foreach ($turtahuns as $turtahun)
                                @foreach ($tahuns as $tahun)
                                    @foreach ($columns as $index => $column)
                                        <th class="text-center">{{ $column->label }}</th class="text-center">
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
                                            <td class="text-right"
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
            </div>
        </div>
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
                document.getElementById(inputId).innerHTML = content.value;
                // document.getElementById(inputId).dataset.idContent = content.id;
            });
        </script>
    </x-slot>
</x-front-layout>
