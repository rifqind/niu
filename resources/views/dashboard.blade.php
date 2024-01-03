<x-niu-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <x-slot name="head">

    </x-slot>
    <x-slot name="breadcrumb">
        
    </x-slot>
    <div class="d-flex justify-content-around">
        <div class="card mr-1" style="width: 20rem;">
            <div class="card-body h-100" style="border-left:4px solid #7286a0;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-bold" style="color:#7286a0;">TOTAL TABEL</div>
                        <div>JUMLAHNYA</div>
                    </div>
                    <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-bars-staggered" style="color:#7286a0"></i></div>
                </div>
            </div>
        </div>
        <div class="card mr-1" style="width: 20rem;">
            <div class="card-body h-100" style="border-left:4px solid #03254e;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-bold" style="color:#03254e;">DALAM PROSES ENTRI</div>
                        <div>JUMLAHNYA</div>
                    </div>
                    <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-pen-nib" style="color:#03254e"></i></div>
                </div>
            </div>
        </div>
        <div class="card mr-1" style="width: 20rem;">
            <div class="card-body h-100" style="border-left:4px solid #f18f01;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-bold" style="color:#f18f01;">DIPERIKSA</div>
                        <div>JUMLAHNYA</div>
                    </div>
                    <div class="col-auto align-middle"><i class="fa-regular fa-2x fa-hourglass-half" style="color:#f18f01"></i></div>
                </div>
            </div>
        </div>
        <div class="card mr-1" style="width: 20rem;">
            <div class="card-body h-100" style="border-left:4px solid red;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-bold" style="color:red;">PERLU PERBAIKAN</div>
                        <div>JUMLAHNYA</div>
                    </div>
                    <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-screwdriver-wrench" style="color:red;"></i></div>
                </div>
            </div>
        </div>
        <div class="card mr-1" style="width: 20rem;">
            <div class="card-body h-100" style="border-left:4px solid green;">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-bold" style="color:green;">RILIS</div>
                        <div>JUMLAHNYA</div>
                    </div>
                    <div class="col-auto align-middle"><i class="fa-solid fa-2x fa-check-double" style="color:green;"></i></div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">

    </x-slot>
</x-niu-layout>
