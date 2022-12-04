<?php

namespace App\Http\Controllers;

use App\Exports\ExportChief;
use App\Http\Requests\ChiefRequest;
use App\Http\Requests\UpdateChiefRequest;
use App\Models\Chief;
use App\Models\District;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use PDF;

use Illuminate\Http\Request as Req;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FReq;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class ProvincialchiefController extends Controller
{
     public function index()
    {
        //
        $editDetails = true;
        if (!Gate::allows('edit-data',Auth::user()->role)){
            $editDetails = false;
        }
        $chiefs = Chief::query()
            ->when(FReq::input('search'), function ($query, $search) {
                $query->where('chieftainship', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString()
            ->through(fn ($chief) => [
                'id' => $chief->id,
                'province' => $chief->province,
                'district' => $chief->district,
                'chieftainship' => $chief->chieftainship,
                'incumbent' => $chief->incumbent,
                'slug' => $chief->slug,
            ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Townboard/Chief/Index", compact('chiefs', 'filters','editDetails'));
    }
    public function fileExport()
    {

        return Excel::download(new ExportChief, 'chief.xlsx');
    }
    public function generatePDF(Req $request)
    {
        $chiefs = Chief::all();
        $pdf = PDF::loadView('chiefs', compact('chiefs'));
        // download PDF file with download method
        // return Excel::download(new ExportUser, 'users.xlsx');
        return $pdf->download('pdf_file.pdf');
    }

}
