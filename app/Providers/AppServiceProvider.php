<?php

namespace App\Providers;

use Livewire\Livewire;
use App\Http\Livewire\IssueDrugs;
use App\Http\Livewire\PatientHistory;
use App\Http\Livewire\PatientDiagnosis;
use Illuminate\Support\ServiceProvider;
use App\Http\Livewire\ListOfDrugsIssued;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Livewire::component('IssueDrugs', IssueDrugs::class);
        Livewire::component('ListOfDrugsIssued', ListOfDrugsIssued::class);
        Livewire::component('PatientHistory', PatientHistory::class);
        Livewire::component('PatientDiagnosis', PatientDiagnosis::class);
    }
}
