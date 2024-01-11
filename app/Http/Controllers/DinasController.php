<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\MasterWilayah;
use App\Models\Region;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $number = 1;
        $wilayah = MasterWilayah::getMyWilayah();
        $id_wilayah = MasterWilayah::getMyWilayahId();
        $kabs = $wilayah["kabs"];
        // dd($id_wilayah["kabs"]);
        $dinas = Dinas::orderBy('nama')->whereIn('wilayah_fullcode', $id_wilayah["kabs"])->get();
        foreach ($dinas as $din) {
            $din->number = $number;
            $number++;
        }

        return view('dinas.index', [
            'dinas' => $dinas,
            'kabs' => $kabs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $regions = Region::all();
        $wilayah = MasterWilayah::getMyWilayah();
        // $id_regions = Region::getRegionId();
        return view('dinas.create', [
            'kabs' => $wilayah["kabs"]
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->query('search');

        $dinas = Dinas::when($searchQuery, function ($query) use ($searchQuery) {
            return $query
                ->where('dinas.nama', 'like', '%' . $searchQuery . '%')
                ->orWhere('master_wilayah.label', 'like', '%' . $searchQuery . '%');
        })
            ->leftJoin('master_wilayah', 'dinas.wilayah_fullcode', '=', 'master_wilayah.wilayah_fullcode')
            ->orderBy('dinas.nama')
            ->get(['dinas.*', 'master_wilayah.label as region_nama']);

        $dinas->each(function ($din, $key) {
            $din->number = $key + 1;
        });
        // return view('dinas.index', compact('dinas'));
        return response()->json(['dinas' => $dinas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dinas = Dinas::create([
            'nama' => $request->nama,
            'wilayah_fullcode' => $request->wilayah_fullcode,
        ]);
        return response()->json('Berhasil');
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
    public function update(Request $request)
    {
        //
        $id = $request->id;

        Dinas::where('id', $id)->update([
            'nama' => $request->nama,
            'wilayah_fullcode' => $request->wilayah_fullcode,
        ]);
        return response()->json('Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        //
        $id = $request->id;
        Dinas::destroy($id);
        return response()->json('Berhasil Hapus');
    }
}
