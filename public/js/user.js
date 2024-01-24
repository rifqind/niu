function reportField(errors) {
    errorCheck = [
        "username",
        "name",
        "password",
        "email",
        "id_dinas",
        "noHp",
        "role",
        "password",
    ];
    errorCheck.forEach(function (data) {
        updateError({
            field: data,
            error: errors[data] ? errors[data] : "",
        });
    });
}

function updateError(data) {
    if (data.error) {
        $(`#error-${data.field}`).html(data.error);
    } else {
        $(`#error-${data.field}`).html("");
    }
}

//gak kepake
// function updateTable(users) {
//     $("#tabel-user tbody").empty();

//     users.forEach(function (data) {
//         reset_URL.searchParams.set("id", encodeURIComponent(data.id));

//         $("#tabel-user tbody").append(
//             `
//             <tr>
//             <td>${data.number}</td>
//             <td>${data.username}</td>
//             <td>${data.name}</td>
//             <td>${data.dinas_nama}</td>
//             <td>${data.region_nama}</td>
//             <td class="text-center">${data.noHp}</td>
//             <td class="text-center" id="roles">${data.role}</td>
//             <td class="text-center">
//                 <a href="${reset_URL.href}" class="update-pen mx-1"
//                 >
//                 <i class="fa-solid fa-lock" title="Reset Password" style="color: #1032e0;"></i>
//                 </a>
//                 <a href="" class="mx-1 role-update" data-users="${[
//                     (id = data.id),
//                 ]}">
//                 <i class="role-icon fa-solid" title="Ubah Role" style="color: #1032e0;"></i>
//                 </a>
//             </td>
//             <td class="text-center">
//                 <a href="" class="delete-trash"
//                     data-users="${[(id = data.id)]}"
//                     data-toggle="modal" data-target="#deleteModal"
//                     >
//                     <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
//                 </a>
//             </td>
//             </Wtr>
//             `
//         );
//     });
// }

function changeRoles() {
    $("#tabel-user tbody")
        .find("tr")
        .each(function (e) {
            let roles = $(this).find("#roles").html();
            // console.log(roles);
            if (roles == "produsen") {
                $(this).find(".role-icon").removeClass("fa-user-tie");
                $(this).find(".role-icon").addClass("fa-graduation-cap");
            } else if (roles == "kominfo") {
                $(this).find(".role-icon").removeClass("fa-graduation-cap");
                $(this).find(".role-icon").addClass("fa-computer");
            } else if (roles == "admin") {
                $(this).find(".role-icon").removeClass("fa-computer");
                $(this).find(".role-icon").addClass("fa-user-tie");
            }
        });
}

document.addEventListener("DOMContentLoaded", function () {
    // $(document).ready(function() {
    changeRoles();
    getPagination("#tabel-user");
    // $("#formSearch").submit(function (e) {
    //     // console.log("asu");
    //     e.preventDefault();

    //     $.ajax({
    //         url: $(this).attr("action"),
    //         type: "GET",
    //         data: $(this).serialize(),
    //         beforeSend: function () {
    //             $("#spinner-border").removeClass("d-none");
    //         },
    //         complete: function () {
    //             setTimeout(function () {
    //                 $("#spinner-border").addClass("d-none");
    //             }, 320);
    //         },
    //         success: function (data) {
    //             // console.log(data);
    //             updateTable(data.users);
    //             changeRoles();
    //         },
    //         error: function (jqXHR, textStatus, errorThrown) {
    //             // console.log(errorThrown);
    //         },
    //     });
    // });
    $("#resetPassword").on("click", function (e) {
        let id = $("#idHidden").val();
        if (
            confirm("Apakah Anda yakin akan mereset password untuk akun ini?")
        ) {
            $.ajax({
                url: default_URL.href,
                type: "POST",
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
                    // console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // console.log(errorThrown);
                },
            });
        }
    });
    $("#deleteUser").on("click", function (e) {
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
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });
    $("#storeUser").click(function (e) {
        e.preventDefault();
        // $('.loader').removeClass('d-none');
        var users = $("#formUser").serialize();
        // console.log(users);
        $.ajax({
            type: "POST",
            url: store_URL.href,
            data: users,
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },

            success: function (data) {
                // window.history.back();
                window.location.href = index_URL.href;
            },
        });
    });
    $("#createUsers").submit(function (e) {
        e.preventDefault();
        // $('.loader').removeClass('d-none');
        var users = $("#createUsers").serialize();
        $.ajax({
            type: "POST",
            url: add_URL.href,
            data: users,
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },
            success: function (data) {
                // window.history.back();
                window.location.href = this_URL.href;
            },
            error: function (data) {
                // alert(errorThrown);
                // console.log(data.responseJSON.errors);
                reportField(data.responseJSON.errors);
            },
        });
    });

    $(".editButton").on("click", function (e) {
        e.preventDefault();
        var users = $("#form-edit").serialize();
        console.log(users);
        $.ajax({
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },
            type: "POST",
            url: edit_URL.href,
            data: users,
            success: function (data) {
                // console.log(data);
                // window.location.reload();
                $("#success-alert").removeClass("d-none");
                $("#card-password").addClass("d-none");
                $("#password").val("");
                $("#password_confirmation").val("");
            },
            error: function (data) {
                // console.log(data.responseJSON.errors);
                reportField(data.responseJSON.errors);
            },
        });
    });

    $("#changePassword").on("click", function (e) {
        e.preventDefault();
        // console.log("asu");
        $("#card-password").removeClass("d-none");
    });
    $(document).on("click", ".delete-trash", function (e) {
        // Your click event handling code here
        let check = $("#cariUsers").val();
        if (check != "") {
            e.preventDefault();
            let users = $(this).data("users");
            $("#idHidden").val(users);
            // console.log($("#idHidden").val());
        } else {
            e.preventDefault();
            let users = $(this).data("users");
            //change value modal
            $("#idHidden").val(users.id);
            // console.log($("#idHidden").val());
        }
    });
    $(document).on("click", ".role-update", function (e) {
        e.preventDefault();
        let check = $("#cariUsers").val();
        if (check != "") {
            let users = $(this).data("users");
            // console.log(users);
            var id = users;
        } else {
            let users = $(this).data("users");
            // console.log(users.id);
            var id = users.id;
        }
        let roles = $(this).closest("tr").find("#roles");
        $.ajax({
            type: "POST",
            url: roleChange_URL.href,
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
                // console.log(data);
                roles.html(data.role);
                changeRoles();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // console.log(errorThrown);
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
