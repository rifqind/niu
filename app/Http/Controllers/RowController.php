<?php

namespace App\Http\Controllers;

use App\Models\Row;
use App\Http\Requests\StoreRowRequest;
use App\Http\Requests\UpdateRowRequest;
use App\Models\Rowlabel;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Crypt;

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
    public function store(HttpRequest $request)
    {
        //
        $request->validate([
            'label' => ['required', 'string'],
        ]);
        $rows = Row::create([
            'label' => $request->label,
            'id_rowlabels' => $request->rowLabels,
        ]);
        return redirect(route('rows.index'))->with(['success' => 'Berhasil menambahkan baris  ' . $request->label]);
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
    public function edit($id)
    {
        //
        $decryptedId  = Crypt::decrypt($id);

        $rows = Row::where('id', $decryptedId)->firstOrFail();
        $rowLabels = Rowlabel::get();

        return view('rows.edit', [
            'rows' => $rows,
            'decrypted_id' => $decryptedId,
            'rowLabels' => $rowLabels,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HttpRequest $request)
    {
        //
        $validated = $request->validate([
            'label' => ['required', 'string'],
        ]);
        $decryptedId = Crypt::decrypt($request->id);

        try {
            // Find the rows by its ID
            $rows = Row::where('id', $decryptedId)->update([
                'label' => $request->label,
                'id_rowlabels' => $request->rowLabels
            ]);

            // Update the rows with the validated data


            // Redirect to the index route
            return redirect()->route('rows.index')->with('success', 'Berhasil mengubah detail Baris');
            // return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error updating rows: ' . $e->getMessage());

            // Store the error message in the session
            session()->flash('error', 'Error updating rows: ' . $e->getMessage());

            // Redirect back with an error message
            // return response()->json(['status' => 'error']);
            return redirect()->back()->with('error', 'Error updating rows: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $decryptedId = Crypt::decrypt($id);
        // Find the subject by ID
        $rows = Row::findOrFail($decryptedId);

        // Delete the subject
        $rows->delete();

        // Respond with a JSON success message
        return redirect()->back()->with('error', 'Berhasil menghapus Baris!');
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
