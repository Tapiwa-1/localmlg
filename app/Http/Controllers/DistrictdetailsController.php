<?php

namespace App\Http\Controllers;

use App\Exports\ExportChief;
use App\Http\Requests\ChiefRequest;
use App\Http\Requests\UpdateChiefRequest;
use App\Models\Chief;
use App\Models\District;
use App\Models\Headman;
use App\Models\Villagehead;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use PDF;

use Illuminate\Http\Request as Req;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FReq;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class DistrictdetailsController extends Controller
{
    //

    public function chiefs()
    {
        $editDetails = true;
        if (!Gate::allows('edit-data', Auth::user()->role)) {
            $editDetails = false;
        }
        $chiefs = Chief::query()
            ->when(FReq::input('search'), function ($query, $search) {
                $query->where('chieftainship', 'like', "%{$search}%");
            })
            ->where('province',Auth::user()->district)
            ->paginate(5)
            ->withQueryString()
            ->through(fn($chief) => [
                'id' => $chief->id,
                'province' => $chief->province,
                'district' => $chief->district,
                'chieftainship' => $chief->chieftainship,
                'incumbent' => $chief->incumbent,
                'slug' => $chief->slug,
            ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Districtboard/Chief/Index", compact('chiefs', 'filters', 'editDetails'));
    }
    public function headmans(){
        $editDetails = true;
        if (!Gate::allows('edit-data',Auth::user()->role)){
            $editDetails = false;
        }
        $headmans = Headman::query()
        ->when(FReq::input('search'), function ($query, $search) {
            $query->where('incumbent', 'like', "%{$search}%");
        })
        ->where('province',Auth::user()->district)
        ->paginate(5)
        ->withQueryString()
        ->through(fn ($headmans) => [
            'id' => $headmans->id,
            'province' => $headmans->province,
            'district' => $headmans->district,
            'headmanship' => $headmans->headmanship,
            'incumbent' => $headmans->incumbent,
            'slug' => $headmans->slug,
        ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Districtboard/Headman/Index", compact('headmans', 'filters','editDetails'));

    }
    public function villageheads()
    {
        $editDetails = true;
        if (!Gate::allows('edit-data', Auth::user()->role)) {
            $editDetails = false;
        }
        $villageheads = Villagehead::query()
            ->when(FReq::input('search'), function ($query, $search) {
                $query->where('incumbent', 'like', "%{$search}%");
            })
            ->where('province', Auth::user()->district)
            ->paginate(5)
            ->withQueryString()
            ->through(fn($villagehead) => [
                'id' => $villagehead->id,
                'incumbent' => $villagehead->incumbent,
                'province' => $villagehead->province,
                'district' => $villagehead->district,
                'headmanship' => $villagehead->headmanship,
                'gender' => $villagehead->gender,
                'slug' => $villagehead->slug,
            ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Districtboard/VillageHead/Index", compact('villageheads', 'filters', 'editDetails'));
    }
}
