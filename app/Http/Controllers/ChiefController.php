<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChiefRequest;
use App\Models\Chief;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
        $chiefs = Chief::paginate(5)
            ->through(fn ($chief) => [
                'id' => $chief->id,
                'name' => $chief->name,
                'district' => $chief->district,
                'chieftainship' => $chief->chieftainship,
                'gender' => $chief->gender,
                'slug' => $chief->slug,
            ]);
        return Inertia::render("Backend/Chief/Index", compact('chiefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return Inertia::render("Backend/Chief/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChiefRequest $request)
    {
        //
        Chief::create($request->validated());
        return to_route('chief.index');
        // ->with('message', 'Chief Created Successfull');
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
        return Inertia::render("Backend/Chief/Show", compact('chief'));
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
        return Inertia::render('Backend/Chief/Edit', compact('chief'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chief  $chief
     * @return \Illuminate\Http\Response
     */
    public function update(ChiefRequest $request, Chief $chief)
    {
        //
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
    }
}
