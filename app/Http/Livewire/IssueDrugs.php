<?php

namespace App\Http\Livewire;

use App\Models\Drug;
use App\Models\Issue;
use Livewire\Component;
use App\Models\Treatment;

class IssueDrugs extends Component
{
    public $patient, $treatment_id, $drugs, $drg_id, $isdQty;

    public function mount(Treatment $id)
    {
        //$this->patient = $id->Patient->fName;
        $this->treatment_id = $id;
        $this->drugs = Drug::where('isActive', 'A')->orderBy('drgNme')->get();
    }
        
    public function issueMedicine()
    {
        $this->validate([
            'drg_id' => 'required|numeric',
            'isdQty' => 'required|numeric',
        ]);

       // dd($this->drg_id);
       Issue::create([
            'treatment_id' => $this->treatment_id,
            'drug_id' => $this->drg_id,
            'isdQty' => $this->isdQty,
       ]);
    }

    public function render()
    {
        return view('livewire.issue-drugs');
    }
}
