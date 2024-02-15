function saveDinas() {
    let datas = $("#DinasForm").serialize();
    console.log(datas);
    $.ajax({
        type: "POST",
        url: save_URL.href,
        data: datas,
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

        error: function (data) {
            // alert(data.responseJSON.errors.nama);
            $("#error-nama").text(data.responseJSON.errors.nama);
        },
    });
}

function updateError(data) {
    if (data) {
        $(`#error-${data.field}`).text(data.error);
    } else {
        $(`#error-${data.field}`).text("");
    }
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
        let datas = $("#DinasUpdateForm").serialize();
        // console.log(datas);
        $.ajax({
            type: "POST",
            url: update_URL.href,
            data: datas,
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
            error: function (data) {
                $("#error-nama").text(data.responseJSON.errors.nama);
            },
        });
    });

    $("#deleteDinas").on("click", function (e) {
        let datas = $("#DinasUpdateForm").serialize();
        // console.log(datas);
        $.ajax({
            type: "POST",
            url: delete_URL.href,
            data: datas,
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
        let dinas = $(this).data("dinas");
        $("#idHidden").val(dinas.id);
    });
    $(document).on("click", ".update-pen", function (e) {
        // Your click event handling code here
        let dinas = $(this).data("dinas");
        let split_dinas = dinas.split(/\s*;\s*/);
        let id = split_dinas[0];
        let nama = split_dinas[1];
        let wilayah_fullcode = split_dinas[2];
        let kabupaten_kode = wilayah_fullcode.substring(2, 4);
        let kecamatan_kode = wilayah_fullcode.substring(4, 7);
        let desa_kode = wilayah_fullcode.substring(7, 10);
        // console.log({
        //     kabupaten_kode,
        //     kecamatan_kode,
        //     desa_kode,
        // });
        $("#idHidden").val(id);
        $("#nama").val(nama);
        if (kabupaten_kode != "00") {
            if (kecamatan_kode == "000") {
                $("#tingkat-label-select").val(1);
                $("#tingkat-label-select option[value=1]").prop(
                    "selected",
                    true
                );
                $("#tingkat-label-select").trigger("change");
                $("#tingkat-label-select").trigger("select2:select");

                $("#kab-label-select").val(wilayah_fullcode);
                $(`#kab-label-select option[value=${wilayah_fullcode}]`).prop(
                    "selected",
                    true
                );
                $("#kab-label-select").trigger("change");
            } else {
                if (desa_kode == "000") {
                    $("#tingkat-label-select").val(2);
                    $("#tingkat-label-select option[value=2]").prop(
                        "selected",
                        true
                    );
                    $("#tingkat-label-select").trigger("change");
                    $("#tingkat-label-select").trigger("select2:select");

                    $("#kab-label-select").val(
                        "71" + kabupaten_kode + "000000"
                    );
                    $(
                        `#kab-label-select option[value=${
                            "71" + kabupaten_kode + "000000"
                        }]`
                    ).prop("selected", true);
                    $("#kab-label-select").trigger("change");
                    $("#kab-label-select").trigger({
                        type: "select2:select",
                    });
                } else {
                    $("#tingkat-label-select").val(3);
                    $("#tingkat-label-select option[value=3]").prop(
                        "selected",
                        true
                    );
                    $("#tingkat-label-select").trigger("change");
                    $("#tingkat-label-select").trigger("select2:select");

                    $("#kab-label-select").val(
                        "71" + kabupaten_kode + "000000"
                    );
                    $(
                        `#kab-label-select option[value=${
                            "71" + kabupaten_kode + "000000"
                        }]`
                    ).prop("selected", true);
                    $("#kab-label-select").trigger("change");
                    $("#kab-label-select").trigger({
                        type: "select2:select",
                    });
                }
            }
        } else {
            $("#tingkat-label-select").val(0);
            $("#tingkat-label-select option[value=0]").prop("selected", true);
            $("#tingkat-label-select").trigger("change");
        }
    });
});
