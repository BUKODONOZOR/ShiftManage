<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shift;

class PublicShiftListComponent extends Component
{
    public function render()
    {
        $turnosEnProceso = Shift::where('state', 'progress')
            ->orderBy('box')
            ->take(4)
            ->get()
            ->map(function ($turno) {
                $turno->random_module = rand(1, 4);
                return $turno;
            });

        $turnoActual = $turnosEnProceso->first();

        return view('livewire.public-shift-list-component', compact('turnosEnProceso', 'turnoActual'));
    }
}