@extends('layout.app')

@section('content')
<section class="inner-hero bg_img overlay--one" style="background-image: url('{{ URL::asset('assets/images/frontend/breadcrumb/61124d73cde5c1628589427.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="page-title text-white">About</h2>
                <ul class="page-breadcrumb justify-content-center">
                    <li><a href="https://script.viserlab.com/joblab">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
</section>
        <div class="main-wrapper">


                        <section class="cta-section pt-80 pb-80">
    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="cta-thumb">
                    <img src="{{ URL::asset('https://media.istockphoto.com/photos/young-woman-nurse-explaining-information-to-man-patient-in-wheelchair-picture-id1271328971?k=20&m=1271328971&s=612x612&w=0&h=pSjrtgvC-8R_6TJy05eMqvO3eTo0obcaB2kvjmaGsCM=') }}" alt="image">
                </div>
            </div>
            <div class="col-lg-5 text-lg-start text-center">
                <h4 style="font-size: 15px " class="cta-title">Humucare&cleaning Agency is​ a registered company​​ located at the heart of birmingham, we are an organization with a standout experience in the care giving​ and cleaning .​ As we all know hygiene is a paramount and essential
                     part of our lives so we bring you not just that but also more with love.</h4>
                     <br>
                     <h4 style="font-size: 15px " class="cta-title">As infants ,our aspirations is to grow old and still be useful to our family and the society but as we grow old,
                          nature ,nurtures us to be children again and as such we need love and care hygienically, which is where Humucare and cleaning agency comes in.</h4>
                          <br>
                          <h4 style="font-size: 15px " class="cta-title">Our services include caring for ​ children ,babies, people with dementia, learning disabilities, conditions, physical disabilities, and supports for adults and teenagers.
                            And supplying cleaners  to customers. </h4>
                            <br>
                            <h4 style="font-size: 15px " class="cta-title">Our carers ,nannies ​ and cleaners are well equipped and qualified to aid and support service users to carry on with their daily activities, while at the same time helping to promote independence and
                                 good quality of life for the service users.</h4>
                                 <br>
                                 <h4 style="font-size: 15px " class="cta-title">We supply company and individuals with cleaning operatives,
                                     care support worker and teaching assistant in and around West Midlands.</h4>
                                     <br>
                                     <h4 style="font-size: 15px " class="cta-title">Furthermore, we provide other services like sourcing for 
                                         oversea professionals in health and social care.​</h4>

                <a href="#" class="btn btn--base mt-4">Register Now</a>
            </div>
        </div>
    </div>
</section>                    <section class="pt-80 pb-80 section--bg2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 pe-lg-5">
                <div class="package-details-wrapper">
                    <h2 class="title text-white">Awesome package who want to post job&#039;s posts</h2>
                   <!-- <p class="mt-3 text-white">Dolor sit amet consectetur adipisicing elit. Soluta possimus officia nulla dolore expedita quod ratne tempora tempore atque cum unde ipsum, animi maxime est ex. Ullam minima adipisci quo ratne tempora.</p>-->
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
                                        <li>Jobs publish every week</li>
                                        <li>Varios versions have evolved</li>
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
            <form method="POST" action="https://script.viserlab.com/joblab/employer/plan/subscribe">
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
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88ec140721628408044.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88e82e33e1628408040.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88e4d63e01628408036.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88e19f71f1628408033.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88de5a6e51628408030.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88d7a16931628408023.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88d3353a01628408019.png" alt="image">
                    </div>
                </div>
                            <div class="col-lg-2 col-sm-3 col-4">
                    <div class="brand-item">
                        <img src="{{ URL::asset('') }}assets/images/frontend/brand/610f88c1c79ad1628408001.png" alt="image">
                    </div>
                </div>
                    </div>
    </div>
</section>                </div>
@endsection
