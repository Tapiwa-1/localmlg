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

class ChiefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // Auth::user()->role
        if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        return Inertia::render("Townboard/Chief/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        $validated = $request->validate([
            'district' => 'required',
            'province' => 'required',
            'chieftainship' => 'required',
            'mutupo' => 'required',
            'incumbent' => 'required',
            'idnumber' => 'required | unique:chiefs',
            'ecnumber' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'dateofappointment' => 'required',
            'status' => 'required',
            'contactnumber' => 'required',
            'numberofheadman' => 'required | numeric',
            'numberofwards' => 'required | numeric',
            'numberofvillages' => 'required | numeric',
            'dateofdeathorremoval' => 'nullable',
            'physicalladdress' => 'required',

        ]);

        $province = District::where('name', $request->district)->first();
        // dd($province->province);
        Chief::create([
            'district' => $request->district,
            'province' => $province->province,
            'chieftainship' => $request->chieftainship,
            'mutupo' => $request->mutupo,
            'incumbent' => $request->incumbent,
            'idnumber' => $request->idnumber,
            'ecnumber' => $request->ecnumber,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'dateofappointment' => $request->dateofappointment,
            'status' => $request->status,
            'contactnumber' => $request->contactnumber,
            'numberofheadman' => $request->numberofheadman,
            'numberofwards' => $request->numberofwards,
            'numberofvillages' => $request->numberofvillages,
            'dateofdeathorremoval' => $request->dateofdeathorremoval,
            'physicalladdress' => $request->physicalladdress,
        ]);
        return to_route('chief.index')->with('message', 'Chief Created Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $chief = Chief::where('slug', $slug)->first();
        return Inertia::render("Townboard/Chief/Show", compact('chief'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function edit(Chief $chief)
    {
        //
         if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        return Inertia::render('Backend/Chief/Edit', compact('chief'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chief $chief)
    {
        //
         if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        $validated = $request->validate([
            'district' => 'required',
            'province' => 'required',
            'chieftainship' => 'required',
            'mutupo' => 'required',
            'incumbent' => 'required',
            'idnumber' => 'required | unique:chiefs',
            'ecnumber' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'dateofappointment' => 'required',
            'status' => 'required',
            'contactnumber' => 'required',
            'numberofheadman' => 'required | numeric',
            'numberofwards' => 'required | numeric',
            'numberofvillages' => 'required | numeric',
            'dateofdeathorremoval' => 'nullable',
            'physicalladdress' => 'required',

        ]);
        $province = District::where('name', $request->district)->first();
        $chief->update([
            'district' => $request->district,
            'province' => $province->province,
            'chieftainship' => $request->chieftainship,
            'mutupo' => $request->mutupo,
            'incumbent' => $request->incumbent,
            'idnumber' => $request->idnumber,
            'ecnumber' => $request->ecnumber,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'dateofappointment' => $request->dateofappointment,
            'status' => $request->status,
            'contactnumber' => $request->contactnumber,
            'numberofheadman' => $request->numberofheadman,
            'numberofwards' => $request->numberofwards,
            'numberofvillages' => $request->numberofvillages,
            'dateofdeathorremoval' => $request->dateofdeathorremoval,
        ]);

        return to_route('chief.index')->with('message', 'Chief Edited Successfull');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chief $chief)
    {
        //
        if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        $chief->delete();
        return back()->with('message', 'Chief Deleted Successfull');
    }
}
