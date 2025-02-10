<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Shift;

class CreateShiftComponent extends Component
{
    public $name, $document, $problem;

    protected $rules = [
        'name' => 'required|string|max:255',
        'document' => 'required|string|max:20',
        'problem' => 'required|string|max:500',
    ];

    public function generateShift()
    {
        $this->validate();

        $shift = Shift::create([
            'name' => $this->name,
            'document' => $this->document,
            'problem' => $this->problem,
            'number' => Shift::generateNumberofShift(),
            'date' => now()->toDateString(),
        ]);

        session()->flash('message', "Su turno es el número {$shift->number}");

        // Limpiar formulario
        $this->reset(['name', 'document', 'problem']);
    }

    public function render()
    {
        return view('livewire.create-shift-component');
    }
}

