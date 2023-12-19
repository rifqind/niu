<?php

namespace App\Http\Controllers;

use App\Models\ColumnGroup;
use App\Http\Requests\StoreColumnGroupRequest;
use App\Http\Requests\UpdateColumnGroupRequest;

class ColumnGroupController extends Controller
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
        return view('column_group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColumnGroupRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $insertedRow = ColumnGroup::create($validatedData);
        return redirect(route('column.index'))->with(['success' => 'columnBerhasil menambahkan kelompok kolom  ' . $validatedData['label']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ColumnGroup $columnGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ColumnGroup $columnGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColumnGroupRequest $request, ColumnGroup $columnGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ColumnGroup $columnGroup)
    {
        //
    }
}
