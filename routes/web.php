<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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
Route::get('/', [MainController::class, 'display']);

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::get('logout', [SessionController::class, 'destroy'])->middleware('checkLog');

Route::get('visites', [VisitesController::class, 'display'])->middleware('checkLog');
Route::get('ajouter-visite', [VisitesController::class, 'create'])->middleware('checkLog');
Route::post('ajouter-visite', [VisitesController::class, 'store'])->middleware('checkLog');

Route::get('modifier-visite/{visite}', [VisitesController::class, 'c_edit'])
    ->middleware('checkLog')
    ->middleware('rapportCheck');

Route::post('modifier-visite/{visite}', [VisitesController::class, 'edit'])
    ->middleware('checkLog')
    ->middleware('rapportCheck');

Route::get('mes-medecins/', [UserMedecinsController::class, 'index'])->middleware('checkLog');

Route::get('medecin/rapports/{medecin}', [UserMedecinsController::class, 'rapports'])
    ->middleware('checkLog')
    ->middleware('visiteurCheck');

Route::get('medecin/modifier/{medecin}', [UserMedecinsController::class, 'create'])
    ->middleware('checkLog')
    ->middleware('visiteurCheck');
Route::post('medecin/modifier/{medecin}', [UserMedecinsController::class, 'store'])
    ->middleware('checkLog')
    ->middleware('visiteurCheck');


