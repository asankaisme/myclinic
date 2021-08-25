<?php

use App\Http\Controllers\DrugsController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TreatmentsController;
use App\Http\Livewire\DrugModal;
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

Route::get('/issues/create/{id}', [IssuesController::class, 'create'])->name('issues.create');

Route::view('/drug', 'drug.index')->name('drug');
Route::get('/drug/{id}', DrugModal::class)->name('findDrug');