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
});
