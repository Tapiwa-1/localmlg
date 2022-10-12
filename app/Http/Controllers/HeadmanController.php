<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeadmanRequest;
use App\Http\Requests\HeadmanUpdateRequest;
use App\Http\Requests\UpdateHeadmanRequest;
use App\Models\Headman;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
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
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString()
            ->through(fn ($headman) => [
                'id' => $headman->id,
                'name' => $headman->name,
                'district' => $headman->district,
                'headmanship' => $headman->headmanship,
                'gender' => $headman->gender,
                'slug' => $headman->slug,
            ]);
        $filters = Request::only(['search']);
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
    public function store(HeadmanRequest $request)
    {
        //
        Headman::create($request->validated());
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
