<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Models\Datacontent;
use App\Models\Dinas;
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
        $regions = Region::all();
        $dinas = Dinas::all();
        $tabel_final = Statustables::where('status', 4)->pluck('id');
        // $tabels = Tabel::whereIn('id', $tabel_final)->get();
        $tabels = Statustables::where('status', 4)
            ->leftJoin('tabels', 'statustables.id_tabel', '=', 'tabels.id')
            ->leftJoin('dinas', 'tabels.id_dinas', '=', 'dinas.id')
            ->leftJoin('regions', 'dinas.id_regions', '=', 'regions.id')
            ->leftJoin('subjects', 'tabels.id_subjek', '=', 'subjects.id')
            ->get([
                'statustables.tahun',
                'tabels.*',
                'dinas.nama as nama_dinas',
                'regions.nama as nama_regions',
                'subjects.label as nama_subjects'
            ]);
        $subjects = Subject::all();
        $tahuns = Statustables::where('status', 4)->distinct()->get('tahun');

        $countfinals = Statustables::where('status', 4)->count();
        $counttabels = $tabels->count();
        return view('frontpage', [
            'regions' => $regions,
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
            $query->whereIn('regions.id', $wilayah);
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
                        ->orWhere('regions.nama', 'like', '%' . $searchWord . '%')
                        ->orWhere('subjects.label', 'like', '%' . $searchWord . '%');
                });
            })
            ->leftJoin('tabels', 'statustables.id_tabel', '=', 'tabels.id')
            ->leftJoin('dinas', 'tabels.id_dinas', '=', 'dinas.id')
            ->leftJoin('regions', 'dinas.id_regions', '=', 'regions.id')
            ->leftJoin('subjects', 'tabels.id_subjek', '=', 'subjects.id')
            ->get([
                'statustables.tahun',
                'tabels.*',
                'dinas.nama as nama_dinas',
                'regions.nama as nama_regions',
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
        $id = Crypt::decrypt($id);
        $tabel = Tabel::where('id', $id)->first();
        $data = Datacontent::where('label', 'LIKE', $tabel->id . '%' . '-' . $tahun . '%')->get();
        // $sqlWithBindings = $data->toSql();

        // // Get the actual bindings
        // $bindings = $data->getBindings();

        // // Replace the placeholders with actual values
        // $actualSql = vsprintf(str_replace('?', '%s', $sqlWithBindings), $bindings);


        $id_rows = [];
        $id_columns = [];
        // $tahuns = [];
        $turTahunKeys = [];

        foreach ($data as $dat) {
            $split = explode("-", $dat->label);
            array_push($id_rows, $split[1]);
            array_push($id_columns, $split[2]);
            // array_push($tahuns, $split[3]);
            array_push($turTahunKeys, $split[4]);
        }
        // $tabels = Tabel::where('id', $id)->get();
        $rows = Row::whereIn('id', $id_rows)->get();
        $rowLabel = RowLabel::where('id', $rows[0]->id_rowlabels)->get();
        $columns = Column::whereIn('id', $id_columns)->get();
        // $tahuns = array_unique($tahuns);
        // sort($tahuns);
        $turtahuns = Turtahun::whereIn('id', $turTahunKeys)->get();

        return view('view-tabel', [
            'datacontents' => $data,
            // 'tahuns' => $tahuns,
            'tahun' => $tahun,
            'rows' => $rows,
            'row_label' => $rowLabel,
            'columns' => $columns,
            'turtahuns' => $turtahuns,
            'tabel' => $tabel
        ]);
    }
}
