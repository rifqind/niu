$("#dinas-save").click(function () {
    // $('.loader').removeClass('d-none');
    $.ajax({
        type: "POST",
        url: save_URL.href,
        data: {
            nama: $("#nama").val(),
            id_regions: $("#regions").val(),
            _token: tokens,
        },

        success: function (data) {
            // Toast.fire({
            //     icon: 'success',
            //     title: 'Berhasil',
            //     text: 'Data berhasil disimpan.'
            // })
            // $('.loader').addClass('d-none')
            // fetchData()
            alert(data);
        },
    });
});

function updateTable(dinas) {
    $("#tabel-dinas tbody").empty();
    dinas.forEach(function (data) {
        $("#tabel-dinas tbody").append(
            `
            <tr>
            <td>${data.number}</td>
            <td>${data.nama}</td>
            <td>${data.region_nama}</td>
            <tr>
            `
        );
    });
}

$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        $(".spinner-border").removeClass("d-none");
        $.ajax({
            url: $(this).attr("action"),
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                // console.log(data.dinas);
                // $("table tbody").html(data);
                setTimeout(function () {
                    $(".spinner-border").addClass("d-none");
                    updateTable(data.dinas);
                }, 500);
            },
        });
    });
    $(".update-pen").on("click", function (e) {
        e.preventDefault();
        let dinas = $(this).data("dinas");
        //change value modal
        $("#idHidden").val(dinas.id);
        $("#namaModal").val(dinas.nama);
        $("#regionsModal").val(dinas.id_regions);
        $(`#regionsModal option[value='${dinas.id_regions}']`).prop(
            "selected",
            true
        );
        $("#regionsModal").trigger("change");
    });

    $("#updateDinas").on("click", function (e) {
        let id = $("#idHidden").val();
        let nama = $("#namaModal").val();
        let id_regions = $("#regionsModal").val();

        $.ajax({
            type: "POST",
            url: update_URL.href,
            data: {
                id: id,
                nama: nama,
                id_regions: id_regions,
                _token: tokens,
            },
            success: function (data) {
                alert(data)
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });
});
