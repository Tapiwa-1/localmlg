<?php

namespace App\Http\Controllers;

use App\Models\town;
use App\Models\Townofficer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
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
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
        $response = Gate::inspect('edit-settings');
        $townOfficers = User::query()
        ->when(FReq::input('search'), function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->where('role','=','townofficer')
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
        return Inertia::render("Backend/User/Townoffice/Index", compact('townOfficers', 'filters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
        return Inertia::render('Backend/User/Townoffice/Create');
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
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required',
            'email' =>'required | unique:users',
            'province' =>'required',
            // 'town' =>'required',

            'password' =>'required',
        ]);
        // $province = town::where('name', $request->town)->first();
        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'role'=>'townofficer',
            'password'=>Hash::make($request->password),
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
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
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
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
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
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
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
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
    }
}
