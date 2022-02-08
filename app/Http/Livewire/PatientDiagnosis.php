<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Treatment;

class PatientDiagnosis extends Component
{
    public $isAdded = false;
    public $review;
    public $currentDignosis;
    public $currentDignosisId;
    public $patient; //patient object passed from the view blade
    public $diagnosis; //variable from the component

    
    public function addDiagnosis()
    {
        $this->validate([
            'diagnosis' => 'required|max:300'
        ]);

        $currentDignosis =  Treatment::create([
                                'patient_id' => $this->patient->id,
                                'diagnosis' => $this->diagnosis,
                            ]);

        $isAdded = true;
        $currentDignosisId = $currentDignosis->id;
        //dd($currentDignosisId);
        $this->diagnosis = $currentDignosis->diagnosis;
    }

    public function updateDiagnosis()
    {
        
    }
    
    public function render()
    {
        return view('livewire.patient-diagnosis');
    }
}
