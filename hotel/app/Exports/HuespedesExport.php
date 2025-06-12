<?php

namespace App\Exports;

use App\Models\Huesped;
use Maatwebsite\Excel\Concerns\FromCollection;

class HuespedesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Huesped::all();
    }
}
