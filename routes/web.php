<?php

use App\Http\Controllers\ChiefController;
use App\Http\Controllers\DistrictdetailsController;
use App\Http\Controllers\HeadmanController;
use App\Http\Controllers\VillageheadController;
use App\Http\Controllers\TownofficerController;
use App\Http\Controllers\ProvincialofficerController;
use App\Http\Controllers\DistrictofficerController;
use App\Http\Controllers\ProvincialchiefController;
use App\Http\Controllers\ProvincialdetailsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::group(['middleware' => ['auth', 'verified']], function () {

    //admin
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource(name: '/user/town', controller: TownofficerController::class);
    Route::resource(name: '/user/provincial', controller: ProvincialofficerController::class);
    Route::resource(name: '/user/district', controller: DistrictofficerController::class);
    Route::get('/user', function () {
        if (!Gate::allows('edit-users', Auth::user()->role)) {
            abort(403);
        }
        return Inertia::render('Backend/User/Index');
    })->name('users');

    //Town dashboard
    Route::get('/townboard', function () {
        return Inertia::render('Townboard/Dashboard');
    })->name('townboard');
    Route::resource(name: '/chief', controller: ChiefController::class);
    Route::get('generate-pdf', [ChiefController::class, 'generatePDF'])->name('generatepdf');
    Route::get('fileexport',[ChiefController::class,'fileExport'])->name('fileexport');
    Route::resource(name: '/headman', controller: HeadmanController::class);
    Route::resource(name: '/villagehead', controller: VillageheadController::class);

    //Province dashboard
    Route::get('/provinceboard', function () {
        return Inertia::render('Provinceboard/Dashboard');
    })->name('provinceboard');
    Route::get('/provinceboard/chiefs', [ProvincialdetailsController::class,'chiefs'])->name('province.chiefs');
    Route::get('/provinceboard/headmans', [ProvincialdetailsController::class,'headmans'])->name('province.headmans');
    Route::get('/provinceboard/villageheads', [ProvincialdetailsController::class,'villageheads'])->name('province.villageheads');

    //District dashboard
    Route::get('/districtboard', function () {
        return Inertia::render('Districtboard/Dashboard');
    })->name('districtboard');
     Route::get('/districtboard/chiefs', [DistrictdetailsController::class,'chiefs'])->name('district.chiefs');
    Route::get('/districtboard/headmans', [DistrictdetailsController::class,'headmans'])->name('district.headmans');
    Route::get('/districtboard/villageheads', [DistrictdetailsController::class,'villageheads'])->name('district.villageheads');


});

require __DIR__ . '/auth.php';
