<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;

class ShowTable extends Component
{
    public function render()
    {
        $participants = Participant::all();
        return view('livewire.show-table', compact('participants'));
    }
}
