@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row mt-2 mx-2 py-1 float-right">
                    <a href="{{ route('treatments.create', $patient->id) }}" class="btn btn-primary">Add New Diagnosis</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Patient's Treatment History</p>
                    </div>
                    <div class="card-body">
                        <div class="card" style="width: 500px;">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    @if ($patient->sex == 'M')
                                        <img class="card-img" src="{{ asset('assets/imgs/male.png') }}" alt="{{ $patient->fName }} Card">
                                    @else
                                        <img class="card-img" src="{{ asset('assets/imgs/female.png') }}" alt="{{ $patient->fName }} Card">
                                    @endif
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $patient->fName }} {{ $patient->lName }} | {{ $patient->age() }}y</h5>
                                        @if ($patient->bldGrp == "1")
                                            <p class="card-text">Blood Group : A+</p>
                                        @elseif ($patient->bldGrp == "2")
                                            <p class="card-text">Blood Group : A-</p>
                                        @elseif ($patient->bldGrp == "3")
                                            <p class="card-text">Blood Group : B+</p>
                                        @elseif ($patient->bldGrp == "4")
                                            <p class="card-text">Blood Group : B-</p>
                                        @elseif ($patient->bldGrp == "5")
                                            <p class="card-text">Blood Group : AB+</p>
                                        @elseif ($patient->bldGrp == "6")
                                            <p class="card-text">Blood Group : AB-</p>
                                        @elseif ($patient->bldGrp == "7")
                                            <p class="card-text">Blood Group : O+</p>
                                        @elseif($patient->bldGrp == "8")
                                            <p class="card-text">Blood Group : O-</p>
                                        @endif
                                        
                                        <p class="card-text">Birthday : {{ $patient->bDay }}</p>
                                        <p class="card-text">Phone Number : {{ $patient->phnNmbr }}</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    @foreach ($treatments as $treatment)
                        <div class="card">
                            <div class="card-header" id="heading{{ $treatment->id }}">
                                <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $treatment->id }}" aria-expanded="false" aria-controls="collapse{{ $treatment->id }}">
                                    Diagnosis Report on: {{ $treatment->created_at }}
                                </button>
                                </h2>
                            </div>
                            <div id="collapse{{ $treatment->id }}" class="collapse show" aria-labelledby="heading{{ $treatment->id }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{ $treatment->diagnosis }}
                                </div>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row mt-2 mx-2 py-1 float-right">
                    <a href="{{ route('patients.index') }}" class="btn btn-outline-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
