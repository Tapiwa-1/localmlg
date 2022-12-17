<?php

namespace App\Exports;

use App\Models\Headman;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportHeadman implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Headman::all();
    }
}
