function getMainData(datas) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: "GET",
            url: updateDashboardURL.href,
            data: datas,
            success: function (response) {
                resolve(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                reject(errorThrown);
            },
        });
    });
}

function getChartData(datas) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: "GET",
            url: updateDashboardURL.href,
            data: datas,
            success: function (response) {
                resolve(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                reject(errorThrown);
            },
        });
    });
}

function getPieChart(
    finalTabels,
    entriTabels,
    verifyTabels,
    repairTabels,
    newTabels
) {
    var Data = [
        finalTabels,
        entriTabels,
        verifyTabels,
        repairTabels,
        newTabels,
    ];
    var Target = $("#pie-chart");

    const ChartData = {
        labels: ["Rilis", "Entri", "Periksa", "Perbaikan", "Tabel Baru"],
        datasets: [
            {
                label: "Jumlah Tabel",
                data: Data,
                backgroundColor: [
                    "green",
                    "#03254e",
                    "#f18f01",
                    "#8B1E3F",
                    "#7286a0",
                ],
                hoverOffset: 4,
                borderColor: ["white"],
                borderWidth: [1, 1, 1, 1, 1, 1, 1],
            },
        ],
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
                },
            },
        },
    });
}
document.addEventListener('DOMContentLoaded', function() {
    const statusMapping = {
        1: "badge-status-satu",
        2: "badge-status-dua",
        3: "badge-status-tiga",
        4: "badge-status-empat",
        5: "badge-status-lima"
    };
    var pieChartsHeight = $('#pie-charts').height();
    $('#percentage-progress').height(pieChartsHeight);
    $(".badges-status").each(function(e) {
        let status = $(this).data('status');
        $(this).addClass(statusMapping[status]);
    })
    $("form").on("submit", async function(e) {
        e.preventDefault();
        let datas = $("#search-dashboard").serialize();
        let datasArray = $("#search-dashboard").serializeArray();
        datasArray.push({
            name: "chart",
            value: "yes"
        });
        datasArray = $.param(datasArray);
        const MainData = await getMainData(datas);
        const ChartData = await getChartData(datasArray);
        if (MainData && ChartData) {
            $("#spinner-border").removeClass("d-none");
            setTimeout(() => {
                $('#update-dashboard').html(MainData);
                getPieChart(ChartData.finalTabels, ChartData.entriTabels, ChartData
                    .verifyTabels,
                    ChartData.repairTabels,
                    ChartData.newTabels);
                var pieChartsHeight = $('#pie-charts').height();
                $('#percentage-progress').height(pieChartsHeight);
                $(".badges-status").each(function(e) {
                    let status = $(this).data('status');
                    $(this).addClass(statusMapping[status]);
                })
                $("#spinner-border").addClass("d-none");

            }, 1500);
        }
    })
})