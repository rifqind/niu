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
            window.location.href = index_URL.href
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
            <td>${data.name}</td>
            <td>${data.dinas_nama}</td>
            <td class="text-center">${data.noHp}</td>
            <td class="text-center">${data.role}</td>
            <td class="text-center">
                <a href="${reset_URL.href}" class="update-pen"
                >
                <i class="fa-solid fa-pen" style="color: #1032e0;"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="" class="delete-trash"
                    data-users="${[(id = data.id)]}"
                    >
                    <i class="fa-solid fa-trash-can" style="color: #9a091f;"></i>
                </a>
            </td>
            <tr>
            `
        );
    });
}
$(document).ready(function () {
    $("#formSearch").submit(function (e) {
        // console.log("asu");
        e.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                // console.log(data);
                updateTable(data.users);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            },
        });
    });
    $("#resetPassword").on("click", function (e) {
        let id = $("#idHidden").val();
        $.ajax({
            url: default_URL.href,
            type: "POST",
            data: {
                id: id,
                _token: tokens,
            },
            success: function (data) {
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            },
        });
    });
    $("#deleteUser").on("click", function (e) {
        let id = $("#idHidden").val();
        console.log(id);
        $.ajax({
            type: "POST",
            url: delete_URL.href,
            data: {
                id: id,
                _token: tokens,
            },
            success: function (data) {
                alert(data);
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
    let check = $("#cariUser").val();
    if (check != "") {
        let users = $(this).data("users");
        $("#idHidden").val(users.id);
        // console.log($("#idHidden").val());
    } else {
        e.preventDefault();
        let users = $(this).data("users");
        //change value modal
        $("#idHidden").val(users.id);
    }
});
