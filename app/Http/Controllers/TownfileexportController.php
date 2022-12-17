<?php

namespace App\Http\Controllers;

use App\Exports\ExportChief;
use App\Exports\ExportHeadman;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TownfileexportController extends Controller
{
    public function chiefexport()
    {
        return Excel::download(new ExportChief, 'chief.xlsx');
    }
    public function headmanexport()
    {
        return Excel::download(new ExportHeadman, 'headman.xlsx');
    }
    public function villageheadexport()
    {
        return Excel::download(new ExportChief, 'villagehead.xlsx');
    }
}
