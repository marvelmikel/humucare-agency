@extends('layout.form')

@section('content')
@include('partials.notify')
<div class="page-wrapper">
        <div class="content container-fluid">
        <div class="card">
        <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">
                                    <h4 class="card-title mb-0">Section 9 Disability Discrimination Act</h4>
                                </div>
                                <br>
                                <br>
                                <div class="card-body">

                               <form  action ="/humcareform-step-three"  method ="post"> 
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10"> Do you have a disability which is relevant to your application?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="disability" value ="1" {{{ (isset($details->disability) && $details->disability == '1') ? "checked" : "" }}}> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="disability" value ="0" {{{ (isset($details->disability) && $details->disability == '0') ? "checked" : "" }}}> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br><label class="col-form-label col-lg-10">If yes, please give details / dates of offence(s) and sentence:</label>
                                <textarea style="width: 100%; height: 100% " name ="offence" value ="{{ $details->offence ?? '' }}" ></textarea>
                                <br>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 10 Health</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Number of days sickness absence in the last 2 years</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Number of days sickness absence in the last 2 years"
                                                aria-label="Number of days sickness absence in the last 2 years" aria-describedby="basic-addon1" name ="sicknessAbsence" value ="{{ $details->sicknessAbsence ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 11 Referees</h4>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0" align="center">Referee 1</h4>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name"
                                                aria-label="Name" aria-describedby="basic-addon1" name="refereeName1" value ="{{ $details->refereeName1 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Position</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Position"
                                                aria-label="Position" aria-describedby="basic-addon1" name ="refereePosition1" value ="{{ $details->refereePosition1 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Work Relaionship</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Work Relaionship"
                                                aria-label="Work Relaionship" aria-describedby="basic-addon1" name="refereeRelationship1" value ="{{ $details->refereeRelationship1 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Organisation</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Organisation"
                                                aria-label="Organisation" aria-describedby="basic-addon1" name ="refereeOrganization1" value ="{{ $details->refereeOrganization1 ?? '' }}">
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
                                                aria-label="Address" aria-describedby="basic-addon1" name ="refereeAddress1" value ="{{ $details->refereeAddress1 ?? '' }}">
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
                                                aria-label="Post code" aria-describedby="basic-addon1" name ="refereePostCode1" value ="{{ $details->refereePostCode1 ?? '' }}"> 
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Telephone</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Telephone"
                                                aria-label="Telephone" aria-describedby="basic-addon1" name ="refereeTelephone1" value ="{{ $details->refereeTelephone1 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email"
                                                aria-label="Email" aria-describedby="basic-addon1" name ="refereeEmail1" value ="{{ $details->refereeEmail1 ?? '' }}" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0" align="center">Reference 2</h4>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name"
                                                aria-label="Name" aria-describedby="basic-addon1" name ="refereeName2" value ="{{ $details->refereeName2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Position</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Position"
                                                aria-label="Position" aria-describedby="basic-addon1" name="refereePosition2" value ="{{ $details->refereePosition2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Work Relaionship</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Work Relaionship"
                                                aria-label="Work Relaionship" aria-describedby="basic-addon1" name ="refereeRelationShip2" value ="{{ $details->refereeRelationShip2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Organisation</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Organisation"
                                                aria-label="Organisation" aria-describedby="basic-addon1" name ="refereeOrganization2" value ="{{ $details->refereeOrganization2 ?? '' }}">
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
                                                aria-label="Address" aria-describedby="basic-addon1" name ="refereeAddress2" value ="{{ $details->refereeAddress2 ?? '' }}">
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
                                                aria-label="Post code" aria-describedby="basic-addon1" name ="refereePostCode2" value ="{{ $details->refereePostCode2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Telephone</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Telephone"
                                                aria-label="Telephone" aria-describedby="basic-addon1" name ="refereeTelephone2" value ="{{ $details->refereeTelephone2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email"
                                                aria-label="Email" aria-describedby="basic-addon1" name ="refereeEmail2" value ="{{ $details->refereeEmail2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Are you willing for this referee to be approached prior to the interview?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="approachReferee" value ="1" {{{ (isset($details->approachReferee) && $details->approachReferee == '1') ? "checked" : "" }}}> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="approachReferee" value ="0" {{{ (isset($details->approachReferee) && $details->approachReferee == '0') ? "checked" : "" }}}> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-6">
                                        <a href ="/humcareform-step-two" class="btn btn-lg btn-success text-left">Previous </a>
                                        </div>
                                        <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary text-right">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                
</div>
</div>
</div>
</div>
</div>

@endsection