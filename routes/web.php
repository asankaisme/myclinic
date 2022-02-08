<?php

use App\Http\Livewire\AddDrug;
use App\Http\Livewire\IssuDrug;
use App\Http\Livewire\DrugModal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TreatmentsController;


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

Route::get('/issues/create/{id}/{patient_id}', [IssuesController::class, 'create'])->name('issues.create');

//Route::view('/issues/issueDrug/{id}', 'issue.index')->name('issueDrug');
//Route::get('/issues/issueDrug/{id}', IssuDrug::class)->name('issueDrug');

//Route::view('/drug', 'drug.index')->name('drug');
//Route::get('/drug/{id}', DrugModal::class)->name('findDrug');
//Route::get('/drug/edit/{id}/{updateStatus}', AddDrug::class)->name('editDrug');
//Route::post('/drugs/create', [DrugsController::class, 'store'])->name('drugs.create');