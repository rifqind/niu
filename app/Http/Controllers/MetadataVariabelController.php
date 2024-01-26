<?php

namespace App\Http\Controllers;

use App\Models\MasterWilayah;
use App\Models\MetadataVariabel;
use App\Models\MetadataVariabelStatus;
use App\Models\Tabel;
use Illuminate\Http\Request;

class MetadataVariabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $id_wilayah = MasterWilayah::getMyWilayahId();
        $this_dinas = auth()->user()->id_dinas;
        $this_role = auth()->user()->role;

        if ($this_role == 'produsen') {
            # code...
            $tabels = Tabel::where('id_dinas', $this_dinas)->get();
        } else {
            $tabels = Tabel::whereIn('dinas.wilayah_fullcode', $id_wilayah["kabs"])
                ->join('dinas', 'tabels.id_dinas', '=', 'dinas.id')
                ->leftJoin('metadata_variabel_status as mtv', 'mtv.id_tabel', '=', 'tabels.id')
                ->leftJoin('status_desc as sdc', 'sdc.id', '=', 'mtv.status')
                ->get(['tabels.*', 'dinas.nama as nama_dinas', 'sdc.label as status_desc']);
        }
        foreach ($tabels as $tabel) {
            # code...
            $checkMetavar = MetadataVariabelStatus::where('id_tabel', $tabel->id)->first();
            if (!$checkMetavar) {
                # code...
                $tabel->status_metavar = '0';
            } else {
                $tabel->status_metavar = $checkMetavar->status;
            }
        }
        return view('metadata_variabel.index', [
            'tabels' => $tabels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
