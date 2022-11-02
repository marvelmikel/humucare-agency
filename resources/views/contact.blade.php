@extends('layout.app')

@section('content')
<section class="inner-hero bg_img overlay--one" style="background-image: url('{{ URL::asset('assets/images/frontend/breadcrumb/61124d73cde5c1628589427.jpg')}}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="page-title text-white">Contact Us</h2>
                <ul class="page-breadcrumb justify-content-center">
                    <li><a href="{{ ('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
        <div class="main-wrapper">

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 pe-lg-4">
                <div class="contact-form-area">
                    <h3 class="title">Contact Us</h3>
                    <form method="POST" class="mt-4">
                        <input type="hidden" name="_token" value="Spfk35imZKlPMsS1cK7yMtiIy3NoL3URG7cXdRwg">                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form--control" placeholder="Full name" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form--control" placeholder="Enter Your email" required="">
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form--control" placeholder="Enter Subject" required="">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form--control" placeholder="Your message" required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn--base w-100">Submit Now</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="map-area">
                    <iframe src = "https://maps.google.com/maps?q=34,43&hl=es;z=14&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-5 gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="las la-map-marked-alt"></i>
                    </div>
                    <div class="contact-item__content">
                        <h5 class="mb-2">Office Address</h5>
                        <p>19  grove avenue Birmingham 
                            B21 9EX</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="las la-phone-volume"></i>
                    </div>
                    <div class="contact-item__content">
                        <h5 class="mb-2">Phone Number</h5>
                        <p><a href="tel:123 455554544">+44 01214484501  &  +44 07484712747</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <i class="las la-envelope"></i>
                    </div>
                    <div class="contact-item__content">
                        <h5 class="mb-2">Email Address</h5>
                        <p><a href="/cdn-cgi/l/email-protection#781c1d1517381f15191114561b1715"><span class="__cf_email__" data-cfemail="c5a1a0a8aa85a2a8a4aca9eba6aaa8">agency@humucarecleaning.co.uk</span></a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>

@endsection
