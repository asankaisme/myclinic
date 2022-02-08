<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function index($id)
    {
        $patient = Treatment::findOrFail($id)->Patient->fName;
    }

    public function create($id, $patient_id)
    {
        //the id here, is the treatment id
        //$patient = Treatment::findOrFail($id)->Patient->fName;
        //dd($patient);
        return view('issue.create', compact('id', 'patient_id'));
        //return redirect()->route('issueDrug', $id);
    }
}
