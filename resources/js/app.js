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

// Import SweetAlert2
import Swal from "sweetalert2";
window.Swal = Swal;

// Import toastr
import toastr from "toastr";
window.toastr = toastr;

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
        width: "100%",
    });
    $(".select2bs4-select").select2({
        theme: "bootstrap4",
        width: "100%",
        multiple: true,
    });
    // $("#dinas-select").filterMultiSelect({
    //     placeholderText: "Pilih Dinas",
    // });
    // $("#tahun-select").filterMultiSelect({
    //     placeholderText: "Pilih Tahun",
    // });
});
