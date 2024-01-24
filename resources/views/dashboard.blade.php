<x-niu-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <x-slot name="head">
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </x-slot>
    <x-slot name="breadcrumb">
    </x-slot>
    <form action="{{ route('dashboard.search') }}" id="search-dashboard">
        <div class="row mb-2">
            <div class="mr-1">
                <select name="year" class="form-control" id="year-select">
                    <option value="all">Pilih Semua</option>
                    @foreach ($years as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            @if (auth()->user()->role === 'admin')
                <div class="mr-1">
                    <select name="wilayah" class="form-control" id="wilayah-select">
                        <option value="all">Pilih Semua</option>
                        @foreach ($wilayah as $item)
                            <option value="{{ $item->wilayah_fullcode }}">{{ $item->label }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="mr-auto">
                <button type="submit" class="btn bg-info-fordone"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </form>
    <div id="update-dashboard">
        @include('update-dashboard')
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/home.js') }}"></script>
        <script>
            const statusMapping = {
                1: "badge-status-satu",
                2: "badge-status-dua",
                3: "badge-status-tiga",
                4: "badge-status-empat",
                5: "badge-status-lima"
            };
            const updateDashboardURL = new URL("{{ route('dashboard.search') }}")
            document.addEventListener('DOMContentLoaded', function() {

                getPieChart({{ $finalTabels }}, {{ $entriTabels }}, {{ $verifyTabels }}, {{ $repairTabels }},
                    {{ $newTabels }});

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
        </script>
    </x-slot>
</x-niu-layout>
