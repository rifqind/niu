<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Http\Requests\StoreColumnRequest;
use App\Http\Requests\UpdateColumnRequest;
use App\Models\ColumnGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get the resource
        $columns = Column::join('column_groups', 'columns.id_columns_group', 'column_groups.id')->select('columns.id', 'columns.label', 'column_groups.label as tipe')->get();

        return view('column.index', ['columns' => $columns]);
        // $columns = Column::join('column_groups', 'columns.id_column_group', 'column_groups.id')->select('columns.id', 'columns.label', 'column_groups.label as tipe')->get();
        $columns = Column::all();
        return view('columns.index', ['columns' => $columns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $column_groups = ColumnGroup::get();

        return view('column.create', ['column_groups' => $column_groups]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColumnRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $insertedRow = Column::create($validatedData);
        return redirect(route('column.index'))->with(['success' => 'Berhasil menambahkan kolom dengan id ' . $insertedRow->id]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Column $column)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
        $decryptedId  = Crypt::decrypt($id);

        $column = Column::where('id', $decryptedId)->firstOrFail();
        $column_groups = ColumnGroup::get();

        return view('column.edit', ['column' => $column, 'column_groups' => $column_groups, 'decrypted_id' => $decryptedId]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColumnRequest $request)

    {

        // return redirect(route('column.index'));
        // Validate the request data
        $validatedColumn = $request->validate($request->rules());

        try {
            // Find the Column by its ID
            $column = Column::findOrFail($validatedColumn['id']);

            // Update the Column with the validated data
            $column->update($validatedColumn);

            // Redirect to the index route
            return redirect()->route('column.index')->with('success', 'Berhasil mengubah detail kolom');
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
        $subject = Column::findOrFail($decryptedId);

        // Delete the subject
        $subject->delete();

        // Respond with a JSON success message
        return redirect()->back()->with('error', 'Berhasil menghapus kolom !');
    }

    public function fetch(Request $request)
    {
        $id_columnGroups = $request->query('id_columnGroups');
        $response_data = Column::join('column_groups', 'columns.id_columns_group', '=', 'column_groups.id')
            ->where('columns.id_columns_group', $id_columnGroups) // tbd
            ->select('columns.id', 'columns.label', 'column_groups.label as tipe')
            ->get();
        // $response_data = Column::join('column_groups', 'columns.id_columns_group', '=', 'column_groups.id')
        //     ->where('columns.id_columns_group', $id_columnGroups) // tbd
        //     ->select('columns.id', 'columns.label', 'column_groups.label as tipe')
        //     ->get();

        $response_data = Column::where('columns.id_columns_group', $id_columnGroups)
            ->leftJoin('column_groups', 'columns.id_columns_group', '=', 'column_groups.id')
            ->get(['columns.*', 'column_groups.label as tipe']);
        return response()->json(['data' => $response_data, 'status' => 200]);
    }
}