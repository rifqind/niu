<?php

namespace App\Http\Controllers;

use App\Models\ColumnGroup;
use App\Http\Requests\StoreColumnGroupRequest;
use App\Http\Requests\UpdateColumnGroupRequest;
use Illuminate\Support\Facades\Crypt;

class ColumnGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $column_groups = ColumnGroup::get();

        return view('column_group.index', ['column_groups' => $column_groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('column_group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColumnGroupRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $insertedRow = ColumnGroup::create($validatedData);
        return redirect(route('column_group.index'))->with(['success' => 'columnBerhasil menambahkan kelompok kolom  ' . $validatedData['label']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ColumnGroup $columnGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $decryptedId  = Crypt::decrypt($id);

        $column_group = ColumnGroup::where('id', $decryptedId)->firstOrFail();

        return view('column_group.edit', ['column_group' => $column_group, 'decrypted_id' => $decryptedId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColumnGroupRequest $request)
    {
        // return redirect(route('column.index'));
        // Validate the request data
        $validatedColumn = $request->validate($request->rules());

        try {
            // Find the Column by its ID
            $column = ColumnGroup::findOrFail($validatedColumn['id']);

            // Update the Column with the validated data
            $column->update($validatedColumn);

            // Redirect to the index route
            return redirect()->route('column_group.index')->with('success', 'Berhasil mengubah detail kelompok kolom');
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
        $column_gorup = ColumnGroup::findOrFail($decryptedId);

        // Delete the subject
        $column_gorup->delete();

        // Respond with a JSON success message
        return redirect()->back()->with('error', 'Berhasil menghapus Kelompok Kolom !');
    }
}
