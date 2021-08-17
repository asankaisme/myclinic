@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="color: red">
                        <p>Delete Patient's Details</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col form-group">
                                    <label for="fName">First Name</label>
                                  <input type="text" class="form-control form-control-sm" name="fName" required value="{{ $patient->fName }}">
                                </div>
                                <div class="col form-group">
                                    <label for="lName">Last Name</label>
                                  <input type="text" class="form-control form-control-sm" name="lName" required value="{{ $patient->lName }}">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="text">Address</label>
                              <input type="text" class="form-control form-control-sm" name="adr1" value="{{ $patient->adr1 }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                  <input type="text" class="form-control form-control-sm" name="adr2" value="{{ $patient->adr2 }}">
                                </div>
                                <div class="col-md-4 form-group">
                                  <input type="text" class="form-control form-control-sm" name="city" value="{{ $patient->city }}">
                                </div>
                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control form-control-sm" name="phnNmbr" value="{{ $patient->phnNmbr }}">
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 form-group">
                                    <label for="Date">Birthday</label>
                                    <input type="date" class="form-control form-control-sm" name="bDay" value="{{ $patient->bDay }}">
                                </div>
                                <div class="col-md-3">
                                    <p>Select Sex</p>
                                    <input type="radio" name="sex" value="M" {{ ($patient->sex == "M")? "checked" : "" }}> Male
                                    <input type="radio" name="sex" value="F" {{ ($patient->sex == "F")? "checked" : "" }}> Female
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="text">Blood Group</label>
                                    <select class="custom-select" name="bldGrp">
                                        <option selected value="0" {{ ($patient->bldGrp == "0")? "selected" : "" }}>-Please Select-</option>
                                        <option value="1" {{ ($patient->bldGrp == "1")? "selected" : "" }}>A+</option>
                                        <option value="2" {{ ($patient->bldGrp == "2")? "selected" : "" }}>A-</option>
                                        <option value="3" {{ ($patient->bldGrp == "3")? "selected" : "" }}>B+</option>
                                        <option value="4" {{ ($patient->bldGrp == "4")? "selected" : "" }}>B-</option>
                                        <option value="5" {{ ($patient->bldGrp == "5")? "selected" : "" }}>AB+</option>
                                        <option value="6" {{ ($patient->bldGrp == "6")? "selected" : "" }}>AB-</option>
                                        <option value="7" {{ ($patient->bldGrp == "7")? "selected" : "" }}>O+</option>
                                        <option value="8" {{ ($patient->bldGrp == "8")? "selected" : "" }}>O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 form-group">
                                    <label for="grdName">Guardian Name</label>
                                  <input type="text" class="form-control form-control-sm" name="grdName" value="{{ $patient->grdName }}">
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="grdPhnNmbr">Mobile Number</label>
                                  <input type="text" class="form-control form-control-sm" name="grdPhnNmbr" value="{{ $patient->grdPhnNmbr }}">
                                </div>
                            </div>
                            <div class="row float-right">
                                <div class="col-md-12">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    <a href="{{ route('patients.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
