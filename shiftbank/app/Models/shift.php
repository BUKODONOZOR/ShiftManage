<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'document', 'problem', 'number', 
        'state', 'box', 'date'
    ];

    public static function generateNumberofShift()
    {
        $hoy = now()->toDateString();
        $ultimoTurno = self::where('date', $hoy)->max('number');

        return ($ultimoTurno >= 99) ? 1 : ($ultimoTurno + 1);
    }
}

