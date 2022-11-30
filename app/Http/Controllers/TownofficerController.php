<?php

namespace App\Http\Controllers;

use App\Models\town;
use App\Models\Townofficer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request as FReq;// use Illuminate\Http\Request;
class TownofficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $townOfficers = Townofficer::query()
        ->when(FReq::input('search'), function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->paginate(5)
        ->withQueryString()
        ->through(fn ($townOfficers) => [
            'id' => $townOfficers->id,
            'name' => $townOfficers->name,
            'email' => $townOfficers->email,
            'province' => $townOfficers->province,
            'town'=> $townOfficers->town,
            'slug' => $townOfficers->slug,
        ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Backend/User/Town/Index", compact('townOfficers', 'filters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Backend/User/Town/Create');
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
            'name' => 'required',
            'email' =>'required | unique:townofficers',
            'province' =>'required',
            // 'town' =>'required',
            'password' =>'required',
        ]);
        // $province = town::where('name', $request->town)->first();
        Townofficer::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'province' => $request->province,
        ]);

        return to_route('town.index')->with('message', 'town officer created Successfull');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
