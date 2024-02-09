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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    </x-slot>
    <x-slot name="breadcrumb">
    </x-slot>
    <form action="{{ route('dashboard.search') }}" id="search-dashboard">
        @csrf
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
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script nonce="{{ Vite::cspNonce() }}">
            const updateDashboardURL = new URL("{{ route('dashboard.search') }}")
            document.addEventListener('DOMContentLoaded', function() {
                getPieChart({{ $finalTabels }}, {{ $entriTabels }}, {{ $verifyTabels }}, {{ $repairTabels }},
                    {{ $newTabels }});
                    
                var pieChartsHeight = $('#pie-charts').height();
                $('#percentage-progress').height(pieChartsHeight);
            })
        </script>
    </x-slot>
</x-niu-layout>
