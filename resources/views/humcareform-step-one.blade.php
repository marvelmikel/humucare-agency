@extends('layout.form')

@section('content')
@include('partials.notify')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Humcare Job Application Form</h3>
                        <ul class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Humcare Job Application Form</li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Section 1 Personal Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="humcareform-step-one" method ="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">First Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                aria-label="First Name" aria-describedby="basic-addon1" name ="firstName" value ="{{ $details->firstName ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Last Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                aria-label="Last Name" aria-describedby="basic-addon2" name ="lastName" value ="{{ $details->lastName ?? '' }}" >
                                            <div class="input-group-append">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Address" name ="address" value ="{{ $details->address ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Post Code</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Post Code" name ="postCode" value ="{{ $details->postCode ?? '' }}">
                                            <div class="input-group-append">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-2">Home Telephone No</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Home Telephone No" name ="telephoneNo" value ="{{ $details->telephoneNo ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-2">National Insurance Number</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control"
                                                placeholder="National Insurance Number." name="insuranceName" value ="{{ $details->insuranceName ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-2">Daytime Telephone No</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Daytime Telephone No" name="dayTimeTelephone" value ="{{ $details->dayTimeTelephone ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-2">Mobile Telephone No</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Mobile Telephone No" name ="mobileTelephone" value ="{{ $details->mobileTelephone ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-2">Date Of Birth</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Date Of Birth" name ="dob" value ="{{ $details->dob ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-2">E-mail Address </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Mobile Telephone No" name ="email" value ="{{ $details->email ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Are you free to remain and take up employment
                                        in the UK with no current immigration restrictions?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="takeEmployment" value ="1" {{{ (isset($details->takeEmployment) && $details->takeEmployment == '1') ? "checked" : "" }}}> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="takeEmployment" value ="0" {{{ (isset($details->takeEmployment) && $details->takeEmployment == '0') ? "checked" : "" }}}> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Do you hold a full, cleaning driving licence
                                        valid in the Uk? </label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="cleanLicense" value ="1" {{{ (isset($details->cleanLicense) && $details->cleanLicense == '1') ? "checked" : "" }}}> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="cleanLicense" value ="0" {{{ (isset($details->cleanLicense) && $details->cleanLicense == '0') ? "checked" : "" }}}> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 2 Present Employment</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name Employer</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name Employer"
                                                aria-label="Name Employer" aria-describedby="basic-addon1" name ="employeerName" value ="{{ $details->employeerName ?? ''}}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Address"
                                                aria-label="Address" aria-describedby="basic-addon1" name ="employeerAddress" value ="{{ $details->employeerAddress ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Post Code</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Post Code"
                                                aria-label="Post Code" aria-describedby="basic-addon1" name ="employeerPostCode" value ="{{ $details->employeerPostCode ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Position Title</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Position Title"
                                                aria-label="Position Title" aria-describedby="basic-addon1" name ="employeerTitle" value ="{{ $details->employeerTitle ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Date of Appointment</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Date of Appointment"
                                                aria-label="Date of Appointment" aria-describedby="basic-addon1" name ="employeerDOA" value ="{{ $details->employeerDOA ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Salary</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Salary"
                                                aria-label="Salary" aria-describedby="basic-addon1" name ="salary" value ="{{ $details->salary ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Dept/Section</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Department/Section"
                                                aria-label="Department/Section" aria-describedby="basic-addon1" name ="dept" value ="{{ $details->dept ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Breif description of duties</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control"
                                                placeholder="Breif description of duties"
                                                aria-label="Breif description of duties" aria-describedby="basic-addon1" name="dutiesDescription" value ="{{ $details->dutiesDescription ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Period of Notice</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Period of Notice"
                                                aria-label="Period of Notice" aria-describedby="basic-addon1" name ="periodOfNotice" value ="{{ $details->periodOfNotice ?? ''}}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Last day of service</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Last day of service"
                                                aria-label="Last day of service" aria-describedby="basic-addon1" name ="lastDayService" value ="{{ $details->lastDayService ?? ''}}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Reason for Leaving</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Reason for Leaving"
                                                aria-label="Reason for Leaving" aria-describedby="basic-addon1" name="reason4Leaving" value ="{{ $details->reason4Leaving ?? ''}}" >
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 3 Previous Employment</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name of Employer</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name of Employment"
                                                aria-label="Name of Employment" aria-describedby="basic-addon1" name ="nameOfEmployeer2" value ="{{ $details->nameOfEmployeer2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Address"
                                                aria-label="Address" aria-describedby="basic-addon1" name="employeerAddress2" value ="{{ $details->employeerAddress2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Post code</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Post code"
                                                aria-label="Post code" aria-describedby="basic-addon1" name ="employeerPostCode2" value ="{{ $details->employeerPostCode2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Post Held</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Post Held"
                                                aria-label="Post Held" aria-describedby="basic-addon1" name ="employeerPostHeld2" value ="{{ $details->employeerPostHeld2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Summary of duties</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Summary of duties"
                                                aria-label="Summary of duties" aria-describedby="basic-addon1" name ="duties2" value ="{{ $details->duties2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Reason for Leaving</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Reason for Leaving"
                                                aria-label="Reason for Leaving" aria-describedby="basic-addon1" name="reason4leaving2" value ="{{ $details->reason4leaving2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Post code</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Post code"
                                                aria-label="Post code" aria-describedby="basic-addon1" name ="employeerPostCode2" value ="{{ $details->employeerPostCode2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Summary of duties</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Summary of duties"
                                                aria-label="Summary of duties" aria-describedby="basic-addon1" name ="dutiesSummary2" value ="{{ $details->dutiesSummary2 ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-lg btn-primary">Next</button>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
