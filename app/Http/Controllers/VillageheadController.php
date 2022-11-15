<?php

namespace App\Http\Controllers;

use App\Http\Requests\VillageheadRequest;
use App\Http\Requests\VillageheadUpdateRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FReq;
use App\Models\District;
use App\Models\Villagehead;
// use Illuminate\Http\Request;

use Inertia\Inertia;



class VillageheadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $villageheads = villagehead::query()
            ->when(FReq::input('search'), function ($query, $search) {
                $query->where('incumbent', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString()
            ->through(fn ($villagehead) => [
                'id' => $villagehead->id,
                'incumbent' => $villagehead->incumbent,
                'province' => $villagehead->province,
                'district' => $villagehead->district,
                'headmanship' => $villagehead->headmanship,
                'gender' => $villagehead->gender,
                'slug' => $villagehead->slug,
            ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Backend/VillageHead/Index", compact('villageheads', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render("Backend/VillageHead/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'district' => 'required',
            'province' => 'required',
            'mutupo' => 'required',
            'incumbent' => 'required',
            'chieftainship'=>'required',
            'headmanship'=>'required',
            'numberofhousehold'=>'required',
            'idnumber' => 'required | unique:villageheads',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'dateofappointment' => 'required',
            'status' => 'required',
            'contactnumber' => 'required',
            'bankdetails'=>'required',
            'dateofdeathorremoval' => 'nullable',
            'chieftainship' =>'required'

        ]);
        $province = District::where('name', $request->district)->first();
        Villagehead::create([
            'district' => $request->district,
            'province' => $province->province,
            'mutupo' => $request->mutupo,
            'chieftainship'=>$request->chieftainship,
            'headmanship'=>$request->headmanship,
            'incumbent' => $request->incumbent,
            'idnumber' => $request->idnumber,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'dateofappointment' => $request->dateofappointment,
            'status' => $request->status,
            'bankdetails' =>$request->bankdetails,
            'contactnumber' => $request->contactnumber,
            'numberofhousehold'=>$request->numberofhousehold,
            'dateofdeathorremoval' => $request->dateofdeathorremoval,
        ]);
        return to_route('villagehead.index')->with('message', 'villagehead Created Successfull');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\villagehead  $villagehead
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $villagehead = Villagehead::where('slug', $slug)->first();
        return Inertia::render("Backend/VillageHead/Show", compact('villagehead'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\villagehead  $villagehead
     * @return \Illuminate\Http\Response
     */
    public function edit(Villagehead $villagehead)
    {
        //

        return Inertia::render('Backend/VillageHead/Edit', compact('villagehead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\villagehead  $villagehead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villagehead $villagehead)
    {
        //
        $validated = $request->validate([
            'district' => 'required',
            'province' => 'required',
            'mutupo' => 'required',
            'incumbent' => 'required',
            'chieftainship'=>'required',
            'headmanship'=>'required',
            'numberofhousehold'=>'required',
            'idnumber' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'dateofappointment' => 'required',
            'status' => 'required',
            'contactnumber' => 'required',
            'bankdetails'=>'required',
            'dateofdeathorremoval' => 'nullable',
            'chieftainship' =>'required'

        ]);
        $province = District::where('name', $request->district)->first();
        $villagehead->update([
            'district' => $request->district,
            'province' => $province->province,
            'mutupo' => $request->mutupo,
            'chieftainship'=>$request->chieftainship,
            'headmanship'=>$request->headmanship,
            'incumbent' => $request->incumbent,
            'idnumber' => $request->idnumber,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'dateofappointment' => $request->dateofappointment,
            'status' => $request->status,
            'bankdetails' =>$request->bankdetails,
            'contactnumber' => $request->contactnumber,
            'numberofhousehold'=>$request->numberofhousehold,
            'dateofdeathorremoval' => $request->dateofdeathorremoval,
        ]);

        return to_route('villagehead.index')->with('message', 'villagehead Edited Successfull');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\villagehead  $villagehead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villagehead $villagehead)
    {
        //
        $villagehead->delete();
        return back()->with('message', 'villagehead Deleted Successfull');
    }
}
