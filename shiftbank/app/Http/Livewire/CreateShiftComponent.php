<?php

namespace App\Http\Livewire;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

use Livewire\Component;
use App\Models\Shift;

class CreateShiftComponent extends Component
{
    public $step = 1;
    public $name, $document, $problem;

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

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
    
        // Imprimir ticket
        $this->printTicket($shift);
    }
    
    public function printTicket($shift)
{
    try {
        // Datos a enviar
        $data = [
            'company' => "Los leones de Juda",
            'turno' => "{$shift->number}",
            'message' => "Turno: {$shift->number} - {$shift->name}\n {$shift->problem}"
        ];
            

        // Enviar la solicitud POST
        $client = new \GuzzleHttp\Client();
        $response = $client->post('http://10.0.11.20:8080/api/print', [
            'json' => $data
        ]);

        // Verificar si la solicitud fue exitosa
        if ($response->getStatusCode() == 200) {
            session()->flash('message', 'Ticket impreso correctamente!');
        } else {
            session()->flash('error', 'No se pudo imprimir el ticket!');
        }
    } catch (\Exception $e) {
        // Manejo de errores
        session()->flash('error', "Error al imprimir el ticket: " . $e->getMessage());
    }
}


    public function render()
    {
        return view('livewire.create-shift-component');
    }
}