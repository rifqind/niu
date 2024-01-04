// const url_key = new URL("{{ route('tabel.getDatacontent') }}");
// set initial values
// handle select all

function handleSelectAll(isSelected, elementSelector) {
    var selectedItems = $(elementSelector).each(function (index, item) {
        item.checked = isSelected;
    });
    return 1;
}

// handle select one row

function handleCheckRow(idRow) {
    let rowChecked = document.getElementById(idRow).checked;
    if (rowChecked) {
        return (document.getElementById(idRow).checked = false);
    }
    return (document.getElementById(idRow).checked = true);
}

// submit action

function handleSubmitCreateTable(createURL, data) {
    const xhr = new XMLHttpRequest();

    xhr.open("POST", createURL, true);

    xhr.setRequestHeader("Content-Type", "application/json");

    let jsonData = JSON.stringify(data);

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            var response = JSON.parse(xhr.responseText);
            console.log("Success:", response);
        } else {
            console.error("Error:", xhr.status, xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error("Network Error");
    };
    xhr.send(jsonData);
}

function handleLabel(url, nameLabel, bodyHtmlId) {
    // Create URL with parameters
    // let url = '{{ route('rows.fetch') }}?id_rowLabels=' + id_rowLabels;

    // Create XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);

    // Set up event handlers
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            var response = JSON.parse(xhr.responseText);
            console.log("Success:", response.data);
            const tableBodyHtml = response.data.map((item, key) => {
                return `<tr onclick="handleCheckRow('${nameLabel}-${key}')">
                    <th scope="row" class="text-right">
                        ${key + 1}
                    </th>
                    <td>${item.tipe}</td>
                    <td>${item.label}</td>
                    <td> <input type="checkbox" aria-label="Checkbox for following text input" data-label="${
                        item.label
                    }"
                            class="${nameLabel}-list-checkbox" id="${nameLabel}-${key}" value="${
                    item.id
                }">
                    </td>
                </tr>`;
            });
            document.getElementById(bodyHtmlId).innerHTML =
                tableBodyHtml.join("");
        } else {
            console.error("Error:", xhr.status, xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error("Network Error");
    };

    // Send the request
    xhr.send();
}
