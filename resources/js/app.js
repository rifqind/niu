// Import jQuery
import jQuery from "jquery";

window.$ = window.jQuery = jQuery.noConflict(true);
var formCreateTable = {};

// import $ from "jquery";
// window.$ = window.jQuery = $;

// Import Bootstrap's JavaScript
import "bootstrap";

// Import AdminLTE's JavaScript
import "admin-lte";

// // Import SweetAlert2
// import Swal from "sweetalert2";
// window.Swal = Swal;

// // Import toastr
// import toastr from "toastr";
// window.toastr = toastr;

// Import Select2
import select2 from "select2";

// Import Alpine.js
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();
select2();

import FilterMultiSelect from "./filter-multi-select-bundle.min.js";
FilterMultiSelect($);

// Import your custom scripts here

// Initialize any code that relies on jQuery after the document is ready
document.addEventListener("DOMContentLoaded", function () {
    // console.log($);
    $(".select2").select2();

    //Initialize Select2 Elements
    $(".select2bs4").select2({
        theme: "bootstrap4",
        // width: "100%",
    });
    function sortTableByColumn(table, column, asc = true) {
        let dirModifier = asc ? 1 : -1;
        let tBody = table.tBodies[0];
        let rows = Array.from(tBody.querySelectorAll("tr"));

        // Sort each row
        const sortedRows = rows.sort((a, b) => {
            const aColText = a
                .querySelector(`td:nth-child(${column + 1})`)
                .textContent.toLowerCase()
                .trim();
            const bColText = b
                .querySelector(`td:nth-child(${column + 1})`)
                .textContent.toLowerCase()
                .trim();

            return aColText > bColText ? 1 * dirModifier : -1 * dirModifier;
        });

        // Remove all existing TRs from the table
        while (tBody.firstChild) {
            tBody.removeChild(tBody.firstChild);
        }

        // Re-add the newly sorted rows
        tBody.append(...sortedRows);

        // Remember how the column is currently sorted
        table
            .querySelectorAll("th")
            .forEach((th) =>
                th.classList.remove("th-sort-asc", "th-sort-desc")
            );
        table
            .querySelector(`th:nth-child(${column + 1})`)
            .classList.toggle("th-sort-asc", asc);
        table
            .querySelector(`th:nth-child(${column + 1})`)
            .classList.toggle("th-sort-desc", !asc);
    }

    document.querySelectorAll(".table-sorted th").forEach((headerCell) => {
        headerCell.addEventListener("click", () => {
            const tableElement =
                headerCell.parentElement.parentElement.parentElement;
            const headerIndex = Array.prototype.indexOf.call(
                headerCell.parentElement.children,
                headerCell
            );
            const currentIsAscending =
                headerCell.classList.contains("th-sort-asc");

            sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
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
            // console.log(searchQuery);
            document.querySelectorAll(".table-search tbody tr").forEach((row) => {
                row.style.display = ""; // Show the row
            });
            if (inputField.value === '')  {
                document.querySelectorAll(".table-search tbody tr").forEach((row, index) => {
                    if (index >= document.getElementById('maxRows').value) {
                        row.style.display = "none"; // Show the row
                    } // Show the row
                });
            }
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
    // $(".select2bs4-select").select2({
    //     theme: "bootstrap4",
    //     width: "100%",
    //     multiple: true,
    // });
});
