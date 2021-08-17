<?php

use App\Http\Controllers\DrugsController;
use App\Http\Controllers\PatientsController;
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