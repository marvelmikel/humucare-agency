
@extends('layout.app')

@section('content')

<section class="inner-hero bg_img overlay--one" style="background-image: url('{{ URL::asset('assets/images/frontend/breadcrumb/61124d73cde5c1628589427.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="page-title text-white">All Job</h2>
                <ul class="page-breadcrumb justify-content-center">
                    <li><a href="{{ ('/') }}">Home</a></li>
                    <li>All Job</li>
                </ul>
            </div>
        </div>
    </div>
</section>
        <div class="main-wrapper">
        <div class="search-job-area section--bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="GET" class="job-search-form">
                    <div class="row gy-4">
                        <div class="col-md-5 col-sm-6">
                            <div class="custom-icon-field">
                                <i class="las la-search"></i>
                                <select class="form--control" name="city">
                                    <option value="">Select City</option>
                                                                            <option value="1"  data-locations="[{&quot;id&quot;:10,&quot;city_id&quot;:1,&quot;name&quot;:&quot;Alameda&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:26:40.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:26:40.000000Z&quot;},{&quot;id&quot;:11,&quot;city_id&quot;:1,&quot;name&quot;:&quot;Alhambra&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:26:47.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:26:47.000000Z&quot;}]">California</option>
                                                                            <option value="2"  data-locations="[{&quot;id&quot;:1,&quot;city_id&quot;:2,&quot;name&quot;:&quot;Los Angeles&quot;,&quot;created_at&quot;:&quot;2021-08-09T06:33:54.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:24:00.000000Z&quot;},{&quot;id&quot;:2,&quot;city_id&quot;:2,&quot;name&quot;:&quot;Chicago&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:24:24.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:24:24.000000Z&quot;},{&quot;id&quot;:3,&quot;city_id&quot;:2,&quot;name&quot;:&quot;Houston&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:24:33.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:24:33.000000Z&quot;},{&quot;id&quot;:12,&quot;city_id&quot;:2,&quot;name&quot;:&quot;Chautauqua&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:27:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:27:01.000000Z&quot;},{&quot;id&quot;:13,&quot;city_id&quot;:2,&quot;name&quot;:&quot;Coney Island&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:27:08.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:27:08.000000Z&quot;},{&quot;id&quot;:14,&quot;city_id&quot;:2,&quot;name&quot;:&quot;Cortland&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:27:18.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:27:18.000000Z&quot;}]">New York</option>
                                                                            <option value="3"  data-locations="[{&quot;id&quot;:15,&quot;city_id&quot;:3,&quot;name&quot;:&quot;Saint Martinville&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:27:40.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:27:40.000000Z&quot;},{&quot;id&quot;:16,&quot;city_id&quot;:3,&quot;name&quot;:&quot;New Orleans&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:27:47.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:27:47.000000Z&quot;}]">Illinois</option>
                                                                            <option value="4"  data-locations="[{&quot;id&quot;:4,&quot;city_id&quot;:4,&quot;name&quot;:&quot;Phoenix&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:24:41.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:24:41.000000Z&quot;},{&quot;id&quot;:17,&quot;city_id&quot;:4,&quot;name&quot;:&quot;Lake Havasu City&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:28:02.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:28:02.000000Z&quot;},{&quot;id&quot;:18,&quot;city_id&quot;:4,&quot;name&quot;:&quot;Prescott&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:28:11.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:28:11.000000Z&quot;}]">Arizona</option>
                                                                            <option value="5"  data-locations="[{&quot;id&quot;:5,&quot;city_id&quot;:5,&quot;name&quot;:&quot;Pennsylvania&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:24:50.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:24:50.000000Z&quot;},{&quot;id&quot;:19,&quot;city_id&quot;:5,&quot;name&quot;:&quot;Hillsborough&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:28:28.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:28:28.000000Z&quot;},{&quot;id&quot;:20,&quot;city_id&quot;:5,&quot;name&quot;:&quot;Morehead City&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:28:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:28:37.000000Z&quot;}]">North Carolina</option>
                                                                            <option value="6"  data-locations="[{&quot;id&quot;:6,&quot;city_id&quot;:6,&quot;name&quot;:&quot;Jacksonville&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:25:00.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:25:00.000000Z&quot;},{&quot;id&quot;:21,&quot;city_id&quot;:6,&quot;name&quot;:&quot;Bloomfield Hills&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:28:53.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:28:53.000000Z&quot;},{&quot;id&quot;:22,&quot;city_id&quot;:6,&quot;name&quot;:&quot;Highland Park&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:29:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:29:01.000000Z&quot;}]">Michigan</option>
                                                                            <option value="7"  data-locations="[{&quot;id&quot;:7,&quot;city_id&quot;:7,&quot;name&quot;:&quot;North Carolina&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:25:11.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:25:11.000000Z&quot;},{&quot;id&quot;:8,&quot;city_id&quot;:7,&quot;name&quot;:&quot;Seattle&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:25:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:25:22.000000Z&quot;},{&quot;id&quot;:23,&quot;city_id&quot;:7,&quot;name&quot;:&quot;Claremore&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:29:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:29:13.000000Z&quot;},{&quot;id&quot;:24,&quot;city_id&quot;:7,&quot;name&quot;:&quot;Elk City&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:29:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:29:22.000000Z&quot;},{&quot;id&quot;:25,&quot;city_id&quot;:7,&quot;name&quot;:&quot;Holdenville&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:29:30.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:29:30.000000Z&quot;}]">Oklahoma</option>
                                                                            <option value="8"  data-locations="[{&quot;id&quot;:9,&quot;city_id&quot;:8,&quot;name&quot;:&quot;Badger State&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:25:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:25:32.000000Z&quot;},{&quot;id&quot;:26,&quot;city_id&quot;:8,&quot;name&quot;:&quot;Milwaukee&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:29:46.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:29:46.000000Z&quot;},{&quot;id&quot;:27,&quot;city_id&quot;:8,&quot;name&quot;:&quot;Lake Geneva&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:30:05.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:30:05.000000Z&quot;},{&quot;id&quot;:28,&quot;city_id&quot;:8,&quot;name&quot;:&quot;Fond du Lac&quot;,&quot;created_at&quot;:&quot;2021-08-14T07:30:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-14T07:30:12.000000Z&quot;}]">Wisconsins</option>
                                                                            <option value="9"  data-locations="[]">rqfsadf</option>
                                                                    </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="custom-icon-field">
                                <i class="las la-map-marker-alt"></i>
                                <select class="form--control" name="location">
                                    <option>Select One</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn--base">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- search result section start -->
