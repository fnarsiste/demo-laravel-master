<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\MissionController;
use App\Models\Auteur;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('auteurs', AuteurController::class);
// OU
// Route::get('/auteurs', [AuteurController::class, 'index'])->name('auteurs.index');
