@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row mt-2 mx-2 py-1 float-right">
                    {{-- <a href="{{ route('treatments.create', $patient->id) }}" class="btn btn-primary">Add New Diagnosis</a> --}}
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header bg-transparent border-primary">
                        <p>New Diagnosis for : <span class="text-primary"> {{ $patient->fName }} {{ $patient->lName }}</span></p>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div class="card border-primary" style="width: 18rem;">
                                    @if ($patient->sex == 'M')
                                        <img class="card-img-top" src="{{ asset('assets/imgs/male.png') }}" alt="{{ $patient->fName }} Card">
                                    @else
                                        <img class="card-img-top" src="{{ asset('assets/imgs/female.png') }}" alt="{{ $patient->fName }} Card">
                                    @endif
                                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                                    <div class="card-body">
                                      <h5 class="card-title"><span class="text-primary">{{ $patient->age() }}y</span></h5>
                                        <p class="card-text">
                                            @if ($patient->bldGrp == "1")
                                                <p class="card-text">Blood Group : <span class="text-primary">A+</span></p>
                                            @elseif ($patient->bldGrp == "2")
                                                <p class="card-text">Blood Group : <span class="text-primary">A-</span></p>
                                            @elseif ($patient->bldGrp == "3")
                                                <p class="card-text">Blood Group : <span class="text-primary">B+</span></p>
                                            @elseif ($patient->bldGrp == "4")
                                                <p class="card-text">Blood Group : <span class="text-primary">B-</span></p>
                                            @elseif ($patient->bldGrp == "5")
                                                <p class="card-text">Blood Group : <span class="text-primary">AB+</span></p>
                                            @elseif ($patient->bldGrp == "6")
                                                <p class="card-text">Blood Group : <span class="text-primary">AB-</span></p>
                                            @elseif ($patient->bldGrp == "7")
                                                <p class="card-text">Blood Group : <span class="text-primary">O+</span></p>
                                            @elseif($patient->bldGrp == "8")
                                                <p class="card-text">Blood Group : <span class="text-primary">O-</span></p>
                                            @endif
                                        </p>
                                        <p class="card-text">Birthday : <span class="text-primary">{{ $patient->bDay }}</span></p>
                                        <p class="card-text">Phone Number : <span class="text-primary">{{ $patient->phnNmbr }}</span></p>
                                    </div>
                                  </div>
                            </div>
                            {{-- text area for diagnosis report --}}
                            <div class="col-md-8">
                                {{-- livewire component must go here --}}
                                {{-- @livewire('PatientDiagnosis', ['patient_id' => $patient->id]) --}}
                                {{-- @livewire('PatientDiagnosis', ['patient' => $patient]) --}}
                                <form action="{{ route('treatments.store') }}" method="post">
                                    {{-- @method("PUT") --}}
                                    @csrf
                                    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                    <textarea name="diagnosis" name="diagnosis" cols="85" rows="20" placeholder="Write the diagnosis here!"></textarea>
                                        @error('diagnosis')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    <div class="row float-right">
                                        <a href="{{ route('patients.index') }}" class="btn btn-outline-dark btn-sm mx-1">Back</a>
                                        <button type="submit" class="btn btn-sm btn-primary">Add Report</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mt-2 mx-2 py-1 float-right">
                        <a href="{{ route('patients.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                {{-- @livewire('PatientHistory', ['patientId' => $patient->id]) --}}
            </div>
            <div class="col-md-6">
            </div>
        </div>
        
    </div>
@endsection
