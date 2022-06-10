@extends('layout.app')

@section('content')
        <div class="main-wrapper">
        <section class="hero bg_img" style="background-image: url({{URL::asset('https://media.istockphoto.com/photos/caregiver-assist-senior-woman-at-home-picture-id1296176562?k=20&m=1296176562&s=612x612&w=0&h=j9GeICDzkd4Ko4H_I5g2t6360HBoxKtkFVIhIgi-C0E=')}}">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<h4 style="font-size: 30px " class="hero__title text-white">Let us provide you with right-quality care <br> Best cleaning Cleaning Service <br>
                    Provide assistance to individuals looking for Sponsorship.</h4>
			</div>
		</div><!-- row end -->
		<div class="row justify-content-center mt-5">
			<div class="col-xl-8 col-lg-9">
				<form action="" method="" class="hero__form">
					<div class="input-field">
						<select name="city" class="form--control">
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
						<i class="las la-search"></i>
					</div>
					<div class="input-field">
						<select class="form--control" name="location">
							<option value="" selected="" disabled="">Select One</option>
						</select>
						<i class="las la-map-marker"></i>
					</div>
					<button type="submit" class="hero__form-btn">Find Job</button>
				</form>
			</div>
		</div>
	</div>
</section>


<div class="pt-50 pb-50 section--bg2">
    <div class="container">
        <div class="row">
        	<div class="col-lg-12 mb-5">
        		<h3 class="text-center text-white">WHO WE ARE</h3>
        	</div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-header text-center">
                        <h4 style="font-size: 25px " class="section-title text-white">Care givers, Nannies , Cleaners and ChildMinders You can Trust.</h4>
                        <p class="mt-2 text-white">Feel better in the comfort of your own home. We specialize in care and daily living assistance, for babies,
                             young stars, old and vulnerables. Whether you need daily or weekly assistance due to
                            aging, illness, recovery, rehabilitation, work, busy
                        schedule, we are hare for you, our are givers will provide an individualized
                    service that you can trust to your family.The company provides you with highly trained cleaner that will give
                your homes, schools shops, office etc best cleaning service</p>

                <br>

                <h4 style="font-size: 25px " class="section-title text-white">Experienced and Supportive</h4>
                <p class="mt-2 text-white">We understand that not one care fits all. Daily services can include anything  from meal
                    preparation, hygiene, cleaning and supervision. We will take he time to get to know you and develop an individualized care plan that
                    fits your specific needs.
                </p>

                <br>
                <h4 style="font-size: 25px" class="section-title text-white">Experienced Home Health Aids</h4>
                <p class="mt-2 text-white">Companionship is key to a trusted relationship with our caregivers. We not only strive
                    to help you with everyday tasks but want to develop a caring relationship with you. We provide one-on-one attention and  care that cannot
                     compare in other settings.
                </p>
                    </div>
                </div>
            </div>
	        <!--<div class="col-lg-12">
	            <ul class="job-cat-list">
	                	                    <li><a href="job/category/1">Accounting/Finance (3)</a></li>
	                	                    <li><a href="job/category/2">Production/Operation (2)</a></li>
	                	                    <li><a href="job/category/3">Bank/Non-Bank Fin .Institution (2)</a></li>
	                	                    <li><a href="job/category/4">Education/Training (3)</a></li>
	                	                    <li><a href="job/category/5">Engineer/Architects (3)</a></li>
	                	                    <li><a href="job/category/6">Design/Creative (3)</a></li>
	                	                    <li><a href="job/category/7">Health and Fitness (3)</a></li>
	                	                    <li><a href="job/category/8">It &amp; Telecommunication (3)</a></li>
	                	                    <li><a href="job/category/9">Customer Support (3)</a></li>
	                	                    <li><a href="job/category/10">Call Center (3)</a></li>
	                	                    <li><a href="job/category/11">Research / Consultancy (3)</a></li>
	                	                    <li><a href="job/category/12">Data Entry/Operator (2)</a></li>
	                	                    <li><a href="job/category/13">Security/Support (2)</a></li>
	                	                    <li><a href="job/category/14">Data Entry / Operator (2)</a></li>
	                	                    <li><a href="job/category/15">Web Developer (0)</a></li>
	                	                    <li><a href="job/category/16">Software Developer (0)</a></li>
	                	            </ul>
	        </div>-->
	    </div>
    </div>
