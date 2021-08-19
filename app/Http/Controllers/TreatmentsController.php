<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id)
    {
        $patient = Patient::find($id);
        // dd($patient);
        return view('Treatment.newTreatment', compact('patient'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'diagnosis' => 'required'
        ]);

        $diagnosis = Treatment::create([
            'patient_id' => $request->patient_id,
            'diagnosis' => $request->diagnosis,
            'isActive' => 'A'
        ]);
        $request->session()->flash('msgSuccess', 'Patient record successfully added.');
    }
}
