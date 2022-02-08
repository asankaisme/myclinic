<?php

namespace App\Http\Livewire;

use App\Models\Drug;
use Livewire\Component;

class DrugTable extends Component
{
    public $drugs, $drug_id;

    public function mount()
    {
        //$this->drugs = Drug::all();
    }

    public function render()
    {
        $this->drugs = Drug::all();
        return view('livewire.drug-table');
    }

    public function getDrug($drug_id)
    {
        $selectDrug = Drug::findOrFail($drug_id);
        $this->drug = $selectDrug;
        $this->emit('selectedDrug', $selectDrug->id);
    }
}
