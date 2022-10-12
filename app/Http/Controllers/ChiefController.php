<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChiefRequest;
use App\Http\Requests\UpdateChiefRequest;
use App\Models\Chief;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
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
        $chiefs = Chief::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString()
            ->through(fn ($chief) => [
                'id' => $chief->id,
                'name' => $chief->name,
                'district' => $chief->district,
                'chieftainship' => $chief->chieftainship,
                'gender' => $chief->gender,
                'slug' => $chief->slug,
            ]);
        $filters = Request::only(['search']);
        return Inertia::render("Backend/Chief/Index", compact('chiefs', 'filters'));
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
    public function update(UpdateChiefRequest $request, Chief $chief)
    {
        //
        $chief->update($request->validated());

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
        $chief->delete();
        return back()->with('message', 'Chief Deleted Successfull');
    }
}
