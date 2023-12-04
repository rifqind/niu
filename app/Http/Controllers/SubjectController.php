<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        //


        $subjects = Subject::orderBy('label')->get();

        return view('master.subject', [
            'subjects' => $subjects
        ]);
    }
}
