<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Http\Requests\StoreColumnRequest;
use App\Http\Requests\UpdateColumnRequest;
use Illuminate\Http\Request;

class ColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get the resource
        // $columns = Column::join('column_groups', 'columns.id_column_group', 'column_groups.id')->select('columns.id', 'columns.label', 'column_groups.label as tipe')->get();
        $columns = Column::all();
        return view('columns.index', ['columns' => $columns]);
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
    public function store(StoreColumnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Column $column)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Column $column)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColumnRequest $request, Column $column)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Column $column)
    {
        //
    }
    public function fetch(Request $request)
    {
        $id_columnGroups = $request->query('id_columnGroups');
        // $response_data = Column::join('column_groups', 'columns.id_columns_group', '=', 'column_groups.id')
        //     ->where('columns.id_columns_group', $id_columnGroups) // tbd
        //     ->select('columns.id', 'columns.label', 'column_groups.label as tipe')
        //     ->get();

        $response_data = Column::where('columns.id_column_group', $id_columnGroups)
            ->leftJoin('column_groups', 'columns.id_column_group', '=', 'column_groups.id')
            ->get(['columns.*', 'column_groups.label as tipe']);
        return response()->json(['data' => $response_data, 'status' => 200]);
    }
}
