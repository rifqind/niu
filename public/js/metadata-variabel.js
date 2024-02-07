document.addEventListener('DOMContentLoaded', function() {
    $('#satuan').val(satuans);
    $('#id_tabel').val(id);
    if (roles != "produsen") {
        $("#user-need-prompt").addClass("d-none");
        if (status == "3") {
            $("#admin-need-prompt").removeClass("d-none");
        }
        if (status == "5") {
            $("#final-metavar").addClass("d-none");
        }
    } else {
        if (status == "3" | status == "5") {
            $("#user-need-prompt").addClass("d-none");
        } else {
            $("#user-need-prompt").removeClass("d-none");
        }
    }
    $(document).on("click", ".final-reject", function(e) {
        e.preventDefault();
        const button = this;
        const decisions = this.id;
        $.ajax({
            url: admin_URL.href,
            type: "GET",
            data: {
                id: id,
                decisions: decisions,
            },
            success: function(data) {
                // console.log(data);
                window.location.href = index_URL.href;
            },
            error: function(jqxhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    })
    $("#form-store").on('submit', function(e) {
        e.preventDefault();
        let data = $(this).serialize();
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: data,
            success: function(data) {
                if (data.hasOwnProperty('error')) {
                    alert('Server error:', response.error);
                    alert('Exception message:', response.message);
                } else {
                    $("#createModal").modal('hide');
                    $("#list-tabels").html(data);
                }
            },
            error: function(data) {
                alert(data);
            }
        })
    })
    $(document)
        // (".show-edit-button")
        .on("click", ".show-edit-button", function(e) {
            // Find the closest tr and then find the .this-id element within it
            var thisId = $(this).closest('tr').find('.this-id').attr('id');
            let shows;
            if ($(this).hasClass("show-button")) {
                shows = "1";
            } else {
                shows = "0";
            }
            $.ajax({
                url: show_URL.href,
                type: "GET",
                data: {
                    id: thisId
                },
                success: function(data) {
                    $.each(data, function(key, value) {
                        // Check if there is an element with the matching id
                        var element = $("#show-" + key);
                        $("#show-satuan").val(satuans);
                        if (element.length > 0) {
                            // Set the value of the form element
                            element.val(value);
                            if (shows == "1") {
                                element.prop('disabled', true);
                                element.css('background-color', 'white');
                            } else {
                                element.prop('disabled', false);
                            }
                        }
                    });
                    if (shows == "1") {
                        $("#updateMetavar").addClass('d-none');
                    } else {
                        $("#updateMetavar").removeClass('d-none');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        })
    $("#form-update").on('submit', function(e) {
        e.preventDefault();
        let data = $(this).serialize();
        // console.log(data);
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: data,
            success: function(data) {
                // console.log(data);
                $("#updateModal").modal('hide');
                $("#list-tabels").html(data);
            },
            error: function(data) {
                console.log(data);
            }
        })
    })
    $(document).on("click", ".delete-button", function(e) {
        var thisId = $(this).closest('tr').find('.this-id').attr('id');
        $("#delete-id").val(thisId);
        var thisLabel = $(this).closest('tr').find('.this-label').html();
        $("#judul-deleted").html(thisLabel);
    })
    $("#deleteMetavar").on("click", function(e) {
        let thisId = $("#delete-id").val();
        $.ajax({
            url: destroy_URL.href,
            type: "POST",
            data: {
                _token: token,
                id: thisId,
            },
            success: function(data) {
                // console.log(data);
                $("#deleteModal").modal('hide');
                $("#list-tabels").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        })
    })
    $("#downloadMetadataVariabel").on("click", function(e) {
        e.preventDefault();
        const titles = $("#title-file").val();
        console.log(titles);
        let datas = getReadyOnGeneral('table-metadata-variabel');
        downloadExcel(datas, titles);
        window.location.reload();
    })
})