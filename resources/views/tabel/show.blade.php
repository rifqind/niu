<x-niu-layout>
    <x-slot name="title">
        {{-- {{ __('Test') }} --}}
        {{ $tabel->label }}
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

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Data Tabel</li>
    </x-slot>
    <!-- Alert container -->
    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert"
        style="display: none;">
        <strong>Sukses!</strong> Berhasil menyimpan Perubahan data !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body bg-info">
                <h2>{{ $tabel->label }}</h2>
            </div>
        </div>

        </select>
        {{-- <hr> --}}
        <table class="table table-bordered table-hover">
            <thead class="bg-info">
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

            <tbody class="bg-white">
                @foreach ($rows as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $row->label }}</td>
                        @foreach ($tahuns as $tahun)
                            @foreach ($turtahuns as $turtahun)
                                @foreach ($columns as $column)
                                    <td><input type="text" class="form-control input-field text-right"
                                            data-id-content=""
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
        <button class="btn btn-primary" id="save-table">Simpan</button>
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        <script>
            const url_key = new URL('{{ route('tabel.getDatacontent') }}')
            // get data from the form
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('save-table').addEventListener('click', function(event) {
                    const button = this;


                    var buttonInitialText = this.innerHTML;

                    event.preventDefault();
                    handleSaveTable(button, buttonInitialText);

                });
            });

            const handleSaveTable = function(element, buttonInitialText) {
                element.disabled = true;

                element.innerHTML = 'Loading...';
                // return 0
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
                        // console.log('Success:', response);
                        showSuccessAlert();
                        setTimeout(hideSuccessAlert, 3000);
                        element.disabled = false;

                        element.innerHTML = buttonInitialText;

                    } else {
                        console.error('Error:', xhr.status, xhr.statusText);
                    }
                };
                xhr.onerror = function() {
                    console.error('Network Error');
                };
                xhr.send(jsonData);

            };

            // Show the success alert
            function showSuccessAlert() {
                var alert = document.getElementById('success-alert');
                alert.style.display = 'block';
            }

            // Hide the success alert after a certain time (e.g., 3 seconds)
            function hideSuccessAlert() {
                var alert = document.getElementById('success-alert');
                alert.style.display = 'none';
            }

            // Call the function to show the success alert as needed
            // For example, after saving or updating data

            // Call the function to hide the success alert after a certain time
            // For example, after 3 seconds

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
