<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeadmanRequest;
use App\Http\Requests\HeadmanUpdateRequest;
use App\Http\Requests\UpdateHeadmanRequest;
use App\Models\District;
use App\Models\Headman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request as FReq;// use Illuminate\Http\Request;

use Inertia\Inertia;



class HeadmanController extends Controller
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
        $headmans = Headman::query()
        ->when(FReq::input('search'), function ($query, $search) {
            $query->where('incumbent', 'like', "%{$search}%");
        })
        ->paginate(10)
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
        return Inertia::render("Townboard/Headman/Index", compact('headmans', 'filters','editDetails'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        return Inertia::render("Townboard/Headman/Create");
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
            'headmanship' =>'required',
            'chieftainship' => 'required',
            'mutupo' => 'required',
            'incumbent' => 'required',
            'idnumber' => 'required | unique:headmans',
            'ecnumber' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'dateofappointment' => 'required',
            'status' => 'required',
            'contactnumber' => 'required',
            'numberofhousehold'=>'required| numeric',
            'numberofwards' => 'required | numeric',
            'numberofvillages' => 'required | numeric',
            'dateofdeathorremoval' => 'nullable',
            'physicalladdress' => 'required',

        ]);

        $province = District::where('name', $request->district)->first();
        Headman::create([
            'district' => $request->district,
            'province' => $province->province,
            'headmanship' =>$request->headmanship,
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
            'numberofhousehold' => $request->numberofhousehold,
            'numberofwards' => $request->numberofwards,
            'numberofvillages' => $request->numberofvillages,
            'dateofdeathorremoval' => $request->dateofdeathorremoval,
            'physicalladdress' => $request->physicalladdress,
        ]);
        return to_route('headman.index')->with('message', 'Headman Created Successfull');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Headman  $headman
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $headman = Headman::where('slug', $slug)->first();
        return Inertia::render("Townboard/Headman/Show", compact('headman'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Headman  $headman
     * @return \Illuminate\Http\Response
     */
    public function edit(Headman $headman)
    {
        //
         if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }

        return Inertia::render('Townboard/Headman/Edit', compact('headman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Headman  $headman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Headman $headman)
    {
        //
         if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        $validated = $request->validate([
            'district' => 'required',
            'province' => 'required',
            'headmanship' =>'required',
            'chieftainship' => 'required',
            'mutupo' => 'required',
            'incumbent' => 'required',
            'idnumber' => 'required',
            'ecnumber' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'dateofappointment' => 'required',
            'status' => 'required',
            'contactnumber' => 'required',
            'numberofhousehold'=>'required| numeric',
            'numberofwards' => 'required | numeric',
            'numberofvillages' => 'required | numeric',
            'dateofdeathorremoval' => 'nullable',
            'physicalladdress' => 'required',

        ]);
        $province = District::where('name', $request->district)->first();

        $headman->update([
            'district' => $request->district,
            'province' => $province->province,
            'headmanship' =>$request->headmanship,
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
            'numberofhousehold' => $request->numberofhousehold,
            'numberofwards' => $request->numberofwards,
            'numberofvillages' => $request->numberofvillages,
            'dateofdeathorremoval' => $request->dateofdeathorremoval,
            'physicalladdress' => $request->physicalladdress,
        ]);

        return to_route('headman.index')->with('message', 'Headman Edited Successfull');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Headman  $headman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headman $headman)
    {
        //
         if (!Gate::allows('edit-data',Auth::user()->role)){
            abort(403);
        }
        $headman->delete();
        return back()->with('message', 'Headman Deleted Successfull');
    }
}
