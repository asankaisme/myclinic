<?php

namespace App\Http\Livewire;

use App\Models\Drug;
use Livewire\Component;

class AddDrug extends Component
{
    public $drug, $drgNme, $drug_id, $avlQty, $rol, $isActive;
    public $updateStatus;

    protected $listners = ['selectedDrug'];

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.add-drug');
    }
    
    public function addDrug()
    {
        $validatedData = $this->validate([
            'drgNme' => 'required',
            'avlQty' => 'required|numeric',
            'rol' => 'required|numeric'
        ]);

        Drug::create($validatedData);
        session()->flash('msgSuccess', 'New drug successfully added.');
        return redirect()->route('drug');
    }
    //method for searching specific drug
    public function edit($drug_id, $updateStatus)
    {
        $drug = Drug::findOrFail($drug_id);
        return view('livewire.add-drug', compact('drug', 'updateStatus'));
        $this->drug_id = $drug_id;
        $this->drgNme = $drug->drgName;
        $this->avlQty = $drug->avlQty;
        $this->rol = $drug->rol;
    }

    // public function selectedDrug(Drug $drug)
    // {   
    //     dd($this->drgNme = $drug->drgNme);
    // }
}