<section class="pt-50 pb-50 section--bg">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3">
                <button class="action-sidebar-open"><i class="las la-sliders-h"></i> Filter</button>
                <div class="action-sidebar">
                    <button class="action-sidebar-close"><i class="las la-times"></i></button>
                    <div class="action-widget pt-0">
                        <h4 class="action-widget__title">Search by keyword</h4>
                        <div class="action-widget__body">
                            <form action="https://script.viserlab.com/joblab/job/filter" method="GET" class="search-form-inline">
                                <input type="text" name="search" value="" autocomplete="off" class="form--control form-control-sm" placeholder="Search here">
                                <button type="submit" class="search-form-inline__btn"><i class="las la-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <form action="https://script.viserlab.com/joblab/job/filter" method="GET">
                        <div class="action-widget">
                            <h4 class="action-widget__title">Category</h4>
                            <div class="action-widget__body">
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="1" name="category[]" id="category.1" >
                                            <label class="form-check-label" for="category.1">
                                                Accounting/Finance
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="2" name="category[]" id="category.2" >
                                            <label class="form-check-label" for="category.2">
                                                Production/Operation
                                            </label>
                                        </div>
                                        <span class="fs--14px">(2)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="3" name="category[]" id="category.3" >
                                            <label class="form-check-label" for="category.3">
                                                Bank/Non-Bank Fin .Institution
                                            </label>
                                        </div>
                                        <span class="fs--14px">(2)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="4" name="category[]" id="category.4" >
                                            <label class="form-check-label" for="category.4">
                                                Education/Training
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="5" name="category[]" id="category.5" >
                                            <label class="form-check-label" for="category.5">
                                                Engineer/Architects
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="6" name="category[]" id="category.6" >
                                            <label class="form-check-label" for="category.6">
                                                Design/Creative
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="7" name="category[]" id="category.7" >
                                            <label class="form-check-label" for="category.7">
                                                Health and Fitness
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="8" name="category[]" id="category.8" >
                                            <label class="form-check-label" for="category.8">
                                                It &amp; Telecommunication
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="9" name="category[]" id="category.9" >
                                            <label class="form-check-label" for="category.9">
                                                Customer Support
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="10" name="category[]" id="category.10" >
                                            <label class="form-check-label" for="category.10">
                                                Call Center
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="11" name="category[]" id="category.11" >
                                            <label class="form-check-label" for="category.11">
                                                Research / Consultancy
                                            </label>
                                        </div>
                                        <span class="fs--14px">(3)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="12" name="category[]" id="category.12" >
                                            <label class="form-check-label" for="category.12">
                                                Data Entry/Operator
                                            </label>
                                        </div>
                                        <span class="fs--14px">(2)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="13" name="category[]" id="category.13" >
                                            <label class="form-check-label" for="category.13">
                                                Security/Support
                                            </label>
                                        </div>
                                        <span class="fs--14px">(2)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="14" name="category[]" id="category.14" >
                                            <label class="form-check-label" for="category.14">
                                                Data Entry / Operator
                                            </label>
                                        </div>
                                        <span class="fs--14px">(2)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="15" name="category[]" id="category.15" >
                                            <label class="form-check-label" for="category.15">
                                                Web Developer
                                            </label>
                                        </div>
                                        <span class="fs--14px">(0)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input categoryType" type="checkbox" value="16" name="category[]" id="category.16" >
                                            <label class="form-check-label" for="category.16">
                                                Software Developer
                                            </label>
                                        </div>
                                        <span class="fs--14px">(0)</span>
                                    </div>
                                                            </div>
                        </div>

                        <div class="action-widget">
                            <h4 class="action-widget__title">Job Nature</h4>
                            <div class="action-widget__body">
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobType" type="checkbox" value="1" name="job_type[]" id="jobType.1" >
                                            <label class="form-check-label" for="jobType.1">
                                                Full Time
                                            </label>
                                        </div>
                                        <span class="fs--14px">(25)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobType" type="checkbox" value="2" name="job_type[]" id="jobType.2" >
                                            <label class="form-check-label" for="jobType.2">
                                                Part Time
                                            </label>
                                        </div>
                                        <span class="fs--14px">(8)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobType" type="checkbox" value="3" name="job_type[]" id="jobType.3" >
                                            <label class="form-check-label" for="jobType.3">
                                                Full Job
                                            </label>
                                        </div>
                                        <span class="fs--14px">(6)</span>
                                    </div>
                                                            </div>
                        </div><!-- action-widget end -->
                        <div class="action-widget">
                            <h4 class="action-widget__title">Job Shift</h4>
                            <div class="action-widget__body">
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobShift" value="1" type="checkbox" name="job_shift[]" id="shift.1"  >
                                            <label class="form-check-label" for="shift.1">
                                                Night Shift
                                            </label>
                                        </div>
                                        <span class="fs--14px">(7)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobShift" value="2" type="checkbox" name="job_shift[]" id="shift.2"  >
                                            <label class="form-check-label" for="shift.2">
                                                First shift
                                            </label>
                                        </div>
                                        <span class="fs--14px">(7)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobShift" value="3" type="checkbox" name="job_shift[]" id="shift.3"  >
                                            <label class="form-check-label" for="shift.3">
                                                Day Shift
                                            </label>
                                        </div>
                                        <span class="fs--14px">(23)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobShift" value="4" type="checkbox" name="job_shift[]" id="shift.4"  >
                                            <label class="form-check-label" for="shift.4">
                                                Third Shift
                                            </label>
                                        </div>
                                        <span class="fs--14px">(2)</span>
                                    </div>
                                                            </div>
                        </div><!-- action-widget end -->

                        <div class="action-widget">
                            <h4 class="action-widget__title">Experience Range</h4>
                            <div class="action-widget__body">
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobExperience" type="checkbox" value="1" name="job_experience[]" id="experience.1" >
                                            <label class="form-check-label" for="experience.1">
                                                1-2 Years
                                            </label>
                                        </div>
                                        <span class="fs--14px">(33)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobExperience" type="checkbox" value="2" name="job_experience[]" id="experience.2" >
                                            <label class="form-check-label" for="experience.2">
                                                2-3 Years
                                            </label>
                                        </div>
                                        <span class="fs--14px">(6)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobExperience" type="checkbox" value="3" name="job_experience[]" id="experience.3" >
                                            <label class="form-check-label" for="experience.3">
                                                4-5 Years
                                            </label>
                                        </div>
                                        <span class="fs--14px">(0)</span>
                                    </div>
                                                                    <div class="form-check custom--checkbox d-flex justify-content-between align-items-center">
                                        <div class="left">
                                            <input class="form-check-input jobExperience" type="checkbox" value="4" name="job_experience[]" id="experience.4" >
                                            <label class="form-check-label" for="experience.4">
                                                6-7 Years
                                            </label>
                                        </div>
                                        <span class="fs--14px">(0)</span>
                                    </div>
                                                            </div>
                        </div>
                    </form>
                    <div class="action-widget bg--base mt-4 text-center rounded-3 p-4">
                        <h4 class="text-white">Want a great job opportunity </h4>
                        <a href="https://script.viserlab.com/joblab/register" class="btn bg-white mt-4">Join JobLab Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 ps-lg-4">
                                    <div class="job-card  has--link">
                        <a href="https://script.viserlab.com/joblab/job/detail/24" class="item--link"></a>
                        <div class="job-card__top d-flex flex-wrap">
                            <div class="left">
                                <h3 class="job-card__title"><a href="https://script.viserlab.com/joblab/job/detail/24">Junior PHP Developer (Laravel)</a></h3>
                                <ul class="job-card__meta d-flex flex-wrap align-items-center mt-1">
                                    <li><strong>Thresesoft</strong></li>
                                    <li><i class="las la-map-marker fs--18px"></i> Fond du Lac, Wisconsins</li>
                                </ul>
                            </div>
                            <div class="job-card__bookmark text-end">
                                <button type="button" class="bookmark-btn">
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                    <span class="bookmarked-active"><i class="fas fa-bookmark"></i></span>
                                </button>
                            </div>
                        </div>
                        <p class="job-card__description mt-3">Dolor sit amet consectetur adipisicing elit. Fuga animi eum, nisi libero recusandae nobis rem labore quaerat ut sed ducimus exercitationem veniam, deserunt voluptate sequi incidunt perferendis laudantium quo expedita vero modi impedit sapiente. Sint, aperiam corporis ducimus magnam illum nihil. Nemo...</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <strong class="d-inline-block">Post: 9 months ago</strong>
                            </div>
                            <div class="col-6 text-end">
                                <i class="las la-calendar-alt fs--18px"></i> Deadline: <strong>07 Aug 2022</strong>
                            </div>
                        </div>
                    </div>
                                    <div class="job-card  has--link">
                        <a href="https://script.viserlab.com/joblab/job/detail/23" class="item--link"></a>
                        <div class="job-card__top d-flex flex-wrap">
                            <div class="left">
                                <h3 class="job-card__title"><a href="https://script.viserlab.com/joblab/job/detail/23">React.js Developer</a></h3>
                                <ul class="job-card__meta d-flex flex-wrap align-items-center mt-1">
                                    <li><strong>One Soft</strong></li>
                                    <li><i class="las la-map-marker fs--18px"></i> Holdenville, Oklahoma</li>
                                </ul>
                            </div>
                            <div class="job-card__bookmark text-end">
                                <button type="button" class="bookmark-btn">
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                    <span class="bookmarked-active"><i class="fas fa-bookmark"></i></span>
                                </button>
                            </div>
                        </div>
                        <p class="job-card__description mt-3">Dolor sit amet consectetur adipisicing elit. Fuga animi eum, nisi libero recusandae nobis rem labore quaerat ut sed ducimus exercitationem veniam, deserunt voluptate sequi incidunt perferendis laudantium quo expedita vero modi impedit sapiente. Sint, aperiam corporis ducimus magnam illum nihil. Nemo...</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <strong class="d-inline-block">Post: 9 months ago</strong>
                            </div>
                            <div class="col-6 text-end">
                                <i class="las la-calendar-alt fs--18px"></i> Deadline: <strong>07 Aug 2022</strong>
                            </div>
                        </div>
                    </div>
                                    <div class="job-card  has--link">
                        <a href="https://script.viserlab.com/joblab/job/detail/22" class="item--link"></a>
                        <div class="job-card__top d-flex flex-wrap">
                            <div class="left">
                                <h3 class="job-card__title"><a href="https://script.viserlab.com/joblab/job/detail/22">Technical Support</a></h3>
                                <ul class="job-card__meta d-flex flex-wrap align-items-center mt-1">
                                    <li><strong>Datsasoft</strong></li>
                                    <li><i class="las la-map-marker fs--18px"></i> Bloomfield Hills, Michigan</li>
                                </ul>
                            </div>
                            <div class="job-card__bookmark text-end">
                                <button type="button" class="bookmark-btn">
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                    <span class="bookmarked-active"><i class="fas fa-bookmark"></i></span>
                                </button>
                            </div>
                        </div>
                        <p class="job-card__description mt-3">Dolor sit amet consectetur adipisicing elit. Fuga animi eum, nisi libero recusandae nobis rem labore quaerat ut sed ducimus exercitationem veniam, deserunt voluptate sequi incidunt perferendis laudantium quo expedita vero modi impedit sapiente. Sint, aperiam corporis ducimus magnam illum nihil. Nemo...</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <strong class="d-inline-block">Post: 9 months ago</strong>
                            </div>
                            <div class="col-6 text-end">
                                <i class="las la-calendar-alt fs--18px"></i> Deadline: <strong>07 Aug 2022</strong>
                            </div>
                        </div>
                    </div>
                                    <div class="job-card  has--link">
                        <a href="https://script.viserlab.com/joblab/job/detail/31" class="item--link"></a>
                        <div class="job-card__top d-flex flex-wrap">
                            <div class="left">
                                <h3 class="job-card__title"><a href="https://script.viserlab.com/joblab/job/detail/31">Sr. Officer - Revenue (Operational Finance)</a></h3>
                                <ul class="job-card__meta d-flex flex-wrap align-items-center mt-1">
                                    <li><strong>One Soft</strong></li>
                                    <li><i class="las la-map-marker fs--18px"></i> Claremore, Oklahoma</li>
                                </ul>
                            </div>
                            <div class="job-card__bookmark text-end">
                                <button type="button" class="bookmark-btn">
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                    <span class="bookmarked-active"><i class="fas fa-bookmark"></i></span>
                                </button>
                            </div>
                        </div>
                        <p class="job-card__description mt-3">Dolor sit amet consectetur adipisicing elit. Fuga animi eum, nisi libero recusandae nobis rem labore quaerat ut sed ducimus exercitationem veniam, deserunt voluptate sequi incidunt perferendis laudantium quo expedita vero modi impedit sapiente. Sint, aperiam corporis ducimus magnam illum nihil. Nemo...</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <strong class="d-inline-block">Post: 9 months ago</strong>
                            </div>
                            <div class="col-6 text-end">
                                <i class="las la-calendar-alt fs--18px"></i> Deadline: <strong>07 Aug 2022</strong>
                            </div>
                        </div>
                    </div>
                                    <div class="job-card  featured  has--link">
                        <a href="https://script.viserlab.com/joblab/job/detail/30" class="item--link"></a>
                        <div class="job-card__top d-flex flex-wrap">
                            <div class="left">
                                <h3 class="job-card__title"><a href="https://script.viserlab.com/joblab/job/detail/30">Senior WordPress Developer</a></h3>
                                <ul class="job-card__meta d-flex flex-wrap align-items-center mt-1">
                                    <li><strong>Thresesoft</strong></li>
                                    <li><i class="las la-map-marker fs--18px"></i> Highland Park, Michigan</li>
                                </ul>
                            </div>
                            <div class="job-card__bookmark text-end">
                                <button type="button" class="bookmark-btn">
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                    <span class="bookmarked-active"><i class="fas fa-bookmark"></i></span>
                                </button>
                            </div>
                        </div>
                        <p class="job-card__description mt-3">Dolor sit amet consectetur adipisicing elit. Fuga animi eum, nisi libero recusandae nobis rem labore quaerat ut sed ducimus exercitationem veniam, deserunt voluptate sequi incidunt perferendis laudantium quo expedita vero modi impedit sapiente. Sint, aperiam corporis ducimus magnam illum nihil. Nemo...</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <strong class="d-inline-block">Post: 9 months ago</strong>
                            </div>
                            <div class="col-6 text-end">
                                <i class="las la-calendar-alt fs--18px"></i> Deadline: <strong>07 Aug 2022</strong>
                            </div>
                        </div>
                    </div>
                                    <div class="job-card  featured  has--link">
                        <a href="https://script.viserlab.com/joblab/job/detail/34" class="item--link"></a>
                        <div class="job-card__top d-flex flex-wrap">
                            <div class="left">
                                <h3 class="job-card__title"><a href="https://script.viserlab.com/joblab/job/detail/34">Senior WordPress Developer</a></h3>
                                <ul class="job-card__meta d-flex flex-wrap align-items-center mt-1">
                                    <li><strong>Threesoft</strong></li>
                                    <li><i class="las la-map-marker fs--18px"></i> Chautauqua, New York</li>
                                </ul>
                            </div>
                            <div class="job-card__bookmark text-end">
                                <button type="button" class="bookmark-btn">
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                    <span class="bookmarked-active"><i class="fas fa-bookmark"></i></span>
                                </button>
                            </div>
                        </div>
                        <p class="job-card__description mt-3">Dolor sit amet consectetur adipisicing elit. Fuga animi eum, nisi libero recusandae nobis rem labore quaerat ut sed ducimus exercitationem veniam, deserunt voluptate sequi incidunt perferendis laudantium quo expedita vero modi impedit sapiente. Sint, aperiam corporis ducimus magnam illum nihil. Nemo...</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <strong class="d-inline-block">Post: 9 months ago</strong>
                            </div>
                            <div class="col-6 text-end">
                                <i class="las la-calendar-alt fs--18px"></i> Deadline: <strong>07 Aug 2022</strong>
                            </div>
                        </div>
                    </div>

                <nav class="mt-4">
                    <nav>
        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
           <li class="page-item"><a class="page-link" href="https://script.viserlab.com/joblab/job?page=2">2</a></li>
           <li class="page-item"><a class="page-link" href="https://script.viserlab.com/joblab/job?page=3">3</a></li>
           <li class="page-item"><a class="page-link" href="https://script.viserlab.com/joblab/job?page=4">4</a></li>
           <li class="page-item"><a class="page-link" href="https://script.viserlab.com/joblab/job?page=5">5</a></li>
           <li class="page-item"><a class="page-link" href="https://script.viserlab.com/joblab/job?page=6">6</a></li>
           <li class="page-item"><a class="page-link" href="https://script.viserlab.com/joblab/job?page=7">7</a></li>
                            <li class="page-item">
                    <a class="page-link" href="https://script.viserlab.com/joblab/job?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                </nav>
            </div>
        </div>
    </div>
</section>
    </div>
    @endsection
