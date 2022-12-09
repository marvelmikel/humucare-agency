@extends('layout.form')

@section('content')
<div class="page-wrapper">
        <div class="content container-fluid">
        <div class="card">
        <div class="row">
                <div class="col-lg-12">
                   
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 4 Education</h4>
                                </div>
                                <br>
                              
                                <div class ="card-body">
                                <form action ="humcareform-step-two" method="post">
                                    @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">College/University Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="College/University Name"
                                                aria-label="College/University Name" aria-describedby="basic-addon1" name="university" value ="{{ $details->university ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Course</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Course"
                                                aria-label="Course" aria-describedby="basic-addon1" name ="course" value ="{{ $details->course ?? '' }}"> 
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Qualifications and Grades obtained</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Qualifications and Grades obtained"
                                                aria-label="Qualifications and Grades obtained" aria-describedby="basic-addon1" name ="qualification" value ="{{ $details->qualification ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Professional, Technical or Management Qualifications</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Professional/Technical/Management Qualifications</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Professional/Technical/Management Qualifications"
                                                aria-label="Professional/Technical/Management Qualifications" aria-describedby="basic-addon1" name ="profQualification" value ="{{ $details->profQualification ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Course Details</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Course Details"
                                                aria-label="Course Details" aria-describedby="basic-addon1" name = "courseDetails" value ="{{ $details->courseDetails ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Membership of Professional / Technical Associations Please state level of Membership</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Membership of Professional / Technical Associations Please state level of Membership"
                                                aria-label="Membership of Professional / Technical Associations Please state level of Membership" aria-describedby="basic-addon1" name="membership" value ="{{ $details->membership ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 5 Training and Development</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Title of Training Programme or Course</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Title of Training Programme or Course"
                                                aria-label="Title of Training Programme or Course" aria-describedby="basic-addon1" name ="trainingProgram" value ="{{ $details->trainingProgram ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Duration of Course</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Duration of Course"
                                                aria-label="Duration of Course" aria-describedby="basic-addon1" name ="courseDuration" value ="{{ $details->courseDuration ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 6 Personal Statement</h4>
                                </div>
                                <br>
                                <label class="col-form-label col-lg-10">Ability, skills, knowledge and experience.<br> Please use this section to explain in details how you meet the requirements of the Employee Profile. If you are or have been involved in voluntary/unpaid activities, please also include this information. Attach and label any additional sheets used.</label>
                                <textarea style="" name ="personalStatement" rows = "15" cols="100%" value ="{{ $details->personalStatement ?? '' }}"> </textarea>
                                <br>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 7 Rehability of Offenders Acts(1974)</h4>
                                </div>

                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Do you have any convictions that are unspent under the rehabilitation offenders act 1974?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="conviction" value ="1" {{{ (isset($details->conviction) && $details->conviction == '1') ? "checked" : "" }}} > Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="conviction" value ="0" {{{ (isset($details->conviction) && $details->conviction == '0') ? "checked" : "" }}}  > No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br><label class="col-form-label col-lg-10">If yes, please give details / dates of offence(s) and sentence:</label>
                                <textarea style="" name ="convictionDetails" rows = "15" cols="100%"></textarea>
                                <br>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 8 Protecting Children and Vulnerable Adults</h4>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Enhanced Checks Only (refers to Job Application Pack)<br>Are you aware of any police enquires undertaken following allegation made<br>against you, which may have a bearing on your suitability for this post?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="underTaking" value ="1" {{{ (isset($details->underTaking) && $details->underTaking == '1') ? "checked" : "" }}} > Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="underTaking" value ="0" {{{ (isset($details->underTaking) && $details->underTaking == '0') ? "checked" : "" }}}> No
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                        <button type="submit" class="btn btn-lg btn-success text-left">Previous </button>
                                        </div>
                                        <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary text-right">Next</button>
                                        </div>
                                    </div>
                                    
                                   
                                    
                                    </div>
                                </div>
                                </form>
                                <br>
                                
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
@endsection