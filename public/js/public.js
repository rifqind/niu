document.addEventListener("DOMContentLoaded", function () {
    $("#select-tabel").on("change", function () {
        let tabel = $(this).val();
        url_key.searchParams.set("tabel_id", encodeURIComponent(tabel));
        if (tabel) {
            $.ajax({
                type: "GET",
                url: url_key.href,
                dataType: "json",
                success: function (data) {
                    // console.log(data.tabels[0].label);

                    document.getElementById("judul-tabel").innerHTML =
                        data.tabels[0].label;
                    // generate & assign columns
                    let columnsHTML = `<td>${data.row_label[0].label}</td>`;

                    columnsHTML += data.columns
                        .map((column) => `<td>${column.label}</td>`)
                        .join("");

                    document.getElementById("header-tabel").innerHTML =
                        columnsHTML;
                    console.log({ columnsHTML });

                    // generate & assign rows

                    rowsHTML = data.rows.map((row) => {
                        columnInput = data.columns
                            .map(
                                (column) =>
                                    `<td><input id="${row.id}-${column.id}"/></td>`
                            )
                            .join("");
                        let valueIndex = `<tr><td>${row.label}</td>${columnInput}</tr>`;
                        // console.log({ label: anu });
                        return valueIndex;
                    });

                    document.getElementById("body-tabel").innerHTML = rowsHTML;
                    data.datacontents.map((content) => {
                        contentSplitted = content.label.split("-");
                        rowId = contentSplitted[1];
                        columnId = contentSplitted[2];

                        rowLabel = data.rows.find((row) => {
                            if (row.id == rowId) return row.label;
                        });
                        document.getElementById(`${rowId}-${columnId}`).value =
                            content.value;
                    });
                    // data.datacontents.map((content) => {
                    //     contentSplitted = content.label.split("-");
                    //     rowLabel = data.rows.find(
                    //         (row) => row.id == contentSplitted[1]
                    //     );

                    //     return `<tr>
                    //     <td>${rowLabel}</td>
                    //     <td>${content.value}</td>
                    //     </tr>`;
                    // });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    reject(errorThrown);
                },
            });
        }
    });
});
