document.addEventListener("DOMContentLoaded", function () {
    // getPagination('#table-tabel');
    // getPagination('#tabel-master');
    
    $(".reject-final").on("click", function (e) {
        e.preventDefault();
        const decisions = this.id;
        decisions_type = decisions == "reject-table" ? "reject" : "final";
        let inputField = Array.from(document.querySelectorAll(".input-field"));
        let inputValues = inputField.map((element) => {
            let explodedId = element.id.split("-");
            // console.log({explodedId})
            return {
                // get the Id and value of the element
                id: element.dataset.idContent,
                id_tabel: explodedId[0],
                tahun: explodedId[3],
                // assign it to the arrays
            };
        });
        $.ajax({
            type: "POST",
            url: reject_final_key.href,
            data: {
                data: inputValues,
                decisions: decisions_type,
                _token: token,
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
                if (data.error) {
                    alert(data.error);
                } else {
                    console.log(data);
                    window.location.reload();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });

    $("form").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
            },
        });
    });
       
    $('#rekon-view').on('paste', 'input', function (e) {
        const $this = $(this);
        // let panjang_ndas = $('thead').children().length
        $.each(e.originalEvent.clipboardData.items, function (i, v) {
            if (v.type === 'text/plain') {
                v.getAsString(function (text) {
                    var x = $this.closest('td').index(),
                        y = $this.closest('tr').index() + 2,
                        obj = {};
                    text = text.trim('\r\n');
                    $.each(text.split('\r\n'), function (i2, v2) {
                        $.each(v2.split('\t'), function (i3, v3) {
                            var row = y + i2, col = x + i3;
                            obj['cell-' + row + '-' + col] = v3
                            console.log(row,col);
                            $this.closest('table').find('tr:eq(' + row + ') td:eq(' + col + ') input:not(:hidden)').val(v3);
                        });
                    });

                });
            }
        });
        return false;
    });
});
