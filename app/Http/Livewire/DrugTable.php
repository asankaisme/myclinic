<?php

namespace App\Http\Livewire;

use App\Models\Drug;
use Livewire\Component;

class DrugTable extends Component
{
    public $drugs;

    public function mount()
    {
        $this->drugs = Drug::all();
    }

    public function render()
    {
        return view('livewire.drug-table');
    }


}
