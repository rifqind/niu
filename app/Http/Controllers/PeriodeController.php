<?php

namespace App\Http\Controllers;

use App\Models\TurTahun;
use App\Http\Requests\StoreTurTahunRequest;
use App\Http\Requests\UpdateTurTahunRequest;
use App\Models\TurTahunGroup;
use Illuminate\Support\Facades\Crypt;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodes = TurTahun::join('turtahun_groups', 'turtahuns.type', 'turtahun_groups.id')->select('turtahuns.id', 'turtahuns.label', 'turtahun_groups.label as tipe')->get();

        return view('periode.index', ['periodes' => $periodes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $turtahun_groups = TurTahunGroup::get();

        return view('periode.create', ['turtahun_groups' => $turtahun_groups]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTurTahunRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $insertedRow = TurTahun::create($validatedData);
        return redirect(route('periode.index'))->with(['success' => 'berhasil menambahkan Periode ' . $validatedData['label']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Turtahun $turtahun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $decryptedId  = Crypt::decrypt($id);

        $periode = TurTahun::where('id', $decryptedId)->firstOrFail();
        $turtahun_groups = TurTahunGroup::get();

        return view('periode.edit', ['periode' => $periode, 'turtahun_groups' => $turtahun_groups, 'decrypted_id' => $decryptedId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTurTahunRequest $request)
    {
        // return redirect(route('column.index'));
        // Validate the request data
        $validatedColumn = $request->validate($request->rules());

        try {
            // Find the Column by its ID
            $column = TurTahun::findOrFail($validatedColumn['id']);

            // Update the Column with the validated data
            $column->update($validatedColumn);

            // Redirect to the index route
            return redirect()->route('periode.index')->with('success', 'Berhasil mengubah detail kelompok kolom');
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
        $periode = TurTahun::findOrFail($decryptedId);

        // Delete the subject
        $periode->delete();

        // Respond with a JSON success message
        return redirect()->back()->with('error', 'Berhasil menghapus Periode !');
    }
}
