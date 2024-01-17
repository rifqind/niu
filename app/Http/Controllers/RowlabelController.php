<?php

namespace App\Http\Controllers;

use App\Models\Rowlabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RowlabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rowLabels = Rowlabel::all();

        return view('rowLabels.index', [
            'rowLabels' => $rowLabels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rowLabels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'label' => ['required', 'string'],
        ]);
        $rowLabels = Rowlabel::create([
            'label' => $request->label,
        ]);
        return redirect(route('rowLabels.index'))->with(['success' => 'Berhasil menambahkan kelompok baris  ' . $request->label]);
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
    public function edit($id)
    {
        //
        $decryptedId  = Crypt::decrypt($id);

        $rowLabels = Rowlabel::where('id', $decryptedId)->firstOrFail();

        return view('rowLabels.edit', ['rowLabels' => $rowLabels, 'decrypted_id' => $decryptedId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $validated = $request->validate([
            'label' => ['required', 'string'],
        ]);
        $decryptedId = Crypt::decrypt($request->id);

        try {
            // Find the rowLabels by its ID
            $rowLabels = Rowlabel::where('id', $decryptedId)->update([
                'label' => $request->label
            ]);

            // Update the rowLabels with the validated data
            

            // Redirect to the index route
            return redirect()->route('rowLabels.index')->with('success', 'Berhasil mengubah detail Kelompok Baris');
            // return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Log the error (optional)
            // \Log::error('Error updating rowLabels: ' . $e->getMessage());

            // Store the error message in the session
            session()->flash('error', 'Error updating rowLabels: ' . $e->getMessage());

            // Redirect back with an error message
            // return response()->json(['status' => 'error']);
            return redirect()->back()->with('error', 'Error updating rowLabels: ' . $e->getMessage());
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
        $rowLabels = Rowlabel::findOrFail($decryptedId);

        // Delete the subject
        $rowLabels->delete();

        // Respond with a JSON success message
        return redirect()->back()->with('error', 'Berhasil menghapus Kelompok Baris!');
    }
}
