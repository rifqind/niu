<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTabelRequest;
use App\Models\Catatan;
use App\Models\Column;
use App\Models\ColumnGroup;

use App\Models\Datacontent;
use App\Models\Dinas;
use App\Models\MasterWilayah;
use App\Models\Notifikasi;
use App\Models\Region;
use App\Models\Row;
use App\Models\Tabel;
use App\Models\Rowlabel;
use App\Models\Statustables;
use App\Models\Subject;
use App\Models\Turtahun;
use App\Models\TurTahunGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class TabelController extends Controller
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
        $routeName = Route::currentRouteName();
        // dd($id_wilayah["kabs"]);
        if ($this_role == 'produsen') {
            # code...
            $tables = Statustables::where('dinas.id', $this_dinas)
                ->where('statustables.status', ($routeName != 'tabel.deletedList') ? '<' : '=', '6')
                ->join('tabels', 'statustables.id_tabel', '=', 'tabels.id')
                ->join('status_desc as sdesc', 'sdesc.id', '=', 'statustables.status')
                ->join('dinas', 'tabels.id_dinas', '=', 'dinas.id')
                ->select(
                    'tabels.*',
                    'dinas.nama as nama_dinas',
                    'statustables.tahun',
                    'sdesc.label as status',
                    'statustables.id as id_statustables',
                    'statustables.updated_at as status_updated',
                    'statustables.edited_by as edited_by',
                )
                ->get();
        } else {
            $tables = Statustables::whereIn('dinas.wilayah_fullcode', MasterWilayah::getDinasWilayah())
                ->where('statustables.status', ($routeName != 'tabel.deletedList') ? '<' : '=', '6')
                ->join('tabels', 'statustables.id_tabel', '=', 'tabels.id')
                ->join('status_desc as sdesc', 'sdesc.id', '=', 'statustables.status')
                ->join('dinas', 'tabels.id_dinas', '=', 'dinas.id')
                ->select(
                    'tabels.*',
                    'dinas.nama as nama_dinas',
                    'statustables.tahun',
                    'sdesc.label as status',
                    'statustables.id as id_statustables',
                    'statustables.updated_at as status_updated',
                    'statustables.edited_by as edited_by',
                )
                ->get();
        }
        $table_objects = [];
        foreach ($tables as $table) {
            $datacontents = Datacontent::where('id_tabel', $table->id)->get();
            $id_rows = [];
            $id_columns = [];
            $wilayah_fullcodes = [];
            foreach ($datacontents as $datacontent) {
                $split = explode("-", $datacontent->label);
                array_push($id_rows, $datacontent->id_row);
                array_push($id_columns, $datacontent->id_column);
                array_push($wilayah_fullcodes, $datacontent->wilayah_fullcode);
            }
            $rows = Row::whereIn('id', $id_rows)->get();
            try {
                //code...
                if ($rows[0]->id == 0) {
                    // $wilayah_master = MasterWilayah::where('wilayah_fullcode','like',$wilayah_fullcodes[0]);
                    $wilayah_parent_code = '';
                    $jenis = "DAFTAR ";

                    $desa = substr($wilayah_fullcodes[0], 7, 3);
                    $kec = substr($wilayah_fullcodes[0], 4, 3);
                    $kab = substr($wilayah_fullcodes[0], 2, 2);
                    // dd($kec);
                    if ($desa != '000') {
                        $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 7) . '000';
                        $jenis = $jenis . "DESA DI ";
                    } else if ($kec != '000') {
                        $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 4) . '000' . '000';
                        $jenis = $jenis . "KECAMATAN DI ";
                    } else if ($kab != '00') {
                        $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 2) . '00' . '000' . '000';
                        $jenis = $jenis . "KABUPATEN DI ";
                    }
                    $rowLabel = $jenis . MasterWilayah::where('wilayah_fullcode', $wilayah_parent_code)->pluck('label')[0];
                    $rowLabel = strtolower($rowLabel);
                    $rowLabel = ucwords($rowLabel);
                } else {

                    $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->pluck('label')[0];
                }
            } catch (\Exception $e) {
                return response()->json(array('error' => $e->getMessage(), 'tersangka' => $table->id, 'rows' => $rows));
            }
            $columns = Column::whereIn('id', $id_columns)->get();
            $who_updated = User::where('id', $table->edited_by)->value('username');
            $when_updated = $table->status_updated;
            // $who_when_updated = $who_updated.' ('.$when_updated.')';
            array_push($table_objects, [
                // 'datacontents' => $datacontents,
                'label' => $table->label,
                'nama_dinas' => $table->nama_dinas,
                'id' => $table->id,
                'rows' => $rows,
                'row_label' => $rowLabel,
                'columns' => $columns,
                'tahun' => $table->tahun,
                // 'turtahuns' => $turtahuns,
                'status' => $table->status,
                'id_statustables' => $table->id_statustables,
                'status_updated' => $when_updated,
                'who_updated' => $who_updated,
            ]);
        }

        // dd($tables);

        return view('tabel.index', [
            'tables' => $table_objects,
            'role' => $this_role,

        ]);
    }
    public function master()
    {
        //
        $tables = Tabel::leftJoin('dinas', 'dinas.id', '=', 'tabels.id_dinas')
            ->whereIn('dinas.wilayah_fullcode', MasterWilayah::getDinasWilayah())
            ->get(['tabels.*']);
        // $tables = Tabel::get();
        // dd($tables);
        $table_objects = [];
        $daftar_region = Region::get();
        foreach ($tables as $table) {
            $datacontents = Datacontent::where('id_tabel', $table->id)->get();
            $id_rows = [];
            $tahunObjects = Statustables::where('id_tabel', $table->id)->select('tahun')->distinct()->get();

            $tahuns = $tahunObjects->pluck('tahun')->toArray();
            $id_columns = [];
            $wilayah_fullcodes = [];
            foreach ($datacontents as $datacontent) {
                // $split = explode("-", $datacontent->label);
                array_push($id_rows, $datacontent->id_row);
                array_push($id_columns, $datacontent->id_column);
                array_push($wilayah_fullcodes, $datacontent->wilayah_fullcode);

                // $turtahuns = $split[4];
            }
            $rows = Row::whereIn('id', $id_rows)->get();
            try {
                //code...
                if ($rows[0]->id == 0) {
                    // $wilayah_master = MasterWilayah::where('wilayah_fullcode','like',$wilayah_fullcodes[0]);
                    $wilayah_parent_code = '';
                    $jenis = "DAFTAR ";

                    $desa = substr($wilayah_fullcodes[0], 7, 3);
                    $kec = substr($wilayah_fullcodes[0], 4, 3);
                    $kab = substr($wilayah_fullcodes[0], 2, 2);
                    // dd($kec);
                    if ($desa != '000') {
                        $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 7) . '000';
                        $jenis = $jenis . "DESA DI ";
                    } else if ($kec != '000') {
                        $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 4) . '000' . '000';
                        $jenis = $jenis . "KECAMATAN DI ";
                    } else if ($kab != '00') {
                        $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 2) . '00' . '000' . '000';
                        $jenis = $jenis . "KABUPATEN DI ";
                    }
                    $rowLabel = $jenis . MasterWilayah::where('wilayah_fullcode', $wilayah_parent_code)->pluck('label')[0];
                    $rowLabel = strtolower($rowLabel);
                    $rowLabel = ucwords($rowLabel);
                } else {

                    $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->pluck('label')[0];
                }
            } catch (\Exception $e) {
                return response()->json(array('error' => $e->getMessage(), 'tersangka' => $table->id, 'rows' => $rows));
            }
            $columns = Column::whereIn('id', $id_columns)->get();
            array_push($table_objects, [
                'datacontents' => $datacontents,
                'label' => $table->label,
                'id' => $table->id,
                'nama_dinas' => $table->dinas->nama,
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
        $id_wilayah = MasterWilayah::getMyWilayahId();
        // dd($id_wilayah["kabs"]);
        $daftar_dinas = Dinas::orderBy('wilayah_fullcode')->orderBy('nama')->whereIn('wilayah_fullcode', MasterWilayah::getDinasWilayah())->get();
        // $daftar_dinas = Dinas::get();
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
        try {
            //code...
            DB::beginTransaction();
            $newTable = Tabel::create($request->table);
            $id_dinas = $request->table["id_dinas"];
            //debatable
            $wilayah_fc = Dinas::where('id', $id_dinas)->pluck("wilayah_fullcode");
            // dd($wilayah_fc[0]);
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
                            'wilayah_fullcode' =>  $is_wilayah ? (string) $row : (string) $wilayah_fc[0],

                        ];
                        $datavalue = "";
                        array_push($data_contents, $datacontent);
                    }
                }
            }
            $newStatusTables = Statustables::create(
                [
                    'id_tabel' => $newTable->id,
                    'tahun' => $request->periode['tahun'],
                    'status' => 1,
                    'edited_by' => auth()->user()->id,
                ]
            );
            Notifikasi::create([
                'id_statustabel' => $newStatusTables->id,
                'id_user' => auth()->user()->id,
                'komentar' => "Admin telah menambahkan tabel baru dengan judul ",
            ]);
            Datacontent::insert($data_contents);

            DB::commit();
        } catch (\Exception $e) {
            //throw $th;
            DB::rollBack();

            // Handle the exception (log it, show a user-friendly message, etc.)
            // For example, you can log the error:
            return response()->json($e);
            // Optionally, you may throw the exception again to be caught by Laravel's exception handler
            // throw $e;
        }

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
        // $pattern = $decryptedId . '-%-' . $firstStatus->tahun . '-%';
        // $dataContents = Datacontent::where('label', 'like', $pattern)->get();

        $oldDataContents = Datacontent::where('id_tabel', $firstStatus->id_tabel)
            ->where('tahun', $firstStatus->tahun)
            ->get();

        $newDataContents = [];
        foreach ($oldDataContents as $record) {
            // $splittedData = explode('-', $record->label);
            // $splittedData[3] = $request->tahun;
            // $joinedData = implode('-', $splittedData);
            array_push(
                $newDataContents,
                [
                    'value' => '',
                    'id_tabel' => $record->id_tabel,
                    'id_row' => $record->id_row,
                    'id_column' => $record->id_column,
                    'id_turtahun' => $record->id_turtahun,
                    'tahun' => $request->tahun,
                    'wilayah_fullcode' => $record->wilayah_fullcode,
                ]
            );
        }
        // add new record in statustabel 
        try {
            $newStatus = Statustables::create([
                'id_tabel' => $decryptedId,
                'tahun' => $request->tahun,
                'status' => '1',
                'edited_by' => auth()->user()->id,
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
            ->select(
                't.id as id_tabel',
                't.label as judul_tabel',
                'statustables.tahun',
                'statustables.status as status',
                'statustables.id as id_statustables',
                'sdesc.label as status_desc',
                'statustables.updated_at as status_updated',
            )
            ->where('statustables.id', $decryptedId)->first();

        $catatans = Catatan::where('id_statustabel', $decryptedId)->first();

        $id_tabel = $statusTabel->id_tabel;
        $tahun = $statusTabel->tahun;
        $status = $statusTabel->status;
        $roles = auth()->user()->role;
        $sdesc = $statusTabel->status_desc;

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
        // $tabels = Tabel::where('id', $id_tabel)->first();

        $rows = Row::whereIn('id', $id_rows)->get();
        $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
        try {
            //code...
            if ($rows[0]->id == 0) {
                // $wilayah_master = MasterWilayah::where('wilayah_fullcode','like',$wilayah_fullcodes[0]);
                $wilayah_parent_code = '';
                $jenis = "DAFTAR ";
                $temp = MasterWilayah::whereIn('wilayah_fullcode', $wilayah_fullcodes)
                    ->orderByRaw("CASE WHEN desa = '000' THEN 1 ELSE 0 END")
                    ->orderBy('desa')
                    ->get();
                $rows = $temp;
                // dd($rows);
                $desa = substr($wilayah_fullcodes[0], 7, 3);
                $kec = substr($wilayah_fullcodes[0], 4, 3);
                $kab = substr($wilayah_fullcodes[0], 2, 2);
                if ($desa != '000') {
                    $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 7) . '000';
                    $jenis = $jenis . "DESA DI ";
                } else if ($kec != '000') {
                    $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 4) . '000' . '000';
                    $jenis = $jenis . "KECAMATAN DI ";
                } else if ($kab != '00') {
                    $wilayah_parent_code = substr($wilayah_fullcodes[0], 0, 2) . '00' . '000' . '000';
                    $jenis = $jenis . "KABUPATEN DI ";
                }
                $rowLabel = $jenis . MasterWilayah::where('wilayah_fullcode', $wilayah_parent_code)->pluck('label')[0];
                $rowLabel = strtolower($rowLabel);
                $rowLabel = ucwords($rowLabel);
            } else {

                $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->pluck('label')[0];
            }
        } catch (\Exception $e) {
            return response()->json(array('error' => $e->getMessage(), 'rows' => $rows));
        }

        $columns = Column::whereIn('id', $id_columns)->get();
        $tahuns = array_unique($tahuns);
        sort($tahuns);
        // $turtahuns = array_unique($turtahuns);
        // sort($turtahuns);
        $turtahuns = Turtahun::whereIn('id', $turTahunKeys)->get();

        // $turtahuns = array_unique($turtahuns);
        // sort($turtahuns);
        // return response()->json( [
        //     'datacontents' => $datacontents,
        //     // 'tabels' => $tabels,
        //     'encryptedId' => $id,
        //     'tahuns' => $tahuns,
        //     'rows' => $rows,
        //     'row_label' => $rowLabel,
        //     'columns' => $columns,
        //     'turtahuns' => $turtahuns,
        //     'tabel' => $statusTabel
        // ]);
        return view('tabel.show', [
            'datacontents' => $datacontents,
            // 'tabels' => $tabels,
            'encryptedId' => $id,
            'tahuns' => $tahuns,
            'years' => $tahuns[0],
            'rows' => $rows,
            'row_label' => $rowLabel,
            'columns' => $columns,
            'turtahuns' => $turtahuns,
            'tabel' => $statusTabel,
            'status' => $status,
            'roles' => $roles,
            'status_desc' => $sdesc,
            'catatans' => $catatans,
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
        $daftar_dinas = Dinas::whereIn('wilayah_fullcode', MasterWilayah::getDinasWilayah())->get();
        $subjects = Subject::all();

        return view('tabel.edit', [
            'tabel' => $tabel,
            'encryptedId' => $id,
            'daftar_dinas' => $daftar_dinas,
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
    }

    public function update_content(Request $request)
    {
        $data = $request->data;
        $decisions = $request->decisions;
        // dd($request->catatans);
        try {
            //code...
            DB::beginTransaction();
            foreach ($data as $item) {

                Datacontent::where('id', $item['id'])
                    ->update([
                        'value' => $item['value']
                    ]);
            }
            Statustables::where('id_tabel', $data[0]['id_tabel'])
                ->where('tahun', $data[0]['tahun'])
                ->update([
                    'status' => ($decisions == "save") ? '2' : '3',
                    'edited_by' => auth()->user()->id,
                ]);
            $status = Statustables::where('id_tabel', $data[0]['id_tabel'])
                ->where('tahun', $data[0]['tahun'])
                ->leftJoin('status_desc', 'statustables.status', '=', 'status_desc.id')
                ->first(['statustables.*', 'status_desc.label as statuslabel']);

            if ($status->status == '3') {
                # code...
                Notifikasi::create([
                    'id_statustabel' => $status->id,
                    'id_user' => auth()->user()->id,
                    'komentar' => auth()->user()->name . " [ " . auth()->user()->dinas->nama . " ]" . " telah mengirim tabel dengan judul ",
                ]);
            }
            if ($request->catatans) {
                # code...
                $catatan = Catatan::create([
                    'id_statustabel' => $status->id,
                    'catatan' => $request->catatans,
                ]);
            }
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();

            // Handle the exception (log it, show a user-friendly message, etc.)
            // For example, you can log the error:
            return response()->json($th);
        }
        // Update records in a single query

        return response()->json([
            'data' => $data,
            'status' => $status->status,
            'status_label' => $status->statuslabel
        ]);
    }

    public function adminHandleData(Request $request)
    {
        $isAdmin = auth()->user()->role == "admin" |  auth()->user()->role == "kominfo";
        if (!$isAdmin) {
            return response()->json([
                'error' => 'Operasi ini hanya bisa dilakukan oleh Admin'
            ], 403);
        }
        $data = $request->data;
        $decisions = $request->decisions;
        try {
            //code...
            DB::beginTransaction();
            Statustables::where('id_tabel', $data[0]['id_tabel'])
                ->where('tahun', $data[0]['tahun'])
                ->update([
                    'status' => ($decisions == "reject") ? '4' : '5',
                    'edited_by' => auth()->user()->id,
                ]);
            $status = Statustables::where('id_tabel', $data[0]['id_tabel'])
                ->where('tahun', $data[0]['tahun'])
                ->leftJoin('status_desc', 'statustables.status', '=', 'status_desc.id')
                ->first(['statustables.*', 'status_desc.label as statuslabel']);
            
            $isKominfo = auth()->user()->role == "kominfo";
            $Admins = ($isKominfo) ? "Kominfo" : "Admin";
            if ($status->status == '4') {
                # code...
                Notifikasi::create([
                    'id_statustabel' => $status->id,
                    'id_user' => auth()->user()->id,
                    'komentar' => $Admins." telah me-reject data (perlu perbaikan) dengan judul ",
                ]);
            } elseif ($status->status == '5') {
                # code...
                Notifikasi::create([
                    'id_statustabel' => $status->id,
                    'id_user' => auth()->user()->id,
                    'komentar' => $Admins." telah me-finalkan data dengan judul ",
                ]);
            }
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();

            // Handle the exception (log it, show a user-friendly message, etc.)
            // For example, you can log the error:
            return response()->json($th);
        }

        return response()->json([
            'messages' => 'Berhasil di-' . $decisions
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $decryptedId = Crypt::decrypt($id);

        try {
            DB::beginTransaction();
            $thisTabel = Tabel::where('id', $decryptedId)->first();
            $thisStatusTabel = Statustables::where('id_tabel', $decryptedId)->get();
            $thisDataContents = Datacontent::where('id_tabel', $decryptedId)->get();

            foreach ($thisDataContents as $value) {
                # code...
                $value->delete();
            }

            // $thisDataContents->delete();

            foreach ($thisStatusTabel as $value) {
                # code...
                $value->delete();
            }
            // $thisStatusTabel->delete();
            $thisTabel->delete();
            DB::commit();
            // hapus tabel status
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'object' => $th,
                'message' => 'sorry u cant do something like this',
            ]);
        }
        return response()->json([
            'messages' => 'Berhasil dihapus'
        ]);
    }

    public function statusDestroy(Request $request)
    {
        $decryptedId = Crypt::decrypt($request->id);
        $thisStatus = Statustables::where('id', $decryptedId);
        $thisStatus->update(['status' => '6']);
        return response()->json($thisStatus);
    }

    public function fetchMasterKecamatan($kab)
    {
        $daftar_kecamatan = MasterWilayah::where('kab', 'like', $kab)->where('kec', 'not like', '000')->where('desa', 'like', '000')->get();
        return response()->json([
            'data' => $daftar_kecamatan,
            'status_code' => 200
        ]);
    }
    public function fetchMasterDesa($kab, $kec)
    {
        $daftar_desa = MasterWilayah::where('kab', 'like', $kab)->where('kec', 'like', $kec)->where('kec', 'not like', '000')->where('desa', 'not like', '000')->get();
        return response()->json([
            'data' => $daftar_desa,
            'status_code' => 200
        ]);
    }
}
