document.addEventListener("DOMContentLoaded", function () {
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

    document.querySelectorAll(".search-input").forEach((inputField) => {
        const tableRows = inputField
            .closest("table")
            .querySelectorAll("tbody > tr");
        const headerCell = inputField.closest("td.search-header");
        const otherHeaderCells = headerCell.closest("tr").children;
        const columnIndex = Array.from(otherHeaderCells).indexOf(headerCell);
        const searchableCells = Array.from(tableRows).map(
            (row) => row.querySelectorAll("td")[columnIndex]
        );

        inputField.addEventListener("input", () => {
            const searchQuery = inputField.value.toLowerCase();
            console.log(searchQuery);
            for (const tableCell of searchableCells) {
                const row = tableCell.closest("tr");
                const value = tableCell.textContent
                    .toLowerCase()
                    .replace(",", "");

                row.style.visibility = null;

                if (value.search(searchQuery) === -1) {
                    row.style.visibility = "collapse";
                }
            }
        });
    });
});
