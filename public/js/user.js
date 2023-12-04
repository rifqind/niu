$("#storeUser").click(function (e) {
    e.preventDefault();
    // $('.loader').removeClass('d-none');
    var users = $("#formUser").serialize();
    console.log(users);
    $.ajax({
        type: "POST",
        url: store_URL.href,
        data: users,

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
    $("#spinner-border").removeClass("d-none");
    console.log(users);
    $.ajax({
        type: "POST",
        url: add_URL.href,
        data: users,
        success: function (data) {
            // window.history.back();
            $("#spinner-border").addClass("d-none");
            window.location.href = this_URL.href;
        },
    });
});

function updateTable(users) {
    $("#tabel-user tbody").empty();

    users.forEach(function (data) {
        reset_URL.searchParams.set("id", encodeURIComponent(data.id));

        $("#tabel-user tbody").append(
            `
            <tr>
            <td>${data.number}</td>
            <td>${data.username}</td>
            <td>${data.name}</td>
            <td>${data.dinas_nama}</td>
            <td>${data.region_nama}</td>
            <td class="text-center">${data.noHp}</td>
            <td class="text-center" id="roles">${data.role}</td>
            <td class="text-center">
                <a href="${reset_URL.href}" class="update-pen mx-1"
                >
                <i class="fa-solid fa-lock" title="Reset Password" style="color: #1032e0;"></i>
                </a>
                <a href="" class="mx-1 role-update" data-users="${[
                    (id = data.id),
                ]}">
                <i class="role-icon fa-solid" title="Ubah Role" style="color: #1032e0;"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="" class="delete-trash"
                    data-users="${[(id = data.id)]}"
                    data-toggle="modal" data-target="#deleteModal"
                    >
                    <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                </a>
            </td>
            <tr>
            `
        );
    });
}
function changeRoles() {
    $("#tabel-user tbody")
        .find("tr")
        .each(function (e) {
            let roles = $(this).find("#roles").html();
            console.log(roles);
            if (roles == "produsen") {
                $(this).find(".role-icon").removeClass("fa-user-tie");
                $(this).find(".role-icon").addClass("fa-graduation-cap");
            } else if (roles == "admin") {
                $(this).find(".role-icon").removeClass("fa-graduation-cap");
                $(this).find(".role-icon").addClass("fa-user-tie");
            }
        });
}

$(document).ready(function () {
    changeRoles();
    $("#formSearch").submit(function (e) {
        // console.log("asu");
        e.preventDefault();
        $("#spinner-border").removeClass("d-none");
        $.ajax({
            url: $(this).attr("action"),
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                // console.log(data);
                $("#spinner-border").addClass("d-none");
                updateTable(data.users);
                changeRoles();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            },
        });
    });
    $("#resetPassword").on("click", function (e) {
        let id = $("#idHidden").val();
        $("#spinner-border").removeClass("d-none");
        $.ajax({
            url: default_URL.href,
            type: "POST",
            data: {
                id: id,
                _token: tokens,
            },
            success: function (data) {
                $("#spinner-border").addClass("d-none");
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            },
        });
    });
    $("#deleteUser").on("click", function (e) {
        let id = $("#idHidden").val();
        $("#spinner-border").removeClass("d-none");
        $.ajax({
            type: "POST",
            url: delete_URL.href,
            data: {
                id: id,
                _token: tokens,
            },
            success: function (data) {
                $("#spinner-border").addClass("d-none");
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
        });
    });
});
$(document).on("click", ".delete-trash", function (e) {
    // Your click event handling code here
    let check = $("#cariUsers").val();
    if (check != "") {
        e.preventDefault();
        let users = $(this).data("users");
        $("#idHidden").val(users);
        console.log($("#idHidden").val());
    } else {
        e.preventDefault();
        let users = $(this).data("users");
        //change value modal
        $("#idHidden").val(users.id);
        console.log($("#idHidden").val());
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
        success: function (data) {
            // console.log(data);
            roles.html(data.role);
            changeRoles();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        },
    });
});
