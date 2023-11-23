<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Models\Datacontent;
use App\Models\Row;
use App\Models\Tabel;
use Illuminate\Http\Request;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tabel = Tabel::all();
        return view('tabel.test', [
            'tabel' => $tabel
        ]);
    }

    public function getDatacontent(Request $request){
        $tabel_id = $request->query('tabel_id');
        $data = Datacontent::where('label', 'LIKE', $tabel_id.'%')->get();
        $id_rows = [];
        $id_columns = [];
        foreach($data as $dat){
            $split = explode("-", $dat->label);
            array_push($id_rows, $split[1]);
            array_push($id_columns, $split[2]);
            $tahun = $split[3];
            $turtahuns = $split[4];
        }
        $tabels = Tabel::where('id', $tabel_id)->get();
        $rows = Row::whereIn('id', $id_rows)->get();
        $columns = Column::whereIn('id', $id_columns)->get();

        return response()->json([
            'datacontents' => $data,
            'tabels' => $tabels,
            'rows' => $rows,
            'columns' => $columns,
            'tahun' => $tahun,
            'turtahuns' => $turtahuns,
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
