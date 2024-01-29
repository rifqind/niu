<?php

namespace App\Http\Controllers;

use App\Models\MasterWilayah;
use App\Models\MetadataVariabel;
use App\Models\MetadataVariabelStatus;
use App\Models\Tabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

    public function lists(string $id)
    {
        $decryptedId = Crypt::decrypt($id);
        $this_metavar = MetadataVariabel::where('id_tabel', $decryptedId)->get();
        $judul = Tabel::where('id', $decryptedId)->pluck('label');
        $satuan = Tabel::where('id', $decryptedId)->pluck('unit');
        return view('metadata_variabel.list', [
            'metavars' => $this_metavar,
            'judul' => $judul,
            'satuan' => $satuan,
            'id' => $id,
        ]);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'r101' => 'required',
            'r102' => 'required',
            'r103' => 'required',
            'r104' => 'required',
            'r105' => 'required',
            'r106' => 'required',
            'r107' => 'required',
            'r108' => 'required',
            'r109' => 'required',
            'r110' => 'required',
            'r111' => 'required',
            'r112' => 'required',
        ]);
        $id_tabel = decrypt($request->id_tabel);
        $metavar = MetadataVariabel::create([
            'id_tabel' => $id_tabel,
            'r101' => $request->r101,
            'r102' => $request->r102,
            'r103' => $request->r103,
            'r104' => $request->r104,
            'r105' => $request->r105,
            'r106' => $request->r106,
            'r107' => $request->r107,
            'r108' => $request->r108,
            'r109' => $request->r109,
            'r110' => $request->r110,
            'r111' => $request->r111,
            'r112' => $request->r112,
        ]);
        return response()->json([
            'message' => 'Berhasil',
            'data' => $metavar,
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
