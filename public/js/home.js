function searchYear() {
    let year = $("#year-select").val();
    $.ajax({
        type: "GET",
        url: getMonitoringURL.href,
        data: {
            year: year,
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
            $("#data").html(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            reject(errorThrown);
        },
    });
}
function findKecamatan(array, parent) {
    let kecamatan = [];
    for (let i = 0; i < array.length; i++) {
        if (array[i].parent_code == parent) {
            kecamatan.push(array[i]);
        }
    }
    return kecamatan;
}
function findDesa(array, parent) {
    let desa = [];
    for (let i = 0; i < array.length; i++) {
        if (array[i].parent_code == parent) {
            desa.push(array[i]);
        }
    }
    return desa;
}
var count_kabupaten = [];
function handleCheckKabsProvs(targetId, isChecked) {
    let this_code = $("#" + targetId).val();
    let kabupaten_kode = this_code.substring(2, 4);
    let kecamatan = findKecamatan(kecamatan_kode, kabupaten_kode);

    if (!isChecked && kabupaten_kode != "00" && kecamatan.length > 0) {
        $("#card-kecs").removeClass("d-none");
        count_kabupaten.push(kabupaten_kode);
    } else {
        count_kabupaten = count_kabupaten.filter(item => item !== kabupaten_kode);
        $("#card-kecs").addClass("d-none");
        $("#card-desa").addClass("d-none");
        $(".kecs-checkbox").each(function (e) {
            $(this).prop("checked", false);
        });
        $(".desa-checkbox").each(function (e) {
            $(this).prop("checked", false);
        });
    }

    $(".row-wilayah-homepage").each(function () {
        let id = $(this).attr("id");
        for (let i = 0; i < kecamatan.length; i++) {
            if (id === kecamatan[i].wilayah_fullcode) {
                $(this).toggleClass("d-none", isChecked);
            }
        }
    });
}
function handleCheckKecs(targetId, isChecked) {
    let this_code = $("#" + targetId).val();
    let kecamatan_kode = this_code.substring(2, 4);
    let kecamatan_identifier = this_code.substring(2, 7);
    let desa = findDesa(desa_kode, kecamatan_identifier);

    if (!isChecked && kecamatan_kode != "00" && desa.length > 0) {
        $("#card-desa").removeClass("d-none");
    } else {
        $("#card-desa").addClass("d-none");
        $(".desa-checkbox").each(function (e) {
            $(this).prop("checked", false);
        });
    }

    $(".row-wilayah-homepage").each(function () {
        let id = $(this).attr("id");
        for (let i = 0; i < desa.length; i++) {
            if (id === desa[i].wilayah_fullcode) {
                $(this).toggleClass("d-none", isChecked);
            }
        }
    });
}
document.addEventListener("DOMContentLoaded", function () {
    $("form").on("submit", function (e) {
        e.preventDefault();
        let datas = $(
            "#search-tabel :input:not(#dinas\\[\\]--1-chbx)"
        ).serialize();
        // console.log(datas);
        $.ajax({
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },
            url: $(this).attr("action"),
            type: "GET",
            data: datas,
            success: function (data) {
                // console.log(data);
                // $('#tabel-list').empty();
                $("#tabel-list").html(data);
            },
        });
    });
    $(".click-to-check").on("click", function (e) {
        let targetId = $(this).data("target");
        $("#" + targetId).prop("checked", function (_, checked) {
            return !checked;
        });
    });
    $(".click-to-check-kabs-prov").on("click", function (e) {
        let targetId = $(this).data("target");
        // console.log(targetId);
        $("#" + targetId).prop("checked", function (_, checked) {
            if (!checked) {
                handleCheckKabsProvs(targetId, false);
            } else {
                handleCheckKabsProvs(targetId, true);
            }
            return !checked;
        });
    });
    $(".click-to-check-kecs").on("click", function (e) {
        let targetId = $(this).data("target");
        $("#" + targetId).prop("checked", function (_, checked) {
            if (!checked) {
                handleCheckKecs(targetId, false);
            } else {
                handleCheckKecs(targetId, true);
            }
            return !checked;
        });
    });
    $(".click-to-check-desa").on("click", function (e) {
        let targetId = $(this).data("target");
        $("#" + targetId).prop("checked", function (_, checked) {
            return !checked;
        });
    });
    $(".kabs-checkbox").on("change", function (e) {
        let boxId = $(this).attr("id");
        if ($(this).is(":checked")) {
            // $(".click-to-check-kabs-prov").trigger("click");
            handleCheckKabsProvs(boxId, false);
        } else {
            handleCheckKabsProvs(boxId, true);
        }
    });
    $(".kecs-checkbox").on("change", function (e) {
        let boxId = $(this).attr("id");
        if ($(this).is(":checked")) {
            // $(".click-to-check-kabs-prov").trigger("click");
            handleCheckKecs(boxId, false);
        } else {
            handleCheckKecs(boxId, true);
        }
    });
});
