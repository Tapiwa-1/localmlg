<?php

namespace App\Http\Controllers;

use App\Models\provincial;
use App\Models\Provincialofficer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request as FReq;// use Illuminate\Http\Request;
class ProvincialofficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincialOfficers = Provincialofficer::query()
        ->when(FReq::input('search'), function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->paginate(5)
        ->withQueryString()
        ->through(fn ($provincialOfficers) => [
            'id' => $provincialOfficers->id,
            'name' => $provincialOfficers->name,
            'email' => $provincialOfficers->email,
            'province' => $provincialOfficers->province,
            'provincial'=> $provincialOfficers->provincial,
            'slug' => $provincialOfficers->slug,
        ]);
        $filters = FReq::only(['search']);
        return Inertia::render("Backend/User/Provincial/Index", compact('provincialOfficers', 'filters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Backend/User/Provincial/Create');
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
            'email' =>'required | unique:provincialofficers',
            'province' =>'required',
            // 'provincial' =>'required',
            'password' =>'required',
        ]);
        // $province = provincial::where('name', $request->provincial)->first();
        Provincialofficer::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'province' => $request->province,
        ]);

        return to_route('provincial.index')->with('message', 'Provincial officer created Successfull');

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
