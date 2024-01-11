<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTabelRequest;
use App\Models\Column;
use App\Models\ColumnGroup;

use App\Models\Datacontent;
use App\Models\Dinas;
use App\Models\MasterDesa;
use App\Models\MasterWilayah;
use App\Models\Region;
use App\Models\Row;
use App\Models\Tabel;
use App\Models\Rowlabel;
use App\Models\Statustables;
use App\Models\Subject;
use App\Models\Turtahun;
use App\Models\TurTahunGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Expr\Cast\Array_;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tables = Statustables::join('tabels', 'statustables.id_tabel', 'tabels.id')
            ->join('status_desc as sdesc', 'sdesc.id', '=', 'statustables.status')
            ->select('tabels.*', 'statustables.tahun', 'sdesc.label as status', 'statustables.id as id_statustables')

            ->get();
        $table_objects = [];
        $daftar_region = Region::get();
        foreach ($tables as $table) {
            // $tabels = Statustables::where('id_tabel', $table->id)
            //     ->join('tabels AS t', 'statustables.id_tabel', '=', 't.id')
            //     ->join('status_desc as sdesc', 'sdesc.id', '=', 'statustables.status')
            //     ->select('t.*', 'statustables.tahun', 'sdesc.label as status')
            //     ->get();
            $datacontents = Datacontent::where('id_tabel', $table->id)->get();

            $id_rows = [];
            $id_columns = [];
            foreach ($datacontents as $datacontent) {
                $split = explode("-", $datacontent->label);
                array_push($id_rows, $datacontent->id_row);
                array_push($id_columns, $datacontent->id_column);
            }
            $rows = Row::whereIn('id', $id_rows)->get();
            try {
                //code...
                $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
            } catch (\Exception $e) {
                return response()->json(array('error' => $e->getMessage(), 'tersangka' => $table->id, 'rows' => $rows));
            }
            $columns = Column::whereIn('id', $id_columns)->get();
            array_push($table_objects, [
                'datacontents' => $datacontents,
                'label' => $table->label,
                'id' => $table->id,
                'rows' => $rows,
                'row_label' => $rowLabel,
                'columns' => $columns,
                'tahun' => $table->tahun,
                // 'turtahuns' => $turtahuns,
                'status' => $table->status,
                'id_statustables' => $table->id_statustables,
            ]);
        }

        // dd($tables);

        return view('tabel.index', [
            'tables' => $table_objects,

        ]);
    }
    public function master()
    {
        //
        $tables = Tabel::get();
        // return response()->json(array('data' => $tables));
        $table_objects = [];
        $daftar_region = Region::get();
        foreach ($tables as $table) {
            // $tabels = Statustables::where('id_tabel', $table->id)
            //     ->join('tabels AS t', 'statustables.id_tabel', '=', 't.id')
            //     ->join('status_desc as sdesc', 'sdesc.id', '=', 'statustables.status')
            //     ->select('t.*', 'statustables.tahun', 'sdesc.label as status')
            //     ->get();
            $datacontents = Datacontent::where('id_tabel', $table->id)->get();

            $id_rows = [];
            $tahunObjects = Statustables::where('id_tabel', $table->id)->select('tahun')->distinct()->get();

            $tahuns = $tahunObjects->pluck('tahun')->toArray();
            $id_columns = [];
            foreach ($datacontents as $datacontent) {
                // $split = explode("-", $datacontent->label);
                array_push($id_rows, $datacontent->id_row);

                array_push($id_columns, $datacontent->id_column);

                // $turtahuns = $split[4];
            }
            $rows = Row::whereIn('id', $id_rows)->get();
            try {
                //code...
                $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
            } catch (\Exception $e) {
                // return response()->json(array('data' => $tables));
                return response()->json(array('error' => $e->getMessage(), 'tersangka' => $table->id, 'data' => $datacontents));
            }
            $columns = Column::whereIn('id', $id_columns)->get();
            array_push($table_objects, [
                'datacontents' => $datacontents,
                'label' => $table->label,
                'id' => $table->id,
                'rows' => $rows,
                'row_label' => $rowLabel,
                'columns' => $columns,
                'tahuns' => $tahuns,
                // 'turtahuns' => $turtahuns,
                'status' => $table->status,
                'id_statustables' => $table->id_statustables,
            ]);
        }

        // dd($tables);

        return view('tabel.master', [
            'tables' => $table_objects,

        ]);
    }
    public function test()
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

        // nyari kabupaten
        $kabupatens = MasterWilayah::where('desa', 'like', '000')->where('kec', 'like', '000')->where('kab', 'not like', '00')->select(['wilayah_fullcode', 'label'])->get();

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
            'kabupatens' => $kabupatens
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert table
        $newTable = Tabel::create($request->table);
        $id_dinas = $request->table["id_dinas"];
        //debatable
        $wilayah_fc = Dinas::where('id', $id_dinas)->pluck("wilayah_fullcode");
        $periodes = Turtahun::where('type', $request->periode['periode'])->get();
        // generate datacontents
        $data_contents = [];
        $is_wilayah = $request->rows['tipe_row'] == 1;
        foreach ($request->rows["rows_selected"] as $row) {
            foreach ($request->columns["columns"] as $column) {
                foreach ($periodes as $period) {

                    // $datacode = $newTable->id . "-" . $row . "-" . $column . "-" . $request->periode["tahun"] . "-" . $period->id;
                    $datacontent = [
                        'id_tabel' => $newTable->id,
                        'id_row' =>  $is_wilayah ? 0 : $row,
                        'id_column' => $column,
                        'tahun' => $request->periode['tahun'],
                        'id_turtahun' => $period->id,
                        'wilayah_fullcode' =>  $is_wilayah ? (string) $row : (string) $wilayah_fc,

                    ];
                    $datavalue = "";
                    array_push($data_contents, $datacontent);
                }
            }
        }

        Datacontent::insert($data_contents);
        Statustables::create(
            [
                'id_tabel' => $newTable->id,
                'tahun' => $request->periode['tahun'],
                'status' => 1
            ]
        );
        return response()->json([
            "column" => $request->columns,
            "periode" => $request->periode,
            "row" => $request->rows,
            "table" => $request->table,
            'dat' => $data_contents
        ]);
    }
    public function copy($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $tabel = Tabel::where('id', $decryptedId)->firstOrFail();

        // $rowLabel = RowLabel::get();
        // $daftar_dinas = Dinas::get();
        // $daftar_kolom = Column::get();
        // $kolom_grup = ColumnGroup::get();
        // $subjects = Subject::all();
        // $turtahun_groups = TurTahunGroup::all();

        // $row_list = $this->get_rows_by_row_labels(1);

        return view('tabel.copy', [
            'table' => $tabel,
            'id' => $id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCopy(Request $request, $id)
    {
        $decryptedId = Crypt::decrypt($id);
        $tabel = Tabel::where('id', $decryptedId)->first();
        if (!$tabel) {
            return back()->with('error', 'Tabel tidak dapat Ditemukan !');
        }
        // cek if year already exists
        $tabelStatus = Statustables::where('id_tabel', $decryptedId)
            ->where('tahun', $request->tahun)
            ->first();
        if ($tabelStatus) {
            return back()->with('error', 'Tabel dengan tahun yang sama sudah dibuat !' . $request->tahun);
        }

        // get first year entry
        $firstStatus = Statustables::where('id_tabel', $decryptedId)
            ->first();
        // get data contents by tahun and id
        $pattern = $decryptedId . '-%-' . $firstStatus->tahun . '-%';
        $dataContents = Datacontent::where('label', 'like', $pattern)->get();
        $newDataContents = [];
        foreach ($dataContents as $record) {

            $splittedData = explode('-', $record->label);
            $splittedData[3] = $request->tahun;
            $joinedData = implode('-', $splittedData);
            array_push($newDataContents, ['label' => $joinedData, 'value' => '']);
        }
        // add new record in statustabel 
        try {
            $newStatus = Statustables::create([
                'id_tabel' => $decryptedId,
                'tahun' => $request->tahun,
                'status' => '1'
            ]);
            Datacontent::insert($newDataContents);
            return redirect(route('tabel.master'))->with('success', 'Berhasil Menyalin Tabel !');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $decryptedId = Crypt::decrypt($id);
        // $tabel = Tabel::where('id', $decryptedId)->first();
        // $statusTabel = Statustables::join('tabels AS t','t.id','statustables.id_tabel')
        // ->select('statustables')
        $statusTabel = Statustables::join('tabels as t', 'statustables.id_tabel', 't.id')
            ->join('status_desc as sdesc', 'sdesc.id', '=', 'statustables.status')
            ->select('t.id as id_tabel', 't.label as judul_tabel', 'statustables.tahun', 'sdesc.label as status', 'statustables.id as id_statustables')
            ->where('statustables.id', $decryptedId)->first();


        $id_tabel = $statusTabel->id_tabel;
        $tahun = $statusTabel->tahun;

        // $pattern = $id_tabel . '-%-' . $tahun . '-%';

        $datacontents = Datacontent::where('id_tabel', $id_tabel)->where('tahun', $tahun)->get();
        // return response()->json(['data' => $datacontents, 'pattern' => $pattern, 'id_status' => $decryptedId]);
        $id_rows = [];
        $wilayah_fullcodes = [];
        $id_columns = [];
        $tahuns = [];
        $turTahunKeys = [];

        foreach ($datacontents as $datacontent) {
            $split = explode("-", $datacontent->label);

            array_push($id_rows, $datacontent->id_row);
            array_push($id_columns, $datacontent->id_column);
            array_push($tahuns, $datacontent->tahun);
            array_push($turTahunKeys, $datacontent->id_turtahun);

            array_push($wilayah_fullcodes, $datacontent->wilayah_fullcode);
        }
        // $tabels = Tabel::where('id', $id)->get();

        $rows = Row::whereIn('id', $id_rows)->get();
        $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
        if ($rows[0]->id == 0) {

            $rowLabel = MasterWilayah::whereIn('wilayah_fullcode', $wilayah_fullcodes)->get();
            $rows = $rowLabel;
            //belum beres
        }

        $columns = Column::whereIn('id', $id_columns)->get();
        $tahuns = array_unique($tahuns);
        sort($tahuns);
        // $turtahuns = array_unique($turtahuns);
        // sort($turtahuns);
        $turtahuns = Turtahun::whereIn('id', $turTahunKeys)->get();


        // return response()->json(array('rows' => $tahuns));
        return view('tabel.show', [
            'datacontents' => $datacontents,
            // 'tabels' => $tabels,
            'encryptedId' => $id,
            'tahuns' => $tahuns,
            'rows' => $rows,
            'row_label' => $rowLabel,
            'columns' => $columns,
            'turtahuns' => $turtahuns,
            'tabel' => $statusTabel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $decryptedId = Crypt::decrypt($id);
        $tabel = Tabel::where('id', $decryptedId)->first();
        // search for id row label
        $data_contents = DataContent::where('id_tabel', 'like', $decryptedId)->first();
        // $splittedData = explode("-", $data_contents->label);
        // $id_row = $splittedData[1];

        // // search for id column group
        // $id_column = $splittedData[2];

        // //search for turtahun
        // $id_turtahun = $splittedData[4];



        // $rowLabel = RowLabel::get();
        // $row_label = Rowlabel::where('id', $id_row)->first();
        $daftar_dinas = Dinas::get();
        // $daftar_kolom = Column::get();
        // $kolom_grup = ColumnGroup::get();
        // $column = Column::where('id', $id_column)->first();
        $subjects = Subject::all();
        // $turtahun_groups = TurTahunGroup::all();
        // $turtahun = Turtahun::where('id', $id_turtahun)->first();

        // $row_list = $this->get_rows_by_row_labels(1);

        return view('tabel.edit', [
            'tabel' => $tabel,
            'encryptedId' => $id,
            // 'row_labels' => $rowLabel,
            // 'row_label' => $row_label,
            'daftar_dinas' => $daftar_dinas,
            // 'daftar_kolom' => $daftar_kolom,
            // 'column' => $column,
            // 'turtahun_groups' => $turtahun_groups,
            // 'turtahun' => $turtahun,
            // // 'row_list' => $row_list,
            // 'kolom_grup' => $kolom_grup,
            'subjects' => $subjects,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreUpdateTabelRequest $request, $id)
    {
        try {
            $data = $request->validated();
            $decryptedId = Crypt::decrypt($id);
            $dataUpdate = [
                'id_dinas' => $data['dinas'],
                'nomor' => $data['nomor'],
                'label' => $data['judul'],
                'id_subjek' => $data['subject'],
                'unit' => $data['unit'],
            ];


            $tabel = Tabel::findOrFail($decryptedId);
            $tabel->update($dataUpdate);


            return redirect(route('tabel.master'))->with('success', 'Berhasil menyimpan perubahan !');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }



        // Update records in a single query
        foreach ($data as $item) {

            Datacontent::where('id', $item['id'])->update($item);
        }
        return response()->json($data);
        $data = $request->data;


        // Update records in a single query
        foreach ($data as $item) {

            Datacontent::where('id', $item['id'])->update($item);
        }
        return response()->json($data);
    }

    public function update_content(Request $request)
    {
        $data = $request->data;


        // Update records in a single query
        foreach ($data as $item) {

            Datacontent::where('id', $item['id'])->update($item);
        }
        return response()->json($data);
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
    public function destroy(string $id_status)
    {
        $decryptedId = Crypt::decrypt($id_status);

        try {
            // cek apakah ada tabel statusnya
            $statusTabel = Statustables::where('id', $decryptedId)->first();
            $tahun = $statusTabel->tahun;
            $id_tabel = $statusTabel->id_tabel;


            // hapus tabel status
            $statusTabel->delete();

            // query datacontent
            $pattern = $id_tabel . '-%-' . $tahun . '-%';
            $dataContents = Datacontent::where('label', 'like', $pattern);

            // hapus datacontent
            $dataContents->delete();
            // return sukses
            return redirect(route('tabel.index'))->with('success', 'Berhasil menghapus Tabel !');
        } catch (\Exception $e) {
            return response()->json(['status' => $e->getMessage()]);
            return back()->with('error', $e->getMessage());
        }
    }
    public function fetchMasterKecamatan($kab)
    {
        $daftar_kecamatan = MasterWilayah::where('kab', 'like', $kab)->where('kec', 'not like', '000')->where('desa', 'like', '000')->get();
        return response()->json([
            'data' => $daftar_kecamatan,
            'status_code' => 200
        ]);
    }
    public function fetchMasterDesa($kec)
    {
        $daftar_desa = MasterWilayah::where('kec', 'like', $kec)->where('kec', 'not like', '000')->where('desa', 'not like', '000')->get();
        return response()->json([
            'data' => $daftar_desa,
            'status_code' => 200
        ]);
    }
}