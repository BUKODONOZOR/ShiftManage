<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shift;

class ShiftListComponent extends Component
{
    public function render()
    {
        $pendingShifts = Shift::where('state', 'pendient')->orderBy('number')->get();
        $inProgressShifts = Shift::where('state', 'progress')->orderBy('box')->get();
        $checkedShifts = Shift::where('state', 'checket')->latest()->get();

        return view('livewire.shift-list-component', compact('pendingShifts', 'inProgressShifts', 'checkedShifts'));
    }

    public function updateState($shiftId, $newState)
    {
        $shift = Shift::find($shiftId);
        if ($shift) {
            $shift->state = $newState;
            $shift->save();
        }
    }

    public function assignBox($shiftId, $boxNumber)
    {
        $shift = Shift::find($shiftId);
        if ($shift) {
            $shift->box = $boxNumber;
            $shift->state = 'progress';
            $shift->save();
        }
    }

    public function deleteShift($shiftId)
    {
        $shift = Shift::find($shiftId);
        if ($shift) {
            $shift->delete();
        }
    }
}