</div>

            <!--<section class="pt-80 pb-80 section--bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">Latest Job <i class="lab la-hotjar text--base"></i></h2>
                </div>
            </div>
        </div>
        <div class="row g-3">
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221654ef4771629623892.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/39">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datasoft/13" class="text--base">Datasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/39" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/612107c930fab1629554633.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/38">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/14" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/38" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221630973001629623856.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/37">Backend Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/threesoft/15" class="text--base">Threesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/37" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221654ef4771629623892.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/36">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datasoft/13" class="text--base">Datasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/36" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/612107c930fab1629554633.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/35">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/14" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/35" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221630973001629623856.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/34">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/threesoft/15" class="text--base">Threesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/34" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121083e1e3711629554750.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/33">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/viserlab/20" class="text--base">Viserlab</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/33" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6122160d406b51629623821.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/32">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datsasoft/21" class="text--base">Datsasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/32" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61210870afb031629554800.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/31">Sr. Officer - Revenue (Operational Finance)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/22" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/31" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/30">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/30" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121083e1e3711629554750.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/29">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/viserlab/20" class="text--base">Viserlab</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/29" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6122160d406b51629623821.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/28">Senior WordPress Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datsasoft/21" class="text--base">Datsasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/28" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61210870afb031629554800.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/27">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/22" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/27" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/26">Sr. Officer - Revenue (Operational Finance)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/26" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/25">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/25" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/24">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/24" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section> -->          
 <section class="pt-80 pb-80 dark--overlay bg_img" style="background-image: url({{URL::asset('assets/images/frontend/feature/610f83644ebec1628406628.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-8">
                <div class="section-header text-center">
                    <h2 class="section-title text-white">Testimonials</h2>
                    <!--<p class="mt-2 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi mollitia saepe eos facere numquam ut, minima animi distinctio at maiores veritatis perferendis magni.</p>-->
                </div>
            </div>
        </div>
        <div class="row gy-4">
                            <div class="col-lg-3 col-sm-6">
                    <div class="feature-card text-center">
                        <div class="feature-card__icon">
                           <!-- <img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/>-->         
                             </div>
                        <div class="feature-card__content">
                            <h4 class="text-white">John Doe</h4>
                            <p class="mt-2 text-white">"If you are looking  for some awesome. knowledgeable people, these are the people  I highly recommended. Their 
                                freindliness and result-driven approach is what i love about them. "</p>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <div class="feature-card text-center">
                        <div class="feature-card__icon">
                           <!-- <img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->                     </div>
                        <div class="feature-card__content">
                            <h4 class="text-white">Jane Smith</h4>
                            <p class="mt-2 text-white">"I didnt know  what to do about my health issues. I found  that this team was just who  was looking 
                                for. They are freindly, professional, and they really care.  "</p>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <div class="feature-card text-center">
                        <div class="feature-card__icon">
                            <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->                       </div>
                        <div class="feature-card__content">
                            <h4 class="text-white">Abiola Oredapo</h4>
                            <p class="mt-2 text-white">"If your looking for some compassionate, caring people. this is the team I highly recommend. Their freindliness and professionalism is what I love about them."</p>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <div class="feature-card text-center">
                        <div class="feature-card__icon">
                            <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/>-->                    
                        </div>
                        <div class="feature-card__content">
                            <h4 class="text-white">Close Deal</h4>
                            <p class="mt-2 text-white">Give customers a reason to do business with you</p>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>            
<!--<section class="pt-80 pb-80 section--bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">Feature Job <i class="lab la-hotjar text--base"></i></h2>
                </div>
            </div>
        </div>
        <div class="row g-3">
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121078a0a9041629554570.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/1">Senior Content Writer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/viserlab/12" class="text--base">Viserlab</a></p>
                                    <span class="fs--14px text--muted">10 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/1" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221654ef4771629623892.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/2">Senior Content Writer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datasoft/13" class="text--base">Datasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/2" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/612107c930fab1629554633.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/3">UX &amp; UI Designer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/14" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/3" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221630973001629623856.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/4">UX &amp; UI Designer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/threesoft/15" class="text--base">Threesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/4" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121078a0a9041629554570.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/5">Senior Content Writer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/viserlab/12" class="text--base">Viserlab</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/5" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221654ef4771629623892.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/6">UX &amp; UI Designer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datasoft/13" class="text--base">Datasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/6" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/612107c930fab1629554633.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/7">UX &amp; UI Designer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/14" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/7" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61221630973001629623856.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/8">UX &amp; UI Designer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/threesoft/15" class="text--base">Threesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/8" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61210870afb031629554800.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/11">Technical Support</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/22" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/11" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6122160d406b51629623821.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/14">Junior Content Writer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datsasoft/21" class="text--base">Datsasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/14" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/16">Laravel/PHP Developer (Mid-Level)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/16" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6122160d406b51629623821.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/18">Technical Support</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/datsasoft/21" class="text--base">Datsasoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/18" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/20">Technical Support</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/20" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121083e1e3711629554750.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/21">React.js Developer</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/viserlab/20" class="text--base">Viserlab</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/21" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/6121088edc0e91629554830.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/26">Sr. Officer - Revenue (Operational Finance)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/thresesoft/23" class="text--base">Thresesoft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/26" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-lg-4 col-6">
                    <div class="short-job-card">
                        <div class="short-job-card__top">
                            <div class="short-job-card__thumb">
                                <img src="{{URL::asset('assets/images/employerLogo/61210870afb031629554800.jpg')}}" alt="image">
                            </div>
                            <div class="short-job-card__content">
                                <h6 class="short-job-card__title"><a href="job/detail/27">Junior PHP Developer (Laravel)</a></h6>
                                <div class="short-job-card__bottom d-flex flex-wrap align-items-center justify-content-between mt-1">
                                    <p class="caption"><a href="employers/profile/one-soft/22" class="text--base">One Soft</a></p>
                                    <span class="fs--14px text--muted">9 months ago</span>
                                </div>
                            </div>
                            <div class="short-job-card__action">
                                <a href="user/favorite/item/27" class="bookmark-btn" >
                                    <span class="non-bookmark"><i class="far fa-bookmark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section> -->           
