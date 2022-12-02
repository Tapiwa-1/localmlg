<?php

use App\Http\Controllers\ChiefController;
use App\Http\Controllers\HeadmanController;
use App\Http\Controllers\VillageheadController;
use App\Http\Controllers\TownofficerController;
use App\Http\Controllers\ProvincialofficerController;
use App\Http\Controllers\DistrictofficerController;
use Illuminate\Foundation\Application;
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
        return Inertia::render('Backend/User/Index');
    })->name('users');

    //Town board
    Route::get('/townboard', function () {
        return Inertia::render('Townboard/Dashboard');
    })->name('townboard');
    Route::resource(name: '/chief', controller: ChiefController::class);
    Route::get('generate-pdf', [ChiefController::class, 'generatePDF'])->name('generatepdf');
    Route::get('fileexport',[ChiefController::class,'fileExport'])->name('fileexport');
    Route::resource(name: '/headman', controller: HeadmanController::class);
    Route::resource(name: '/villagehead', controller: VillageheadController::class);
});

require __DIR__ . '/auth.php';
