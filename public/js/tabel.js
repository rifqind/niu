// handle select all
function handleSelectAll(isSelected, elementSelector) {
    var selectedItems = $(elementSelector).each(function(index, item) {
        item.checked = isSelected;
        console.log({
            checked: item.checked
        });
    });
    return 1;
}

// handle select one row

function handleCheckRow(idRow) {
    let rowChecked = document.getElementById(idRow).checked;
    if (rowChecked) {
        return document.getElementById(idRow).checked = false;
    }
    return document.getElementById(idRow).checked = true;
}

function handleSubmitCreateTable() {
    // prepare table
    let table = {
        'nomor': document.getElementsByName('nomor')[0].value,
        'label': document.getElementsByName('judul')[0].value,
        'unit': document.getElementsByName('unit')[0].value,
        'id_dinas': document.getElementsByName('dinas')[0].value,
        'id_subjek': document.getElementsByName('subjek')[0].value,
    };

    // prepare rows 
    let rows_selected = [...document.getElementsByClassName('row-list-checkbox')].filter(item => item.checked).map(
        item =>
        item.value);
    let rows = {
        'row_label': document.getElementsByName('row-label')[0].value,
        'rows_selected': rows_selected
    };
    //prepare kolom 
    let columns_selected = [...document.getElementsByClassName('column-list-checkbox')].filter(item => item.checked)
        .map(
            item =>
            item.value);
    let columns = {
        'columns_label': document.getElementsByName('column-group')[0].value,
        'columns': columns_selected
    };

    // prepare periode 
    let periode = {
        'tahun': document.getElementsByName('tahun')[0].value,
        'periode': document.getElementsByName('turtahun-group')[0].value,
    }

    let data = {
        table,
        rows,
        columns,
        periode,
        _token: token,
    }
    // console.log({
    //     data
    // })


    // prepare sending data


    const xhr = new XMLHttpRequest();

    xhr.open('POST', '/tables/create', true);

    xhr.setRequestHeader('Content-Type', 'application/json');

    let jsonData = JSON.stringify(data);

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
}

function handleLabel(url, nameLabel, bodyHtmlId) {
    // Create URL with parameters
    // let url = '{{ route('rows.fetch') }}?id_rowLabels=' + id_rowLabels;

    // Create XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    // Set up event handlers
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            var response = JSON.parse(xhr.responseText);
            console.log('Success:', response.data);
            const tableBodyHtml = response.data.map((item,
                key
            ) => {
                console.log({
                    item
                })
                return `<tr onclick="handleCheckRow('${nameLabel}-${key}')">
                    <th scope="row" class="text-right">
                        ${key + 1 }
                    </th>
                    <td>${item.tipe}</td>
                    <td>${item.label}</td>
                    <td> <input type="checkbox" aria-label="Checkbox for following text input"
                            class="${nameLabel}-list-checkbox" id="${nameLabel}-${key }" value="${item.id}">
                    </td>
                </tr>`
            });
            document.getElementById(bodyHtmlId).innerHTML = tableBodyHtml.join('');

        } else {
            console.error('Error:', xhr.status, xhr.statusText);
        }
    };
    xhr.onerror = function() {
        console.error('Network Error');
    };

    // Send the request
    xhr.send();
}



document.getElementById('submit-create-table').addEventListener('click', handleSubmitCreateTable);

$(document).ready(function() {
    
    $('.select2-selection').select2({});
    $('#row-label-select').on('select2:select', () => {
        let idRowLabel = document.getElementById('row-label-select').value;
        let rowLabelUrl = `${rowFetchURL}?id_rowLabels=${idRowLabel}`;
        
        handleLabel(rowLabelUrl, 'row', 'row-list-body')
    });
    $('#column-group-select').on('select2:select', () => {
        let idRowLabel = document.getElementById('column-group-select').value;
        let rowLabelUrl = `${columnFetchURL}?id_columnGroups=${idRowLabel}`;

        handleLabel(rowLabelUrl, 'column', 'column-list-body');
    });
    $('#turtahun-group-select').on('select2:select', () => {
        let idRowLabel = document.getElementById('turtahun-group-select').value;
        let rowLabelUrl = `${turtahunFetchURL}?id_turtahunGroup=${idRowLabel}`;

        handleLabel(rowLabelUrl, 'turtahun', 'turtahun-list-body');
    });

    $('#select-toggle-column').on('click', (event) => {
        let isSelected = event.target.checked;
        handleSelectAll(isSelected, '.column-list-checkbox');
    });
    $('#select-toggle-row').on('click', (event) => {
        let isSelected = event.target.checked;
        handleSelectAll(isSelected, '.row-list-checkbox');
    });
    $('#select-toggle-turtahun').on('click', (event) => {
        let isSelected = event.target.checked;
        handleSelectAll(isSelected, '.turtahun-list-checkbox');
    });

    const currentYear = new Date().getFullYear();

    // Populate the select dropdown with years
    const yearSelect = document.getElementById('tahun');

    for (let year = currentYear; year >= currentYear - 10; year--) {
        const option = document.createElement('option');
        option.value = year;
        option.text = year;
        yearSelect.add(option);
    }

    // document.getElementsByName('nomor')[0].value = "000/1";
    // document.getElementsByName('judul')[0].value = "Judul Tabel";
    // document.getElementsByName('unit')[0].value = "Unit asw";
    $('.select2-selection').trigger('change');

});