<section class="cta-section pt-80 pb-80">
    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="cta-thumb">
                    <img src="{{URL::asset('https://media.istockphoto.com/photos/medical-staff-around-the-world-ethnically-diverse-headshot-portraits-picture-id1215908851?k=20&m=1215908851&s=612x612&w=0&h=sQwJ2clW0NeAAnCscoJg2GwHUNMpKqxh9l2gcc7-KH8=')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-5 text-lg-start text-center">
                <h2 class="cta-title">Over 20,000+ Health workers Registered with Us.</h2>
                <a href="#" class="btn btn--base mt-4">Registration Now</a>
            </div>
        </div>
    </div>
</section>            <section class="pt-80 pb-80 section--bg2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 pe-lg-5">
                <div class="package-details-wrapper">
                    <h2 class="title text-white">Awesome package who want to post job&#039;s posts</h2>
                   <!-- <p class="mt-3 text-white">kindly supscribe for any package</p>-->
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row gy-4 justify-content-center">
                                            <div class="col-md-6">
                            <div class="package-card">
                                <div class="package-card__top">
                                    <div class="icon">
                                        <i class="las la-user"></i>                                    </div>
                                    <div class="content">
                                        <h3 class="package-card__name">Basic</h3>
                                        <div class="package-card__price">$50 <sub>/ 12 month</sub></div>
                                    </div>
                                </div>
                                <div class="package-card__content">
                                    <ul class="package-card__feature-list">
                                        <li>You can create <span class="badge badge--base">3 job posts</span></li>
                                                                                                                                <li>Jobs publish every month</li>
                                                                                                                                <li>Jobs publish every week</li>
                                                                                                                                <li>Jobs publish every year</li>
                                                                            </ul>
                                </div>
                                <div class="package-card__footer">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-plan_id="1" data-bs-target="#exampleModal" class="btn btn--dark w-100 mt-4 planSubscribe">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                                            <div class="col-md-6">
                            <div class="package-card">
                                <div class="package-card__top">
                                    <div class="icon">
                                        <i class="lar la-address-book"></i>                                    </div>
                                    <div class="content">
                                        <h3 class="package-card__name">Standard</h3>
                                        <div class="package-card__price">$20 <sub>/ 6 month</sub></div>
                                    </div>
                                </div>
                                <div class="package-card__content">
                                    <ul class="package-card__feature-list">
                                        <li>You can create <span class="badge badge--base">5 job posts</span></li>
                                                                                                                                <li>Jobs publish every month</li>
                                                                                                                                <li>Jobs publish every week</li>
                                                                                                                                <li>Various versions have evolved</li>
                                                                            </ul>
                                </div>
                                <div class="package-card__footer">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-plan_id="2" data-bs-target="#exampleModal" class="btn btn--dark w-100 mt-4 planSubscribe">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade custom--modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="employer/plan/subscribe">
                <input type="hidden" name="_token" value="Spfk35imZKlPMsS1cK7yMtiIy3NoL3URG7cXdRwg">                <input type="hidden" name="plan_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subscribe Plan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to subscribe this plan?                    <div class="form-group mt-3">
                        <select class="form--control" name="payment" required="">
                            <option value="">Select One</option>
                            <option value="1">JobLab Wallet</option>
                            <option value="2">Checkout</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn--primary btn-md">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>



            <section class="pt-80 pb-80 section--bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">More than 2,000 companies use Joblab.</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center gy-5">
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88ec140721628408044.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88e82e33e1628408040.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88e4d63e01628408036.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88e19f71f1628408033.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88de5a6e51628408030.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88d7a16931628408023.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88d3353a01628408019.png')}}" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{URL::asset('assets/images/frontend/brand/610f88c1c79ad1628408001.png')}}" alt="image">
                    </div>
                </div>
                    </div>
    </div>
