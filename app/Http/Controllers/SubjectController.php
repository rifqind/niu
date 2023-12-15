<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Crypt;


use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //


        $subjects = Subject::orderBy('label')->get();

        return view('subject.index', [
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $id_regions = Region::getRegionId();
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $insertedRow = Subject::create($validatedData);
        return redirect(route('subject.index'))->with(['success' => 'Successfully inserted with id' . $insertedRow->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $subject = Subject::where('id', $decryptedId)->first();

        return view('subject.update', [
            'subject' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        $decryptedId = Crypt::decrypt($validatedData['id']);
        $insertedRow = Subject::where('id', $decryptedId)->update(['label' => $validatedData['label']]);
        // $subjects = Subject::orderBy('label')->get();

        return redirect(route('subject.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $decryptedId = Crypt::decrypt($id);
        // Find the subject by ID
        $subject = Subject::findOrFail($decryptedId);

        // Delete the subject
        $subject->delete();

        // Respond with a JSON success message
        return response()->json(['message' => 'Subject deleted successfully']);


        //
    }
}