$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        let datas = $(
            "#search-tabel :input:not(#dinas\\[\\]--1-chbx)"
        ).serialize();
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
                console.log(data);
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
});
