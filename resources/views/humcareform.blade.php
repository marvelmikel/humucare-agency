@extends('layout.form')

@section('content')
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
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">First Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                aria-label="First Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Last Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                aria-label="Last Name" aria-describedby="basic-addon2">
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
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Post Code</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Post Code">
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
                                            <input type="text" class="form-control" placeholder="Home Telephone No">
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
                                                placeholder="National Insurance Number.">
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
                                            <input type="text" class="form-control" placeholder="Daytime Telephone No">
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
                                            <input type="text" class="form-control" placeholder="Mobile Telephone No">
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
                                            <input type="text" class="form-control" placeholder="Date Of Birth">
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
                                            <input type="text" class="form-control" placeholder="Mobile Telephone No">
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
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
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
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
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
                                                aria-label="Name Employer" aria-describedby="basic-addon1">
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
                                                aria-label="Address" aria-describedby="basic-addon1">
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
                                                aria-label="Post Code" aria-describedby="basic-addon1">
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
                                                aria-label="Position Title" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Data of Appointment</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Date of Appointment"
                                                aria-label="Date of Appointment" aria-describedby="basic-addon1">
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
                                                aria-label="Salary" aria-describedby="basic-addon1">
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
                                                aria-label="Department/Section" aria-describedby="basic-addon1">
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
                                                aria-label="Breif description of duties" aria-describedby="basic-addon1">
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
                                                aria-label="Period of Notice" aria-describedby="basic-addon1">
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
                                                aria-label="Last day of service" aria-describedby="basic-addon1">
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
                                                aria-label="Reason for Leaving" aria-describedby="basic-addon1">
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
                                                aria-label="Name of Employment" aria-describedby="basic-addon1">
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
                                                aria-label="Address" aria-describedby="basic-addon1">
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
                                                aria-label="Post code" aria-describedby="basic-addon1">
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
                                                aria-label="Post Held" aria-describedby="basic-addon1">
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
                                                aria-label="Summary of duties" aria-describedby="basic-addon1">
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
                                                aria-label="Reason for Leaving" aria-describedby="basic-addon1">
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
                                                aria-label="Post code" aria-describedby="basic-addon1">
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
                                                aria-label="Summary of duties" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 4 Education</h4>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">College/University Name</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="College/University Name"
                                                aria-label="College/University Name" aria-describedby="basic-addon1">
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
                                                aria-label="Course" aria-describedby="basic-addon1">
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
                                                aria-label="Qualifications and Grades obtained" aria-describedby="basic-addon1">
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
                                                aria-label="Professional/Technical/Management Qualifications" aria-describedby="basic-addon1">
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
                                                aria-label="Course Details" aria-describedby="basic-addon1">
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
                                                aria-label="Membership of Professional / Technical Associations Please state level of Membership" aria-describedby="basic-addon1">
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
                                                aria-label="Title of Training Programme or Course" aria-describedby="basic-addon1">
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
                                                aria-label="Duration of Course" aria-describedby="basic-addon1">
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
                                <textarea style="width: 100%; height: 100% "></textarea>
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
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br><label class="col-form-label col-lg-10">If yes, please give details / dates of offence(s) and sentence:</label>
                                <textarea style="width: 100%; height: 100% "></textarea>
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
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 9 Disability Discrimination Act</h4>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Do you have a disability which is relevant to your application?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br><label class="col-form-label col-lg-10">If yes, please give details / dates of offence(s) and sentence:</label>
                                <textarea style="width: 100%; height: 100% "></textarea>
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
                                                aria-label="Number of days sickness absence in the last 2 years" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Section 11 References</h4>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0" align="center">Reference 1</h4>
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
                                                aria-label="Name" aria-describedby="basic-addon1">
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
                                                aria-label="Position" aria-describedby="basic-addon1">
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
                                                aria-label="Work Relaionship" aria-describedby="basic-addon1">
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
                                                aria-label="Organisation" aria-describedby="basic-addon1">
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
                                                aria-label="Address" aria-describedby="basic-addon1">
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
                                                aria-label="Post code" aria-describedby="basic-addon1">
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
                                                aria-label="Telephone" aria-describedby="basic-addon1">
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
                                                aria-label="Email" aria-describedby="basic-addon1">
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
                                                aria-label="Name" aria-describedby="basic-addon1">
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
                                                aria-label="Position" aria-describedby="basic-addon1">
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
                                                aria-label="Work Relaionship" aria-describedby="basic-addon1">
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
                                                aria-label="Organisation" aria-describedby="basic-addon1">
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
                                                aria-label="Address" aria-describedby="basic-addon1">
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
                                                aria-label="Post code" aria-describedby="basic-addon1">
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
                                                aria-label="Telephone" aria-describedby="basic-addon1">
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
                                                aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-10">Are you willing for this refree to be approached prior to the interview?</label>
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-header">
                                    <h4 class="card-title mb-0" align="center">Bank Details</h4>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name of Bank</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name of Bank"
                                                aria-label="Name of Bank" aria-describedby="basic-addon1">
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
                                                aria-label="Branch" aria-describedby="basic-addon1">
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
                                                aria-label="Names as they appear on your card" aria-describedby="basic-addon1">
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
                                                aria-label="Account Number" aria-describedby="basic-addon1">
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
                                                aria-label="Sort Code" aria-describedby="basic-addon1">
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
                                                aria-label="Application for the post of" aria-describedby="basic-addon1">
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
                                                aria-label="white, Black or Black British, Mixed, Chinese ot other ethnic group, Asian or Asian British" aria-describedby="basic-addon1">
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
                                                <input type="checkbox" name="checkbox"> Male
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> Female
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
                                                <input type="checkbox" name="checkbox"> Yes
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> No
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
                                                <input type="checkbox" name="checkbox">Internal Applicant
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox"> External Applicant
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
                                                aria-label="16-25, 26-35, 36-45, 46-55, 56, 66, over 70" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
