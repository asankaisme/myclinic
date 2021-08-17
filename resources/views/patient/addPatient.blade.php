@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Add Patient</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('patients.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <label for="fName">First Name</label>
                                  <input type="text" class="form-control form-control-sm" name="fName" required>
                                </div>
                                <div class="col form-group">
                                    <label for="lName">Last Name</label>
                                  <input type="text" class="form-control form-control-sm" name="lName" required>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="text">Address</label>
                              <input type="text" class="form-control form-control-sm" name="adr1" placeholder="Address Line 1">
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                  <input type="text" class="form-control form-control-sm" name="adr2" placeholder="Address Line 2">
                                </div>
                                <div class="col-md-4 form-group">
                                  <input type="text" class="form-control form-control-sm" name="city" placeholder="City">
                                </div>
                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control form-control-sm" name="phnNmbr" placeholder="Mobile Number" data-parsley-length="[10]">
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 form-group">
                                    <label for="Date">Birthday</label>
                                    <input type="date" class="form-control form-control-sm" placeholder="Enter email" name="bDay" placeholder="Address Line 1">
                                </div>
                                <div class="col-md-3">
                                    <p>Select Sex</p>
                                    <input type="radio" name="sex" value="M"> Male
                                    <input type="radio" name="sex" value="F"> Female
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="text">Blood Group</label>
                                    <select class="custom-select" name="bldGrp">
                                        <option selected value="0">-Please Select-</option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="4">B-</option>
                                        <option value="5">AB+</option>
                                        <option value="6">AB-</option>
                                        <option value="7">O+</option>
                                        <option value="8">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 form-group">
                                    <label for="grdName">Guardian Name</label>
                                  <input type="text" class="form-control form-control-sm" name="grdName">
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="grdPhnNmbr">Mobile Number</label>
                                  <input type="text" class="form-control form-control-sm" name="grdPhnNmbr">
                                </div>
                            </div>
                            <div class="row float-right">
                                <div class="col-md-12">
                                    <input type="submit" value="Add" class="btn btn-primary btn-sm">
                                    <input type="reset" value="Clear" class="btn btn-outline-danger btn-sm">
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
