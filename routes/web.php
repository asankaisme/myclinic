<?php

use App\Http\Controllers\DrugsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TreatmentsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.mylogin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'patients' => PatientsController::class,
    'drugs' => DrugsController::class,
]);

Route::get('/treatments/create/{id}', [TreatmentsController::class, 'create'])->name('treatments.create');
Route::post('/treatments/create', [TreatmentsController::class, 'store'])->name('treatments.store');

Route::view('/drug', 'drug.index')->name('drug');