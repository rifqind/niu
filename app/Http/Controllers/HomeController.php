<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Models\Datacontent;
use App\Models\Dinas;
use App\Models\MasterWilayah;
use App\Models\Region;
use App\Models\Row;
use App\Models\Rowlabel;
use App\Models\Statustables;
use App\Models\Subject;
use App\Models\Tabel;
use App\Models\Turtahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kabs = MasterWilayah::where('kec', 'like', '000')
            ->get();
        foreach ($kabs as $kab) {
            # code...
            $text = $kab->label;
            $partOfText = explode(' ', $text);
            array_shift($partOfText);
            $modifiedText = implode(' ', $partOfText);
            $kab->label = $modifiedText;
        }
        $dinas = Dinas::all();
        $tabel_final = Statustables::where('status', 5)->pluck('id');
        // $tabels = Tabel::whereIn('id', $tabel_final)->get();
        $tabels = Statustables::where('status', 5)
            ->leftJoin('tabels', 'statustables.id_tabel', '=', 'tabels.id')
            ->leftJoin('dinas', 'tabels.id_dinas', '=', 'dinas.id')
            ->leftJoin('master_wilayah', 'dinas.wilayah_fullcode', '=', 'master_wilayah.wilayah_fullcode')
            ->leftJoin('subjects', 'tabels.id_subjek', '=', 'subjects.id')
            ->get([
                'statustables.id as id_statustables',
                'statustables.tahun',
                'tabels.*',
                'dinas.nama as nama_dinas',
                'master_wilayah.label as nama_regions',
                'subjects.label as nama_subjects'
            ]);
        $subjects = Subject::all();
        $tahuns = Statustables::where('status', 5)->distinct()->get('tahun');

        $countfinals = Statustables::where('status', 5)->count();
        $counttabels = $tabels->count();
        return view('frontpage', [
            'kabs' => $kabs,
            'dinas' => $dinas,
            'tabels' => $tabels,
            'subjects' => $subjects,
            'counttabels' => $counttabels,
            'countfinals' => $countfinals,
            'tahuns' => $tahuns,
        ]);
    }

    public function getSearch(Request $request)
    {
        $wilayah = $request->input('wilayah', []);
        $dinas = $request->input('dinas', []);
        $subject = $request->input('subject', []);
        $tahuns = $request->input('tahuns', []);

        $searchWord = $request->input('searchData');


        // $tabels = Statustables::where(function ($query) use ($wilayah) {
        //     if (!empty($wilayah)) {
        //         $query->whereIn('regions.id', $wilayah);
        //     }
        // })
        //     ->where(function ($query) use ($dinas) {
        //         if (!empty($dinas)) {
        //             $query->whereIn('dinas.id', $dinas);
        //         }
        //     })
        //     ->where(function ($query) use ($subject) {
        //         if (!empty($subject)) {
        //             $query->whereIn('subjects.id', $subject);
        //         }
        //     })
        //     ->leftJoin('tabels', 'statustables.id_tabel', '=', 'tabels.id')
        //     ->leftJoin('dinas', 'tabels.id_dinas', '=', 'dinas.id')
        //     ->leftJoin('regions', 'dinas.id_regions', '=', 'regions.id')
        //     ->leftJoin('subjects', 'tabels.id_subjek', '=', 'subjects.id')
        //     ->get([
        //         'statustables.tahun',
        //         'tabels.*',
        //         'dinas.nama as nama_dinas',
        //         'regions.nama as nama_regions',
        //         'subjects.label as nama_subjects'
        //     ]);

        // $tabels = Statustables::when($searchWord, function ($query) use ($searchWord) {
        //     return $query
        //         ->where('tabels.label', 'like', '%' . $searchWord . '%')
        //         ->orWhere('dinas.nama', 'like', '%' . $searchWord . '%')
        //         ->orWhere('regions.nama', 'like', '%' . $searchWord . '%')
        //         ->orWhere('subjects.label', 'like', '%' . $searchWord . '%');
        // })
        //     ->leftJoin('tabels', 'statustables.id_tabel', '=', 'tabels.id')
        //     ->leftJoin('dinas', 'tabels.id_dinas', '=', 'dinas.id')
        //     ->leftJoin('regions', 'dinas.id_regions', '=', 'regions.id')
        //     ->leftJoin('subjects', 'tabels.id_subjek', '=', 'subjects.id')
        //     ->get([
        //         'statustables.tahun',
        //         'tabels.*',
        //         'dinas.nama as nama_dinas',
        //         'regions.nama as nama_regions',
        //         'subjects.label as nama_subjects'
        //     ]);

        $tabels = Statustables::when(!empty($wilayah), function ($query) use ($wilayah) {
            $query->whereIn('master_wilayah.wilayah_fullcode', $wilayah);
        })
            ->when(!empty($dinas), function ($query) use ($dinas) {
                $query->whereIn('dinas.id', $dinas);
            })
            ->when(!empty($subject), function ($query) use ($subject) {
                $query->whereIn('subjects.id', $subject);
            })
            ->when(!empty($tahuns), function ($query) use ($tahuns) {
                $query->whereIn('tahun', $tahuns);
            })
            ->when($searchWord, function ($query) use ($searchWord) {
                $query->where(function ($query) use ($searchWord) {
                    $query->where('tabels.label', 'like', '%' . $searchWord . '%')
                        ->orWhere('dinas.nama', 'like', '%' . $searchWord . '%')
                        ->orWhere('master_wilayah.label', 'like', '%' . $searchWord . '%')
                        ->orWhere('subjects.label', 'like', '%' . $searchWord . '%');
                });
            })
            ->where('status', 5)
            ->leftJoin('tabels', 'statustables.id_tabel', '=', 'tabels.id')
            ->leftJoin('dinas', 'tabels.id_dinas', '=', 'dinas.id')
            ->leftJoin('master_wilayah', 'dinas.wilayah_fullcode', '=', 'master_wilayah.wilayah_fullcode')
            ->leftJoin('subjects', 'tabels.id_subjek', '=', 'subjects.id')
            ->get([
                'statustables.tahun',
                'tabels.*',
                'dinas.nama as nama_dinas',
                'master_wilayah.label as nama_regions',
                'subjects.label as nama_subjects'
            ]);


        $counttabels = $tabels->count();
        // return response()->json([
        //     'wilayah' => $wilayah,
        //     'dinas' => $dinas,
        //     'subject' => $subject,
        //     'tabel' => $tabel,
        // ]);
        return view('tabel-list', compact('tabels', 'counttabels'))->render();
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
    // public function show(string $id)
    // {
    //     //
    // }

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

    public function dashboard()
    {
        $myDinas = auth()->user()->id_dinas;
        $myTabels = Tabel::where('id_dinas', $myDinas)->pluck('id');

        #status 1
        $newTabels = Statustables::whereIn('id_tabel', $myTabels)->where('status', 1)->count();

        #status 2
        $entriTabels = Statustables::whereIn('id_tabel', $myTabels)->where('status', 2)->count();

        #status 3
        $verifyTabels = Statustables::whereIn('id_tabel', $myTabels)->where('status', 3)->count();

        #status 4
        $repairTabels = Statustables::whereIn('id_tabel', $myTabels)->where('status', 4)->count();

        #status 5
        $finalTabels = Statustables::whereIn('id_tabel', $myTabels)->where('status', 5)->count();

        #total tabel
        $totalTabels = $newTabels + $entriTabels + $verifyTabels + $repairTabels + $finalTabels;

        return view('dashboard', [
            'newTabels' => $newTabels,
            'entriTabels' => $entriTabels,
            'verifyTabels' => $verifyTabels,
            'repairTabels' => $repairTabels,
            'finalTabels' => $finalTabels,
            'totalTabels' => $totalTabels,
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
        $rowLabel = Rowlabel::where('id', $rows[0]->id_rowlabels)->get();
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

    public function show(string $id, string $tahun)
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
        $tabels = Tabel::where('id', $id_tabel)->first();

        $rows = Row::whereIn('id', $id_rows)->get();
        $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
        try {
            //code...
            if ($rows[0]->id == 0) {
                // $wilayah_master = MasterWilayah::where('wilayah_fullcode','like',$wilayah_fullcodes[0]);
                $wilayah_parent_code = '';
                $jenis = "DAFTAR ";
                $temp = MasterWilayah::whereIn('wilayah_fullcode', $wilayah_fullcodes)->get();
                $rows = $temp;

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


        // return response()->json(array('rows' => $tahuns));
        return view('view-tabel', [
            'datacontents' => $datacontents,
            'tabels' => $tabels,
            'encryptedId' => $id,
            'tahuns' => $tahuns,
            'tahun' => $tahun,
            'rows' => $rows,
            'row_label' => $rowLabel,
            'columns' => $columns,
            'turtahuns' => $turtahuns,
            'tabel' => $statusTabel
        ]);
    }
}
