<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
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
        $dinas = Dinas::orderBy('nama')->get();
        foreach ($dinas as $din) {
            $din->number = $number;
            $number++;
        }
        $regions = Region::all();
        return view('dinas.index', [
            'dinas' => $dinas,
            'regions' => $regions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $regions = Region::all();
        return view('dinas.create', [
            'regions' => $regions
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->query('search');

        $dinas = Dinas::when($searchQuery, function ($query) use ($searchQuery) {
            return $query
                ->where('dinas.nama', 'like', '%' . $searchQuery . '%')
                ->orWhere('regions.nama', 'like', '%' . $searchQuery . '%');
        })
            ->leftJoin('regions', 'dinas.id_regions', '=', 'regions.id')
            ->orderBy('dinas.nama')
            ->get(['dinas.*', 'regions.nama as region_nama']);

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
            'id_regions' => $request->id_regions,
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
        $nama = $request->nama;
        $id_regions = $request->id_regions;

        Dinas::where('id', $id)->update([
            'nama' => $nama,
            'id_regions' => $id_regions,
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
