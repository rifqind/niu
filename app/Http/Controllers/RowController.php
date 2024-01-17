<?php

namespace App\Http\Controllers;

use App\Models\Row;
use App\Http\Requests\StoreRowRequest;
use App\Http\Requests\UpdateRowRequest;
use App\Models\Rowlabel;
use Illuminate\Http\Request as HttpRequest;

class RowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Row::all();
        return view('rows.index', [
            'rows' => $rows
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowLabels = Rowlabel::get();
        return view('rows.create', [
            'rowLabels' => $rowLabels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Row $row)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Row $row)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRowRequest $request, Row $row)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Row $row)
    {
        //
    }
    public function fetch(HttpRequest $request)
    {
        $id_rowLabels = $request->query('id_rowLabels');
        $response_data = Row::join('rowlabels', 'rows.id_rowlabels', '=', 'rowlabels.id')
            ->where('rows.id_rowlabels', $id_rowLabels) // tbd
            ->select('rows.id', 'rows.label', 'rowlabels.label as tipe')
            ->get();
        return response()->json(['data' => $response_data, 'status' => 200]);
    }
}
