<?php

namespace App\Http\Livewire;

use App\Models\Drug;
use Livewire\Component;

class AddDrug extends Component
{
    public $drgNme;
    public $avlQty;
    public $rol;
    public $isActive;

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
}
