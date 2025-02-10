<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shift;

class PublicShiftListComponent extends Component
{
    public function render()
    {
        $pendingShifts = Shift::where('state', 'pendient')->orderBy('number')->get();
        $inProgressShifts = Shift::where('state', 'progress')->orderBy('box')->get();

        return view('livewire.public-shift-list-component', compact('pendingShifts', 'inProgressShifts'));
    }
}

