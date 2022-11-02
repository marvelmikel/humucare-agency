@extends('layout.app')

@section('content')
<section class="inner-hero bg_img overlay--one" style="background-image: url('{{ URL:: asset('assets/images/frontend/breadcrumb/61124d73cde5c1628589427.jpg')}}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="page-title text-white">Company list</h2>
                <ul class="page-breadcrumb justify-content-center">
                    <li><a href="https://script.viserlab.com/joblab">Home</a></li>
                    <li>Company list</li>
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
                <form action="https://script.viserlab.com/joblab/companies/search" method="GET" class="job-search-form">
                    <div class="row gy-4">
                        <div class="col-md-5 col-sm-6">
                            <div class="custom-icon-field">
                                <i class="las la-search"></i>
                               <select class="form--control" name="industry_id">
                               		<option value="" selected="">Select Industry</option>
                               		                               			<option value="9" >It Industry</option>
                               		                               			<option value="8" >Event Management</option>
                               		                               			<option value="7" >Chemicals</option>
                               		                               			<option value="6" >Call Center</option>
                               		                               			<option value="5" >Business Development</option>
                               		                               			<option value="4" >Broadcasting</option>
                               		                               			<option value="3" >Banking/Financial Services</option>
                               		                               			<option value="2" >Auto Mobile</option>
                               		                               			<option value="1" >Accounting/Taxation</option>
                               		                               </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="custom-icon-field">
                                <i class="las la-map-marker-alt"></i>
                              	<input type="text" name="search" value="" class="form--control" placeholder="Enter company name">
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
<div class="pt-50 pb-50">
	<div class="container">
		<div class="row gy-4 justify-content-center">
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/banksterindia/104">BanksterIndia</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/banksterindia/104" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/test-c/83">Test C</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/test-c/83" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/abc-sdn-bhd/118">ABC Sdn Bhd</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/abc-sdn-bhd/118" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/the-hard-lab/102">The Hard Lab</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/the-hard-lab/102" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/dnsgearhostcom/43">DNSgearHost.com</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/dnsgearhostcom/43" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/dasdasd/79">dasdasd</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/dasdasd/79" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/employerLogo/6122160d406b51629623821.jpg')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/datsasoft/21">Datsasoft</a></h4>
								<p class="fs--14px mt-1">New York, Northeastern -1229</p>
								<p class="fs--14px text--base mt-1">6 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/datsasoft/21" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/clickbank/133">clickbank</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/clickbank/133" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/test-143/27">Test 143</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/test-143/27" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/asds/77">asds</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/asds/77" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/eqweq/114">eqweq</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/eqweq/114" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/test/74">test</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/test/74" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/employerLogo/619cb9849b3a71637661060.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/sss/69">sss</a></h4>
								<p class="fs--14px mt-1">Hyderabad, Telangana-123456</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/sss/69" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/julytier/88">julytier</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/julytier/88" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/ratata/128">ratata</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/ratata/128" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/test/49">test</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/test/49" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/test/87">test</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/test/87" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/employerLogo/624580b50923f1648722101.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/bizerte/109">bizerte</a></h4>
								<p class="fs--14px mt-1">Bizerte, tunis-7000</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/bizerte/109" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/employerLogo/616e8a1e23a9f1634634270.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/mutfak-yapim/50">Mutfak Yapim</a></h4>
								<p class="fs--14px mt-1">Dogansar, Sivas-359100</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/mutfak-yapim/50" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
							<div class="col-xl-4 col-md-6">
					<div class="company-card d-flex flex-wrap">
						<div class="company-card__thumb">
							<img src="{{ URL:: asset('assets/images/default.png')}}" alt="image">
						</div>
						<div class="company-card__content">
							<div class="left">
								<h4 class="title"><a href="https://script.viserlab.com/joblab/employers/profile/mriindo/101">MRIINDO</a></h4>
								<p class="fs--14px mt-1">, -</p>
								<p class="fs--14px text--base mt-1">0 jobs opening</p>
							</div>
							<div class="right">
								<a href="https://script.viserlab.com/joblab/employers/profile/mriindo/101" class="btn btn--base btn-sm"><i class="las la-arrow-right"></i></a>
							</div>
						</div>
					</div><!-- company-card -->
				</div>
					</div>
	</div>
</div>
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="mt-3">Dolor sit amet consectetur adipisicing elit. Ad voluptatum fuga eius expedita, nulla quos blanditiis nobis laboriosam. Natus cum eum fuga praesentium.</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="accordion custom--accordion" id="faqAccordion">
            <div class="row">
                    <div class="col-lg-6">
                                                                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-1" aria-expanded="false" aria-controls="c-1">
                                        Doloremque perspiciatis harum voluptatibus.
                                    </button>
                                </h2>
                                <div id="c-1" class="accordion-collapse collapse" aria-labelledby="h-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-3" aria-expanded="false" aria-controls="c-3">
                                        Doloremque perspiciatis harum voluptatibus
                                    </button>
                                </h2>
                                <div id="c-3" class="accordion-collapse collapse" aria-labelledby="h-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                     <div class="col-lg-6">                                                                                   <div class="accordion-item">
                                <h2 class="accordion-header" id="h-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-2" aria-expanded="false" aria-controls="c-2">
                                        Obcaecati pariatur commodi facilis, officiis
                                    </button>
                                </h2>
                                <div id="c-2" class="accordion-collapse collapse" aria-labelledby="h-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni solut</p>
                                    </div>
                                </div>
                            </div>                                                                                                           <div class="accordion-item">
                                <h2 class="accordion-header" id="h-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-4" aria-expanded="false" aria-controls="c-4">
                                        Doloremque perspiciatis harum voluptatibus
                                    </button>
                                </h2>
                                <div id="c-4" class="accordion-collapse collapse" aria-labelledby="h-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta</p>
                                    </div>
                                </div>
                            </div>
                            </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
