<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function create($id)
    {
        $patient = Treatment::findOrFail($id)->Patient->fName;
        // dd($patient);
        return view('issue.create', compact('patient'));
    }
}
