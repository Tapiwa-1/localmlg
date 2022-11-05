<?php

namespace App\Http\Controllers;

use App\Http\Requests\VillageheadRequest;
use App\Http\Requests\VillageheadUpdateRequest;

use App\Models\Villagehead;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
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
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString()
            ->through(fn ($villagehead) => [
                'id' => $villagehead->id,
                'name' => $villagehead->name,
                'district' => $villagehead->district,
                'villageheadship' => $villagehead->villageheadship,
                'gender' => $villagehead->gender,
                'slug' => $villagehead->slug,
            ]);
        $filters = Request::only(['search']);
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
    public function store(VillageheadRequest $request)
    {
        //

        Villagehead::create($request->validated());
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
        return Inertia::render("Backend/Villagehead/Show", compact('villagehead'));
        //
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

        return Inertia::render('Backend/Villagehead/Edit', compact('villagehead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\villagehead  $villagehead
     * @return \Illuminate\Http\Response
     */
    public function update(VillageheadUpdateRequest $request, Villagehead $villagehead)
    {
        //
        $villagehead->update($request->validated());

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
