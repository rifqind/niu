document.addEventListener("DOMContentLoaded", function () {
    getPagination('#table-tabel');
    
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
                    // console.log(totalRows);
                    if (maxRows > totalRows) {
                        $("#showPage").text(totalRows);
                    } else {
                        $("#showPage").text(maxRows);
                    }
                    $("#showTotal").text(totalRows);
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
                        $(
                            '.pagination [data-page="' + lastPage + '"]'
                        ).addClass("active"); // add active class to the clicked
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
                .val(10)
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
                            parseInt(
                                $(".pagination li.active").attr("data-page")
                            ) - 2;
                        i <=
                        parseInt($(".pagination li.active").attr("data-page")) +
                            2;
                        i++
                    ) {
                        $('.pagination [data-page="' + i + '"]').show();
                    }
                }
            }
        }
    
});
