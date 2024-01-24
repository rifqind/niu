function getMainData(datas) {
    return new Promise(function(resolve, reject) {
        $.ajax({
            type: "GET",
            url: updateDashboardURL.href,
            data: datas,
            success: function(response) {
                resolve(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                reject(errorThrown);
            },
        })
    })
}

function getChartData(datas) {
    return new Promise(function(resolve, reject) {
        $.ajax({
            type: "GET",
            url: updateDashboardURL.href,
            data: datas,
            success: function(response) {
                resolve(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                reject(errorThrown);
            },
        })
    })
}

function getPieChart(finalTabels, entriTabels, verifyTabels, repairTabels, newTabels) {
    var Data = [finalTabels, entriTabels, verifyTabels, repairTabels, newTabels];
    var Target = $('#pie-chart');

    const ChartData = {
        labels: [
            "Rilis",
            "Entri",
            "Periksa",
            "Perbaikan",
            "Tabel Baru"
        ],
        datasets: [{
            label: "Jumlah Tabel",
            data: Data,
            backgroundColor: [
                "green",
                "#03254e",
                "#f18f01",
                "red",
                "#7286a0",
            ],
            hoverOffset: 4,
            borderColor: [
                "white",
            ],
            borderWidth: [1, 1, 1, 1, 1, 1, 1]
        }]
    };

    var Charts = new Chart(Target, {
        type: "doughnut",
        data: ChartData,
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                    position: "bottom",
                    // font: "'Poppins', sans-serif"
                }
            }
        },
    });
}

document.addEventListener("DOMContentLoaded", function () {
    $("form").on("submit", function (e) {
        e.preventDefault();
        let datas = $(
            "#search-tabel :input:not(#dinas\\[\\]--1-chbx)"
        ).serialize();
        console.log(datas);
        $.ajax({
            beforeSend: function () {
                $("#spinner-border").removeClass("d-none");
            },
            complete: function () {
                setTimeout(function () {
                    $("#spinner-border").addClass("d-none");
                }, 320);
            },
            url: $(this).attr("action"),
            type: "GET",
            data: datas,
            success: function (data) {
                console.log(data);
                // $('#tabel-list').empty();
                $("#tabel-list").html(data);
            },
        });
    });
    $(".click-to-check").on("click", function (e) {
        let targetId = $(this).data("target");
        $("#" + targetId).prop("checked", function (_, checked) {
            return !checked;
        });
    });
});
