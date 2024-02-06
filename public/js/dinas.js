function saveDinas() {
    $.ajax({
        type: "POST",
        url: save_URL.href,
        data: {
            nama: $("#nama").val(),
            wilayah_fullcode: $("#wilayah_fullcode").val(),
            _token: tokens,
        },
        beforeSend: function () {
            $("#spinner-border").removeClass("d-none");
        },
        complete: function () {
            setTimeout(function () {
                $("#spinner-border").addClass("d-none");
            }, 320);
        },

        success: function (data) {
            // alert(data);
            window.location.href = this_URL;
        },

        error: function (jqXHR, textStatus, errorThrown) {
            alert(errorThrown);
        },
    });
}

function updateTable(dinas) {
    $("#tabel-dinas tbody").empty();
    dinas.forEach(function (data) {
        $("#tabel-dinas tbody").append(
            `
            <tr>
            <td>${data.number}</td>
            <td>${data.nama}</td>
            <td class="text-center">${data.region_nama}</td>
            <td class="text-center">
                <a href=""
                class="update-pen"
                data-dinas="${data.id};${data.nama};${data.wilayah_fullcode}"
                data-toggle="modal" data-target="#updateModal">
                <i class="fa-solid fa-pen" style="color: #1032e0;"></i>
            </a>
            </td>
            <td class="text-center">
                <a href=""
                class="delete-trash"
                data-dinas="${(id = data.id)}"
                data-toggle="modal" data-target="#deleteModal">
                    <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                </a>
            </td>
            </tr>
            `
        );
    });
}

// $(document).ready(function () {
document.addEventListener("DOMContentLoaded", function () {
    getPagination("#tabel-dinas");
    $("form").submit(function (e) {
        e.preventDefault();
        $("#spinner-border").removeClass("d-none");
        $.ajax({
            url: $(this).attr("action"),
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                // console.log(data.dinas);
                // $("table tbody").html(data);
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                    updateTable(data.dinas);
                }, 500);
            },
        });
    });

    $("#dinas-save").on("click", function (e) {
        saveDinas();
    });

    // $(".update-pen").on("click", function (e)
    $("#updateDinas").on("click", function (e) {
        let id = $("#idHidden").val();
        let nama = $("#namaModal").val();
        let wilayah_fullcode = $("#wilayahModal").val();
        $.ajax({
            type: "POST",
            url: update_URL.href,
            data: {
                id: id,
                nama: nama,
                wilayah_fullcode: wilayah_fullcode,
                _token: tokens,
            },
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },
            success: function (data) {
                // alert(data);
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });

    $("#deleteDinas").on("click", function (e) {
        let id = $("#idHidden").val();
        $.ajax({
            type: "POST",
            url: delete_URL.href,
            data: {
                id: id,
                _token: tokens,
            },
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },
            success: function (data) {
                // alert(data);
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });
    $(document).on("click", ".delete-trash", function (e) {
        // Your click event handling code here
        let check = $("#cariDinas").val();
        if (check != "") {
            let dinas = $(this).data("dinas");
            $("#idHidden").val(dinas);
        } else {
            e.preventDefault();
            let dinas = $(this).data("dinas");
            console.log(dinas);
            //change value modal
            $("#idHidden").val(dinas.id);
        }
    });

    $(document).on("click", ".update-pen", function (e) {
        // Your click event handling code here
        let check = $("#cariDinas").val();
        if (check != "") {
            let dinas = $(this).data("dinas");
            let split_dinas = dinas.split(/\s*,\s*/);
            let id = split_dinas[0];
            let nama = split_dinas[1];
            let wilayah_fullcode = split_dinas[2];
            $("#idHidden").val(id);
            $("#namaModal").val(nama);
            $("#wilayahModal").val(wilayah_fullcode);
            $(`#wilayahModal option[value='${wilayah_fullcode}']`).prop(
                "selected",
                true
            );
            $("#wilayahModal").trigger("change");
        } else {
            e.preventDefault();
            let dinas = $(this).data("dinas");
            console.log(dinas);
            //change value modal
            $("#idHidden").val(dinas.id);
            $("#namaModal").val(dinas.nama);
            $("#wilayahModal").val(dinas.wilayah_fullcode);
            $(`#wilayahModal option[value='${dinas.wilayah_fullcode}']`).prop(
                "selected",
                true
            );
            $("#wilayahModal").trigger("change");
        }
    });
    $(document).on("click", ".update-pen", function (e) {
        // Your click event handling code here
        let check = $("#cariDinas").val();
        // if (check != "") {
        let dinas = $(this).data("dinas");
        let split_dinas = dinas.split(/\s*;\s*/);
        let id = split_dinas[0];
        let nama = split_dinas[1];
        let wilayah_fullcode = split_dinas[2];
        $("#idHidden").val(id);
        $("#namaModal").val(nama);
        $("#wilayahModal").val(wilayah_fullcode);
        $(`#wilayahModal option[value='${wilayah_fullcode}']`).prop("selected", true);
        $("#wilayahModal").trigger("change");
        // } else {
        //     e.preventDefault();
        //     let dinas = $(this).data("dinas");
        //     console.log(dinas);
        //     //change value modal
        //     $("#idHidden").val(dinas.id);
        //     $("#namaModal").val(dinas.nama);
        //     $("#wilayahModal").val(dinas.wilayah_fullcode);
        //     $(`#wilayahModal option[value='${dinas.wilayah_fullcode}']`).prop(
        //         "selected",
        //         true
        //     );
        //     $("#wilayahModal").trigger("change");
        // }
    });
});