</section>            <section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-8">
                <div class="section-header text-center">
                    <h2 class="section-title">Latest News</h2>
                   <!-- <p class="mt-2 ">Hic tenbus sequi. sddd</p>-->
                </div>
            </div>
        </div>
        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                    <div class="blog-post">
                        <div class="blog-post__thumb rounded-3">
                            <span class="blog-post__date"><i class="las la-calendar"></i> 27 Oct 2020</span>
                            <a href="" class="d-block h-100">
                                <img src="{{URL::asset('https://media.istockphoto.com/photos/are-you-enjoying-your-breakfast-picture-id1165371469?k=20&m=1165371469&s=612x612&w=0&h=9VNP-nNVrqe2l6X9EGwfGDYd4K_BPJtnkgWb555VWKs=')}}" alt="blog image" class="w-100 h-100 object-fit--cover">
                            </a>
                        </div>
                        <div class="blog-post__content">
                            <!--<h4 class="blog-post__title"><a href="blog/26/deleniti-animi-est-ipsum-excepturi-ab-modi-minus">Deleniti, animi est ipsum excepturi ab modi minus.</a></h4>
                            <p class="mt-2">dolor sit amet consectetur adipisicing elit. Consequatur incidunt beatae culpa t...</p>
                            <a href="blog/26/deleniti-animi-est-ipsum-excepturi-ab-modi-minus" class="text--base text-decoration-underline mt-4">Read More</a>-->
                        
                        </div>
                    </div>
                </div>
                            <div class="col-lg-4 col-md-6">
                    <div class="blog-post">
                        <div class="blog-post__thumb rounded-3">
                            <span class="blog-post__date"><i class="las la-calendar"></i> 30 Oct 2020</span>
                            <a href="" class="d-block h-100">
                                <img src="{{URL::asset('https://media.istockphoto.com/photos/portrait-of-senior-woman-and-her-mixed-race-female-caregiver-picture-id1180634974?k=20&m=1180634974&s=612x612&w=0&h=EaUD9zNOgMvakXISHf5jQQ9dvKD8LTllG5Og14a6qUo=')}}" alt="blog image" class="w-100 h-100 object-fit--cover">
                            </a>
                        </div>
                        <div class="blog-post__content">
                            <!--<h4 class="blog-post__title"><a href="blog/30/suscipit-nemo-modi-recusandae-culpa-iure-voluptatum-fugit">Suscipit nemo modi recusandae culpa iure voluptatum fugit.</a></h4>
                            <p class="mt-2">Dolor sit amet consectetur adipisicing elit. Consequatur incidunt beatae culpa t...</p>
                            <a href="blog/30/suscipit-nemo-modi-recusandae-culpa-iure-voluptatum-fugit" class="text--base text-decoration-underline mt-4">Read More</a>-->
                        </div>
                    </div>
                </div>
                            <div class="col-lg-4 col-md-6">
                    <div class="blog-post">
                        <div class="blog-post__thumb rounded-3">
                            <span class="blog-post__date"><i class="las la-calendar"></i> 08 Aug 2021</span>
                            <a href="" class="d-block h-100">
                                <img src="{{URL::asset('https://media.istockphoto.com/photos/senior-woman-sitting-in-chair-and-laughing-with-nurse-in-retirement-picture-id1047536650?k=20&m=1047536650&s=612x612&w=0&h=PZFyzG7mwRkMKSbyelxI-_0E-sk9iSCoQSi_sLv9bHI=')}}" alt="blog image" class="w-100 h-100 object-fit--cover">
                            </a>
                        </div>
                        <div class="blog-post__content">
                            <!--<h4 class="blog-post__title"><a href="blog/63/consequatur-incidunt-beatae-culpa-temporibus-officiis-quidem-illo-inventore-quam-vitae-unde">Consequatur incidunt beatae culpa temporibus officiis quidem! Illo inventore quam vitae unde</a></h4>
                            <p class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur incidunt b...</p>
                            <a href="blog/63/consequatur-incidunt-beatae-culpa-temporibus-officiis-quidem-illo-inventore-quam-vitae-unde" class="text--base text-decoration-underline mt-4">Read More</a>-->
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>

        </div>

    @endsection
