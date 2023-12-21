$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        let datas = $(
            "#search-tabel :input:not(#dinas\\[\\]--1-chbx)"
        ).serialize();
        $.ajax({
            url: $(this).attr("action"),
            type: "GET",
            data: datas,
            success: function (data) {
                console.log(data);
                // $('#tabel-list').empty();
                $('#tabel-list').html(data)
            },
        });
    });
});
