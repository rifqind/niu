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
    function getPagination(table) {
        var lastPage = 1;
        $("#maxRows")
            .on("change", function (evt) {
                //$('.paginationprev').html('');						// reset pagination
                lastPage = 0;
                $(".pagination").find("li").slice(1, -1).remove();
                var trnum = 0; // reset tr counter
                var maxRows = parseInt($(this).val()); // get Max Rows from select option

                if (maxRows == 5000) {
                    $(".pagination").hide();
                } else {
                    $(".pagination").show();
                }
                var totalRows = $(table + " tbody tr").length; // numbers of rows
                if (maxRows > totalRows) {
                    $("#showPage").text(totalRows);
                } else {
                    $("#showPage").text(maxRows);
                }
                $("#showTotal").text(totalRows);
                // console.log(totalRows);
                $(table + " tbody tr").each(function () {
                    // each TR in  table and not the header
                    trnum++; // Start Counter
                    if (trnum > maxRows) {
                        // if tr number gt maxRows
                        $(this).hide(); // fade it out
                    }
                    if (trnum <= maxRows) {
                        $(this).show();
                    } // else fade in Important in case if it ..
                }); //  was fade out to fade it in
                if (totalRows > maxRows) {
                    // if tr total rows gt max rows option
                    var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..s
                    // console.log(pagenum);
                    //	numbers of pages
                    for (var i = 1; i <= pagenum; ) {
                        // for each page append pagination li
                        $(".pagination #prev")
                            .before(
                                '<li data-page="' +
                                    i +
                                    '">\
                                              <span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
                                            </li>'
                            )
                            .show();
                    } // end for i
                } // end if row count > max rows
                $('.pagination [data-page="1"]').addClass("active"); // add active class to the first li
                $(".pagination li").on("click", function (evt) {
                    // on click each page
                    evt.stopImmediatePropagation();
                    evt.preventDefault();
                    var pageNum = $(this).attr("data-page"); // get it's number
                    var maxRows = parseInt($("#maxRows").val()); // get Max Rows from select option
                    console.log(pageNum, maxRows);
                    if (pageNum == "prev") {
                        if (lastPage == 1) {
                            return;
                        }
                        pageNum = --lastPage;
                    }
                    if (pageNum == "next") {
                        if (lastPage == $(".pagination li").length - 2) {
                            return;
                        }
                        pageNum = ++lastPage;
                    }
                    lastPage = pageNum;
                    var trIndex = 0; // reset tr counter
                    $(".pagination li").removeClass("active"); // remove active class from all li
                    $('.pagination [data-page="' + lastPage + '"]').addClass(
                        "active"
                    ); // add active class to the clicked
                    // $(this).addClass('active');					// add active class to the clicked
                    limitPagging();
                    $(table + " tbody tr").each(function () {
                        // each tr in table not the header
                        trIndex++; // tr index counter
                        // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                        if (
                            trIndex > maxRows * pageNum ||
                            trIndex <= maxRows * pageNum - maxRows
                        ) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        } //else fade in
                    }); // end of for each tr in table
                }); // end of on click pagination list
                limitPagging();
            })
            .val(15)
            .change();

        // end of on select change

        // END OF PAGINATION
    }

    function limitPagging() {
        // alert($('.pagination li').length)

        if ($(".pagination li").length > 7) {
            if ($(".pagination li.active").attr("data-page") <= 3) {
                $(".pagination li:gt(5)").hide();
                $(".pagination li:lt(5)").show();
                $('.pagination [data-page="next"]').show();
            }
            if ($(".pagination li.active").attr("data-page") > 3) {
                $(".pagination li:gt(0)").hide();
                $('.pagination [data-page="next"]').show();
                for (
                    let i =
                        parseInt($(".pagination li.active").attr("data-page")) -
                        2;
                    i <=
                    parseInt($(".pagination li.active").attr("data-page")) + 2;
                    i++
                ) {
                    $('.pagination [data-page="' + i + '"]').show();
                }
            }
        }
    }
});
