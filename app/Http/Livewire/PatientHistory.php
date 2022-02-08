<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Treatment;

class PatientHistory extends Component
{
    public $treatments, $pid;

    public function mount($patientId)
    {
        $this->treatments = Treatment::where('patient_id', $patientId)->latest()->get();
        //$this->pid = $patientId;
    }

    public function render()
    {
        //$this->treatments = Treatment::where('patient_id', $pid)->get();
        return view('livewire.patient-history');
    }
}
