<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use App\Models\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class PatientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $patients = Patient::where('isActive', 'A')->orderBy('refNo', 'asc')->get();

        return view('patient.index', compact('patients'));
    }

    public function create()
    {
        return view('patient.addPatient');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fName' => 'required',
            'lName' => 'required',
            'bDay' => 'required',
            'sex' => 'required',
            'phnNmbr' => 'min:10|max:12'
        ]);

        $curMxId = Patient::orderBy('id', 'desc')->value('id');
        $nxtNm = $curMxId + 1;
        // fixed this code for ref num generation
        // $lngthOfnxtNm = strlen($nxtNm);
        // $rptTimes = 4 - $lngthOfnxtNm;
        // $str = '0';
        // $newStr = '';

        // for ($i=0; $i <= $rptTimes; $i++) { 
        //     $newStr .= str_repeat($i, $str); 
        // }

        // return $newStr;

        // dd($newStr);
        // --end----
        $patient = Patient::create([
                            'fName' => $request->fName,
                            'lName' => $request->lName,
                            'adr1' => $request->adr1,
                            'adr2' => $request->adr2,
                            'city' => $request->city,
                            'sex' => $request->sex,
                            'bDay' => $request->bDay,
                            'bldGrp' => $request->bldGrp,
                            'phnNmbr' => $request->phnNmbr,
                            'grdName' => $request->grdName,
                            'grdPhnNmbr' => $request->grdPhnNmbr,
                            'regDate' => Carbon::now(),
                            'refNo' => 'KIC'.Carbon::now()->format('Y-m-d').'-'.$nxtNm,
                            'isActive' => 'A'
                        ]);

        $request->session()->flash('msgSuccess', 'Patient record successfully added.');
        return redirect()->route('patients.show', $patient->id);
    }

    public function show($id)
    {
        try {
            $patient = Patient::find($id);
            //$treatments = $patient->Treatments;
            // dd($treatments);
            return view('patient.viewPatient', compact('patient'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $patient = Patient::find($id);
            return view('patient.editPatient', compact('patient'));
        } catch (\Throwable $th) {
            //throw $th;
        }           
    }

    public function update(Request $request, $id)
    {
        try {
            $patient = Patient::find($id);
            $patient->update([
                'fName' => $request->fName,
                'lName' => $request->lName,
                'adr1' => $request->adr1,
                'adr2' => $request->adr2,
                'city' => $request->city,
                'sex' => $request->sex,
                'bDay' => $request->bDay,
                'bldGrp' => $request->bldGrp,
                'phnNmbr' => $request->phnNmbr,
                'grdName' => $request->grdName,
                'grdPhnNmbr' => $request->grdPhnNmbr,
                'edtDate' => Carbon::now()
            ]);
            $request->session()->flash('msgSuccess', 'Patient record successfully updated.');
            return redirect()->route('patients.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $patient = Patient::find($id);
            $patient->update([
                'isActive' => 'D'
            ]);
            session()->flash('msgSuccess', 'Patient record successfully deleted.');
            return redirect()->route('patients.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
