<?php

namespace App\Exports;

use App\Models\Habitacion;
use Maatwebsite\Excel\Concerns\FromCollection;

class HabitacionesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Habitacion::all();
    }
}
