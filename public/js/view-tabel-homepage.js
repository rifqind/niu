// $(document).ready(function() {
document.addEventListener("DOMContentLoaded", function () {
    const judul_tabel = document.getElementById("judulTabel").innerHTML;
    dataContents.map((content) => {
        // contentSplitted = content.label.split("-");
        tableId = content.id_tabel;
        rowId = content.id_row;
        columnId = content.id_column;
        tahun = content.tahun;
        turtahun = content.id_turtahun;
        wilayah = content.wilayah_fullcode;

        // rowLabel = data.rows.find((row) => {
        //     if (row.id == rowId) return row.label;
        // });
        let inputId = `${tableId}-${
            rowId == 0 ? wilayah : rowId
        }-${columnId}-${tahun}-${turtahun}`;
        // debugn
        document.getElementById(inputId).innerHTML = content.value;
        // document.getElementById(inputId).dataset.idContent = content.id;
    });
    document
        .getElementById("downloadExcel")
        .addEventListener("click", function (e) {
            e.preventDefault();
            let datas = getReady();
            downloadExcel(datas, judul_tabel);
        });
    var rekonViewTheadHeight = $("#rekon-view thead").height();
    $("#komponen thead").height(rekonViewTheadHeight);
    $("#showTabel").removeClass("d-none");
    $("#showMetavar").on("click", function (e) {
        e.preventDefault();
        console.log("click");
        $.ajax({
            url: meta_key.href,
            type: "GET",
            data: {
                id_tabel: id,
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
                if (typeof data === "object") {
                    alert("Belum ada metadata variabel");
                } else {
                    $("#showTabel").addClass("d-none");
                    $("#showMetadataVariabel").removeClass("d-none");
                    $(".table-container").html(data);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });
    $("#downloadMetadataVariabel").on("click", function (e) {
        e.preventDefault();
        let datas = getReadyOnGeneral("table-metadata-variabel");
        judul_metadata_variabel = "Metadata Variabel_" + judul_tabel;
        downloadExcel(datas, judul_metadata_variabel);
        window.location.reload();
    });
    $("#showMetadataVariabel").on("click", function (e) {
        window.location.reload();
    })
    $(document).on("click", ".show-edit-button", function(e) {
        // Find the closest tr and then find the .this-id element within it
        // console.log(thisId);
        var thisId = $(this).closest('tr').find('.this-id').attr('id');
        $.ajax({
            url: meta_show,
            type: "GET",
            data: {
                id: thisId
            },
            success: function(data) {
                // console.log(data);
                $.each(data, function(key, value) {
                    // Check if there is an element with the matching id
                    var element = $("#show-" + key);
                    $("#show-satuan").val(satuans);
                    if (element.length > 0) {
                        // Set the value of the form element
                        element.val(value);
                        element.prop('disabled', true);
                        element.css('background-color', 'white');
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    })
});
