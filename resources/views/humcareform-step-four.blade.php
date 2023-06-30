@extends('layout.form')

@section('content')
@include('partials.notify')
<div class="page-wrapper">
        <div class="content container-fluid">
        <div class="card">
        <div class="row">
                <div class="col-lg-12">
<div class="card-header">
                                    <h4 class="card-title mb-0" align="center">Bank Details</h4>
                                </div>
                                <br>
                                <br>
                                <div class="card-body">
                                <form action ="humcareform-step-four" method ="post">
                                        @csrf 
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name of Bank</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name of Bank"
                                                aria-label="Name of Bank" aria-describedby="basic-addon1" name ="bankName" value ="{{ $details->bankName ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Branch</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Branch"
                                                aria-label="Branch" aria-describedby="basic-addon1" name ="bankBranch" value ="{{ $details->bankBranch ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Names as they appear on your card</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Names as they appear on your card"
                                                aria-label="Names as they appear on your card" aria-describedby="basic-addon1" name="nameOnCard" value ="{{ $details->nameOnCard ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Account Number</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Account Number"
                                                aria-label="Account Number" aria-describedby="basic-addon1" name ="accountNumber" value ="{{ $details->accountNumber ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Sort Code</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Sort Code"
                                                aria-label="Sort Code" aria-describedby="basic-addon1" name ="sortCode" value ="{{ $details->sortCode ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0" >Section 12 Recruitment Monitoring Form</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Application for the post of</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Application for the post of"
                                                aria-label="Application for the post of" aria-describedby="basic-addon1" name ="postApplication" value ="{{ $details->postApplication ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">What is your Ethnic Group?</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="white, Black or Black British, Mixed, Chinese ot other ethnic group, Asian or Asian British"
                                                aria-label="white, Black or Black British, Mixed, Chinese ot other ethnic group, Asian or Asian British" aria-describedby="basic-addon1" name ="ethnicGroup" value ="{{ $details->ethnicGroup ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0" >Recruitment Monitoring Form</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Gender</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="gender" value ="1" {{{ (isset($details->gender) && $details->gender == '1') ? "checked" : "" }}} > Male
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="gender" value ="0" {{{ (isset($details->gender) && $details->gender == '0') ? "checked" : "" }}}> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Do you consider yourself disabled?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="disabilityConfirm" value ="1" {{{ (isset($details->disabilityConfirm) && $details->disabilityConfirm == '1') ? "checked" : "" }}}> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="disabilityConfirm" value ="0" {{{ (isset($details->disabilityConfirm) && $details->disabilityConfirm == '0') ? "checked" : "" }}}> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label class="col-form-label col-lg-10">If Yes, please give details:</label>
                                <textarea style="width: 100%; height: 100% "></textarea>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Present Status</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="presentStatus" value ="1" {{{ (isset($details->presentStatus) && $details->presentStatus == '1') ? "checked" : "" }}} >Internal Applicant
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="presentStatus" alue ="0" {{{ (isset($details->presentStatus) && $details->presentStatus == '0') ? "checked" : "" }}}> External Applicant
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Age Group</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="16-25, 26-35, 36-45, 46-55, 56, 66, over 70"
                                                aria-label="16-25, 26-35, 36-45, 46-55, 56, 66, over 70" aria-describedby="basic-addon1" name ="age" value ="{{ $details->age ?? '' }}">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                        <div class="col-6">
                                        <a href ="/humcareform-step-three" class="btn btn-lg btn-success text-left">Previous </a>
                                        </div>
                                        <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary text-right">Next</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

@endsection