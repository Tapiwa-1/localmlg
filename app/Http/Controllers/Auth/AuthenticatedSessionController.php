<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $details = User::where(['role'=>$request->role,'email'=>$request->email])->first();

        if (!isset($details->role)){
            return;
        }
        $request->authenticate();
        $request->session()->regenerate();

        if  ($request->role == 'admin' && $details->role == 'admin'){
            return redirect()->intended(RouteServiceProvider::HOME);
        }elseif($request->role == 'townofficer' && $details->role == 'townofficer') {
            return redirect()->intended(RouteServiceProvider::HOME);

        }elseif($request->role =='provincialofficer' && $details->role == 'provincialofficer'){
            return redirect()->intended(RouteServiceProvider::HOME);
        }elseif($request->role =='districtofficer' && $details->role == 'districtofficer'){
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
