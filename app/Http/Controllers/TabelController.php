<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Models\ColumnGroup;
use App\Models\Datacontent;
use App\Models\Dinas;
use App\Models\Region;
use App\Models\Row;
use App\Models\Tabel;
use App\Models\Rowlabel;
use App\Models\Subject;
use App\Models\Turtahun;
use App\Models\TurTahunGroup;
use Illuminate\Http\Request;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tables = Tabel::all();
        $table_objects = [];
        $daftar_region = Region::get();
        foreach ($tables as $table) {
            $tabels = Tabel::where('id', $table->id)->get();
            $data = Datacontent::where('label', 'LIKE', $table->id . '%')->get();

            $id_rows = [];
            $id_columns = [];
            foreach ($data as $dat) {
                $split = explode("-", $dat->label);
                array_push($id_rows, $split[1]);
                array_push($id_columns, $split[2]);
                $tahun = $split[3];
                $turtahuns = $split[4];
            }
            $rows = Row::whereIn('id', $id_rows)->get();
            $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
            $columns = Column::whereIn('id', $id_columns)->get();
            array_push($table_objects, [
                'datacontents' => $data,
                'tabels' => $tabels,
                'rows' => $rows,
                'row_label' => $rowLabel,
                'columns' => $columns,
                'tahun' => $tahun,
                'turtahuns' => $turtahuns,
            ]);
        }


        return view('tabel.index', [
            'tables' => $table_objects,
        ]);
    }
    public function test()
    {
        //
        $tabel = Tabel::all();
        return view('tabel.test', [
            'tabel' => $tabel
        ]);
    }

    public function getDatacontent(Request $request)
    {
        $tabel_id = $request->query('tabel_id');
        $data = Datacontent::where('label', 'LIKE', $tabel_id . '%')->get();
        $id_rows = [];
        $id_columns = [];
        foreach ($data as $dat) {
            $split = explode("-", $dat->label);
            array_push($id_rows, $split[1]);
            array_push($id_columns, $split[2]);
            $tahun = $split[3];
            $turtahuns = $split[4];
        }
        $tabels = Tabel::where('id', $tabel_id)->get();
        $rows = Row::whereIn('id', $id_rows)->get();
        $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
        $columns = Column::whereIn('id', $id_columns)->get();

        return response()->json([
            'datacontents' => $data,
            'tabels' => $tabels,
            'rows' => $rows,
            'row_label' => $rowLabel,
            'columns' => $columns,
            'tahun' => $tahun,
            'turtahuns' => $turtahuns,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function get_rows_by_row_labels($id_rowLabels)
    {
        return Row::join('rowlabels', 'rows.id_rowlabels', '=', 'rowlabels.id')
            ->where('rows.id_rowlabels', $id_rowLabels) // tbd
            ->select('rows.id', 'rows.label', 'rowlabels.label as tipe')
            ->get();
    }
    public function create()
    {
        $tabel = Tabel::all();
        $rowLabel = RowLabel::get();
        $daftar_dinas = Dinas::get();
        $daftar_kolom = Column::get();
        $kolom_grup = ColumnGroup::get();
        $subjects = Subject::all();
        $turtahun_groups = TurTahunGroup::all();

        // $row_list = $this->get_rows_by_row_labels(1);

        return view('tabel.create', [
            'tabel' => $tabel,
            'row_labels' => $rowLabel,
            'daftar_dinas' => $daftar_dinas,
            'daftar_kolom' => $daftar_kolom,
            'turtahun_groups' => $turtahun_groups,
            // 'row_list' => $row_list,
            'kolom_grup' => $kolom_grup,
            'subjects' => $subjects,

        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert table
        $newTable = Tabel::create($request->table);
        $periodes = Turtahun::where('type', $request->periode['periode'])->get();
        // generate datacontents
        $data_contents = [];
        foreach ($request->rows["rows_selected"] as $row) {
            foreach ($request->columns["columns"] as $column) {
                foreach ($periodes as $period) {

                    $datacode = $newTable->id . "-" . $row . "-" . $column . "-" . $request->periode["tahun"] . "-" . $period->id;
                    $datavalue = "";
                    array_push($data_contents, ["label" => $datacode, 'value' => $datavalue]);
                }
            }
        }
        Datacontent::insert($data_contents);
        return response()->json([
            "column" => $request->columns,
            "periode" => $request->periode,
            "row" => $request->rows,
            "table" => $request->table,
            'dat' => $data_contents
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tabel = Tabel::where('id', $id)->first();;


        $data = Datacontent::where('label', 'LIKE', $id . '-%')->get();
        $id_rows = [];
        $id_columns = [];
        $tahuns = [];
        $turTahunKeys = [];

        foreach ($data as $dat) {
            $split = explode("-", $dat->label);

            array_push($id_rows, $split[1]);
            array_push($id_columns, $split[2]);
            array_push($tahuns, $split[3]);
            array_push($turTahunKeys, $split[4]);
        }
        // $tabels = Tabel::where('id', $id)->get();
        $rows = Row::whereIn('id', $id_rows)->get();
        $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
        $columns = Column::whereIn('id', $id_columns)->get();
        $tahuns = array_unique($tahuns);
        sort($tahuns);
        // $turtahuns = array_unique($turtahuns);
        // sort($turtahuns);
        $turtahuns = Turtahun::whereIn('id', $turTahunKeys)->get();



        return view('tabel.show', [
            'datacontents' => $data,
            // 'tabels' => $tabels,
            'tahuns' => $tahuns,
            'rows' => $rows,
            'row_label' => $rowLabel,
            'columns' => $columns,
            'turtahuns' => $turtahuns,
            'tabel' => $tabel
        ]);
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
        $data = $request->data;


        // Update records in a single query
        foreach ($data as $item) {

            Datacontent::where('id', $item['id'])->update($item);
        }
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
