<?php

namespace App\Exports;

use App\Models\Chief;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportChief implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Chief::all();
    }
}
