@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>New Diagnosis Report of {{ $patient->fName }} {{ $patient->lName }} | {{ $patient->age() }}y</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('treatments.store') }}" method="post">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                    <textarea name="diagnosis" id="diagnosis" cols="130" rows="15" required></textarea>
                                </div>
                                <p></p>
                                <div class="row float-right">
                                    <input type="submit" value="Add Report" class="btn btn-sm btn-primary">
                                    <input type="reset" value="Clear" class="btn btn-sm btn-outline-danger mx-1">
                                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-outline-dark btn-sm">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <p></p>
            @if (session()->has('msgSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Great! </strong> {{ session()->get('msgSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
            @endif
            </div>
        </div>
    </div>
@endsection
