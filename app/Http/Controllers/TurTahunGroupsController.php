<?php

namespace App\Http\Controllers;

use App\Models\TurTahunGroup;
use App\Http\Requests\StoreTurTahunGroupRequest;
use App\Http\Requests\UpdateTurTahunGroupRequest;
use App\Models\Turtahun;
use Illuminate\Http\Request;

class TurTahunGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreTurTahunGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TurTahunGroup $turTahunGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TurTahunGroup $turTahunGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTurTahunGroupRequest $request, TurTahunGroup $turTahunGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TurTahunGroup $turTahunGroup)
    {
        //
    }
    public function fetch(Request $request)
    {
        $id = $request->query('id_turtahunGroup');

        $turtahuns = Turtahun::join('turtahun_groups', 'turtahuns.type', 'turtahun_groups.id')->select('turtahuns.id', 'turtahuns.label', 'turtahun_groups.label as tipe')->where('type', $id)->get();

        return response()->json([
            'data' => $turtahuns,
            'status' => 200
        ]);
    }
}
