<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeadmanRequest;
use App\Http\Requests\HeadmanUpdateRequest;
use App\Http\Requests\UpdateHeadmanRequest;
use App\Models\District;
use App\Models\Headman;
use Illuminate\Http\Request;
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
        $headmans = Headman::query()
        ->when(FReq::input('search'), function ($query, $search) {
            $query->where('incumbent', 'like', "%{$search}%");
        })
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
        return Inertia::render("Backend/Headman/Index", compact('headmans', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render("Backend/Headman/Create");
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
             $validated = $request->validate([
            'district' => 'required',
            'province' => 'required',
            'headmanship' =>'required',
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
        return Inertia::render("Backend/Headman/Show", compact('headman'));
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

        return Inertia::render('Backend/Headman/Edit', compact('headman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Headman  $headman
     * @return \Illuminate\Http\Response
     */
    public function update(HeadmanUpdateRequest $request, Headman $headman)
    {
        //
        $headman->update($request->validated());

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
        $headman->delete();
        return back()->with('message', 'Headman Deleted Successfull');
    }
}
