const handleSaveTable = function(element, buttonInitialText, decisions, catatans) {
    element.disabled = true;

    element.innerHTML = 'Loading...';

    let decisions_type = (decisions == "save-table") ? "save" : "send";
    // return 0
    let inputField = Array.from(document.querySelectorAll('.input-field'));


    let inputValues = inputField.map(element => {
        let explodedId = element.id.split('-');
        // console.log({explodedId})

        return ({
            // get the Id and value of the element 
            'id': element.dataset.idContent,
            'id_tabel': explodedId[0],
            // 'id_row': explodedId[1].length == 10 ? 0 : explodedId[1],
            // 'id_column': explodedId[2],
            'tahun': explodedId[3],
            // 'id_turtahun': explodedId[4],
            // 'wilayah_fullcode': element.dataset.wilayah_fullcode,
            'value': element.value

            // assign it to the arrays

        })
    });
    let token = '{{ csrf_token() }}'
    let data_json = ({
        'data': inputValues,
        'decisions': decisions_type,
        'catatans': catatans,
        _token: token,
    });

    const xhr = new XMLHttpRequest();

    xhr.open('PUT', just_route, true);

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
            // console.log(response.status);
            $("#badges-status").addClass(statusMapping[response.status]);
            $("#badges-status").text(response.status_label);
            if (decisions_type == "send") {
                window.location.reload();
            }

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
    $("#success-alert").removeClass("d-none");
}

// Hide the success alert after a certain time (e.g., 3 seconds)
function hideSuccessAlert() {
    $("#success-alert").addClass("d-none");
}