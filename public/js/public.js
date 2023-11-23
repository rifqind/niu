$(document).ready(function () {
    $("#select-tabel").on("change", function () {
        let tabel = $(this).val();
        url_key.searchParams.set("tabel_id", encodeURIComponent(tabel));
        if (tabel) {
            $.ajax({
                type: "GET",
                url: url_key.href,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    reject(errorThrown);
                }
            });
        }
    });
});
