<?php

namespace App\Http\Controllers;

use App\Models\TurTahunGroup;
use App\Http\Requests\StoreTurTahunGroupRequest;
use App\Http\Requests\UpdateTurTahunGroupRequest;
use App\Models\Turtahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TurTahunGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode_groups = TurTahunGroup::get();

        return view('periode_group.index', ['periode_groups' => $periode_groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode_group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTurTahunGroupRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $insertedRow = TurTahunGroup::create($validatedData);
        return redirect(route('periode_group.index'))->with(['success' => 'columnBerhasil menambahkan kelompok kolom  ' . $validatedData['label']]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $decryptedId  = Crypt::decrypt($id);

        $periode_group = TurTahunGroup::where('id', $decryptedId)->firstOrFail();

        return view('periode_group.edit', ['periode_group' => $periode_group, 'decrypted_id' => $decryptedId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTurTahunGroupRequest $request)
    {
        // return redirect(route('column.index'));
        // Validate the request data
        $validatedColumn = $request->validate($request->rules());

        try {
            // Find the Column by its ID
            $periode_group = TurTahunGroup::findOrFail($validatedColumn['id']);

            // Update the Column with the validated data
            $periode_group->update($validatedColumn);

            // Redirect to the index route
            return redirect()->route('periode_group.index')->with('success', 'Berhasil mengubah detail kelompok periode');
            // return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error updating column: ' . $e->getMessage());

            // Store the error message in the session
            session()->flash('error', 'Error updating column: ' . $e->getMessage());

            // Redirect back with an error message
            // return response()->json(['status' => 'error']);
            return redirect()->back()->with('error', 'Error updating column: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $decryptedId = Crypt::decrypt($id);
        // Find the subject by ID
        $column_gorup = TurTahunGroup::findOrFail($decryptedId);

        // Delete the subject
        $column_gorup->delete();

        // Respond with a JSON success message
        return redirect()->back()->with('error', 'Berhasil menghapus Kelompok Periode !');
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
