<?php

namespace App\Http\Livewire;

use App\Models\Drug;
use Livewire\Component;

class DrugModal extends Component
{
    public $id;
    public $drug;
    

    public function mount($id)
    {
        $this->drug = Drug::find($id);
    }
    public function render()
    {
        return view('livewire.drug-modal');
    }
}
