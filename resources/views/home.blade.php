@extends('layout.app')

@section('content')

{{-- <div id="pspdfkit" style="height: 100vh"></div> --}}


<section class="hero" id="home">
    <div class="hero-sub">
        <article class="hero-info">
            <h2>Your most trusted partner in care and Hygiene</h2>
            <a href="{{ route('about') }}">
                <button class="hero-btn">Learn more</button>
            </a>
        </article>
        <div class="nurse-old-woman">
            <img src="{{ URL::asset('assets/images/nurse-with-old-patient.png')}}" alt="Nurse with old patient" />
        </div>
    </div>
</section>


<section class="about" id="about">
    <div>
        <div class="about-sub">
            <h2>About Us</h2>
            <p>Humucare is your ultimate destination for top-quality cleaning and care services. Our dedicated
                team
                consists of caregivers, nannies, cleaners, and childminders who are committed to providing
                exceptional
                assistance and support. With a focus on cleanliness and hygiene, we ensure that your home,
                school,
                office, or any other space receives the best cleaning service possible.</p>
            <a href="{{ route('serviceRequest') }}">
            <button class="btn req-btn">Request a service</button>
            </a>
            <div class="nurse-container">
                <img class="nurse" src="{{ URL::asset('assets/images/nurse.png')}}" alt="Nurse" />
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <img src="{{ URL::asset('assets/images/baby-and-mother.png')}}" alt="Baby and Mother" />
    <div class="testimonials-main">
        <h2 class="testimonials-heading">Testimonials</h2>
        <p class="testimonials-intro">Read what our clients say about us</p>
        <div class="testimonials-sub">
            <article class="testimonials-card">
                <p>"If you're looking for a compassionate agency to care for children and the elderly, I highly
                    recommend Humucare. Their friendliness and professionalism is what I love most about them."
                </p>
                <h4>Mr Abiola Oredapo</h4>
            </article>
            <article class="testimonials-card">
                <p>"I didn’t know what to do about my health issues. I got to find this team, their touch was
                    just
                    what I needed. They are friendly professionals who really care."</p>
                <h4>Miss Jane Smith</h4>
            </article>
            <article class="testimonials-card">
                <p>"HUMUCARE is a reputable and reliable care organization, their care and consultancy is tested
                    and
                    trusted. The well-being of the elderly and those who need support is what drives Humucare."
                </p>
                <h4>Mr Freshermel</h4>
            </article>
            <article class="testimonials-card">
                <p>"Humucare agency assisted my family and me in securing a care job at a reputable facility.
                    Also,
                    their support and guidance in the visa process was the best."</p>
                <h4>Mr Dolapo Adebayo</h4>
            </article>
        </div>
        <div class="book-consultation" id="consultations">
            <p class="booking-heading">We are committed to serving you</p>
            <a href="{{ route('serviceRequest') }}">
            <button class="booking-btn">Book a consultation now!</button>
            </a>
        </div>
    </div>
</section>

<section class="why-humucare" id="services">
    <div class="why-humucare-main">
        <h2>Why Choose Humucare</h2>
        <div class="service-details">
            <div class="service-slider-container">
                <div class="service-articles-wrapper">
                    <article class="articles">
                        <h5>Experienced and Supportive Assistance:</h5>
                        <p>Beyond just cleaning, our team provides companionship and one-on-one attention to
                            foster
                            a
                            caring
                            and trustworthy relationship with our clients. We understand that each
                            individual
                            has
                            unique
                            needs, and we strive to develop meaningful connections based on trust and
                            compassion.
                        </p>
                    </article>
                    <article class="articles">
                        <h5>cleaning Excellence:</h5>
                        <p>Say goodbye to dirt and grimme with our team of dedicated cleaning
                            specialisties!.
                            From home to office and everything in between, we're here to ensure your space
                            shines brighter than ever before.
                        </p>
                    </article>
                    <article class="articles">
                        <h5>Personalized Care Plans:</h5>
                        <p>we believe that no two individual are alike,which is why we offer personalized
                            care plans tailored to your specific needs.Our goal is to ensure that you feel
                            comfortable and supported in your own space, whether you need assistance with
                            daily tasks or ongoing care.
                        </p>
                    </article>

                </div>

                <div class="service-slider-img">
                    <img class="images main" src="{{ URL::asset('assets/images/nurse-with-old-patient-1.png')}}"
                        alt="Nurse and Patient" />
                    <img class="images" src="{{ URL::asset('assets/images/man-with-basket.png')}}" alt="Nurse and Patient" />
                    <img class="images" src="{{ URL::asset('assets/images/patient-on-yellow-nurse.png')}}" alt="Nurse and Patient" />
                    <div class="navigation-btns-wrapper">
                        <div class="previous navigate-btn"><img src="{{ URL::asset('assets/images/arrow-right.png')}}" alt="arrow" />
                        </div>
                        <div class="next navigate-btn"><img src="{{ URL::asset('assets/images/arrow-right.png')}}" /></div>
                    </div>
                </div>
                <div class="mobile-service-articles-wrapper">
                    <article class="articles">
                        <h5>Experienced and Supportive Assistance:</h5>
                        <p>Beyond just cleaning, our team provides companionship and one-on-one attention to
                            foster
                            a
                            caring
                            and trustworthy relationship with our clients. We understand that each
                            individual
                            has
                            unique
                            needs, and we strive to develop meaningful connections based on trust and
                            compassion.
                        </p>
                    </article>
                    <article class="articles">
                        <h5>cleaning Excellence:</h5>
                        <p>Say goodbye to dirt and grimme with our team of dedicated cleaning
                            specialisties!.
                            From home to office and everything in between, we're here to ensure your space
                            shines brighter than ever before.
                        </p>
                    </article>
                    <article class="articles">
                        <h5>Personalized Care Plans:</h5>
                        <p>we believe that no two individual are alike,which is why we offer personalized
                            care plans tailored to your specific needs.Our goal is to ensure that you feel
                            comfortable and supported in your own space, whether you need assistance with
                            daily tasks or ongoing care.
                        </p>
                    </article>

                </div>


            </div>
            <div class="service-slider-dots">
                <span class="service-dots active"></span>
                <span class="service-dots"></span>
                <span class="service-dots"></span>
            </div>
        </div>

    </div>
</section>


<section class="testimonials" id="testimonials">
    <div class="testimonials-main">
        <h2 class="testimonials-heading">Application Forms</h2>
        <p class="testimonials-intro">Please kindly download the two form & fill it with a
            valid information and submit to the email below; agency@humucarecleaning.co.uk.</p>
        <div class="testimonials-sub">
            <article class="testimonials-card">
                <h4>Humucare Job Application Form</h4>
                <div style="text-align: center; display: flex; justify-content: space-evenly">
                    <a href="/download2" download>
                        <button type="button" onclick="confirmation(event)" data-content="/download2" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download Form
                        </button>
                    </a>

                    <a href="{{route('editPdf', 'humucare-job-application-form.pdf')}}">
                        <button class="btn btn-success">
                            <i class="fas fa-pen"></i> Fill Online.
                        </button>
                    </a>
                </div>
            </article>


            <article class="testimonials-card">
                <h4>Humucare Cleaner Application Form</h4>
                <div style="text-align: center; display: flex; justify-content: space-evenly">
                    <a href="/download" download>
                        <button type="button" onclick="confirmation(event)" data-content="/download" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download Form
                        </button>
                    </a>

                    <a href="{{route('editPdf', 'Humucare-cleaning-application-form.pdf')}}">
                        <button class="btn btn-success">
                            <i class="fas fa-pen"></i> Fill Online.
                        </button>
                    </a>
                </div>
            </article>

            <article class="testimonials-card">
                <h4>Humucare Parent application form</h4>
                <span>To book a Nanny as a parent download.</span>
                <div style="text-align: center; display: flex; justify-content: space-evenly">
                    <a href="/download6" download>
                        <button type="button" onclick="confirmation(event)" data-content="/download6" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download Form
                        </button>
                    </a>

                    <a href="{{route('editPdf', 'PARENT APPLICATION FORM UK.pdf')}}">
                        <button class="btn btn-success">
                            <i class="fas fa-pen"></i> Fill Online.
                        </button>
                    </a>
                </div>
            </article>

            <article class="testimonials-card">
                <h4>Humucare Nanny application form</h4>
                <span>To register as a Nanny download.</span>
                <div style="text-align: center; display: flex; justify-content: space-evenly">
                    <a href="/download5" download>
                        <button type="button" onclick="confirmation(event)" data-content="/download5" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download Form
                        </button>
                    </a>

                    <a href="{{route('editPdf', 'NANNY APPLICATION FORM UK.pdf')}}">
                        <button class="btn btn-success">
                            <i class="fas fa-pen"></i> Fill Online.
                        </button>
                    </a>
                </div>
            </article>


            <article class="testimonials-card">
                <h4>Humucare Time Sheet Form.</h4>
                <span>Download only after job offer is granted.</span>
                <div style="text-align: center; display: flex; justify-content: space-evenly">
                    <a href="/download3" download>
                        <button type="button" onclick="confirmation(event)" data-content="/download3" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download Form
                        </button>
                    </a>

                    <a href="{{route('editPdf', 'humucare-Time-sheet.pdf')}}">
                        <button class="btn btn-success">
                            <i class="fas fa-pen"></i> Fill Online.
                        </button>
                    </a>
                    {{-- <button  class="btn btn-success">Fill online.</button> --}}
                </div>
            </article>


        </div>

    </div>
</section>
<br><br>
<section class="why-humucare" id="services">
    <div class="why-humucare-main">
        <h2>Why Choose Humu Short Stay</h2>

        <div class="service-details">
            <div class="service-slider-container">
                <div class="service-articles-wrapper">
                    <article class="articles">
                        <h5>Experience Humu Short Stay Airbnb offers cozy and convenient stays tailored for quick getaways or brief business trips</h5>
                        <p>
                        Humu Short Stay offers cozy and convenient stays tailored for quick
                        getaways or brief business trips. Enjoy comfortable accommodations with personalized
                        touches and easy access to local attractions, ensuring a hassle-free and memorable experience.
                         Perfect for travelers seeking a homey atmosphere in a prime location.
                        </p>


                        <div class="d-flex">

                            <a href="https://direct.travelnest.com/properties/7989306">
                                <button class="btn training-btn">Visit TravelNest rooms </button>
                                </a>

                                <a href="https://www.airbnb.co.uk/rooms/1197302073479837504">
                                    <button class="btn training-btn">Visit our Airbnb rooms </button>
                                    </a>

                        </div>

                    </article>

                </div>

                <div class="service-slider-img">
                    <img class="images main" src="{{ URL::asset('assets/images/3.jpg')}}" />
                    <img class="images" src="{{ URL::asset('assets/images/3.jpg')}}" />
                    <img class="images" src="{{ URL::asset('assets/images/2.jpg')}}"  />

                    <div class="navigation-btns-wrapper">
                        <div class="previous navigate-btn"><img src="{{ URL::asset('assets/images/arrow-right.png')}}" alt="arrow" />
                        </div>
                        <div class="next navigate-btn"><img src="{{ URL::asset('assets/images/arrow-right.png')}}" /></div>
                    </div>
                </div>
                <div class="mobile-service-articles-wrapper">
                    <article class="articles">
                        <h5>Experienced and Supportive Assistance:</h5>
                        <p>Beyond just cleaning, our team provides companionship and one-on-one attention to
                            foster
                            a
                            caring
                            and trustworthy relationship with our clients. We understand that each
                            individual
                            has
                            unique
                            needs, and we strive to develop meaningful connections based on trust and
                            compassion.
                        </p>
                    </article>
                    <article class="articles">
                        <h5>cleaning Excellence:</h5>
                        <p>Say goodbye to dirt and grimme with our team of dedicated cleaning
                            specialisties!.
                            From home to office and everything in between, we're here to ensure your space
                            shines brighter than ever before.
                        </p>
                    </article>
                    <article class="articles">
                        <h5>Personalized Care Plans:</h5>
                        <p>we believe that no two individual are alike,which is why we offer personalized
                            care plans tailored to your specific needs.Our goal is to ensure that you feel
                            comfortable and supported in your own space, whether you need assistance with
                            daily tasks or ongoing care.
                        </p>

                        <div class="d-flex">
                            <a href="https://direct.travelnest.com/properties/7989306">
                                <button class="btn training-btn">Visit our Travelnest rooms </button>
                                </a>
                            <a href="https://www.airbnb.co.uk/rooms/1197302073479837504">
                                <button class="btn training-btn">Visit our Airbnb rooms </button>
                                </a>
                        </div>
                    </article>

                </div>


            </div>
            <div class="service-slider-dots">
                <span class="service-dots active"></span>
                <span class="service-dots"></span>
                <span class="service-dots"></span>
            </div>
        </div>

    </div>
</section>

<section class="training-course">
    <div class="training-course-main">
        <h2>Consultation</h2>
        <p>We have a range of care and cleaning courses to help those interested in learning and becoming better
            carers and
            cleaners</p>

        <div class="training-course-wrapper">
            <div class="training-course-details">
                <div class="autoSlider-container">
                    <article>
                        <div>
                            <h5>Experienced and Supportive Assistance:</h5>
                            <p>Beyond just cleaning, our team provides companionship and one-on-one attention to
                                foster a caring and trustworthy relationship with our clients. We understand
                                that each individual has unique needs, and we strive to develop meaningful
                                connections based on trust and compassion.</p>
                        </div>
                    </article>
                    <div class="training-slider-container">
                        <img class="training-slider-img" src="{{ URL::asset('assets/images/medical-nurses-working-together.png')}}"
                            alt="Nurse and Patient" />
                    </div>
                </div>
                <div class="autoSlider-container">
                    <article>
                        <div>
                            <h5>Clean with Confidence:</h5>
                            <p>HumuCare's cleaning Courses for Every Skill Level. Whether you're a beginner or a
                                seasoned pro, our range of cleaning courses caters to all skill levels,
                                empowering you to clean with confidence and precision.</p>
                        </div>
                    </article>
                    <div class="training-slider-container">
                        <img class="training-slider-img"
                            src="{{ URL::asset('assets/images/afro-woman-holding-bucket-with-cleaning-items.png')}}"
                            alt="Nurse and Patient" />
                    </div>
                </div>
                <div class="autoSlider-container">
                    <article>
                        <div>
                            <h5>Skill Up, Stand Out:</h5>
                            <p>HumuCare Courses for the Next Level of Care. Stand out in your field with
                                HumuCare's skill-focused courses designed to equip you with the advanced
                                knowledge and techniques needed to excel in caregiving.</p>
                        </div>
                    </article>
                    <div class="training-slider-container">
                        <img class="training-slider-img" src="{{ URL::asset('assets/images/nurse-taking-care-elderly-patient.png')}}"
                            alt="Nurse and Patient" />
                    </div>
                </div>
            </div>
            <div class="btn-dot-wrapper">

                <button class="btn training-btn">Get started</button>
                <div class="dots-container">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>

        </div>





    </div>
</section>
<section class="contact" id="contact">
    <div class="contact-main">
        <h2>Contact Us</h2>
        <div class="address">
            <div>
                <div class="address-heading">
                    <img class="contact-icons" src="{{ URL::asset('assets/images/location.png')}}" alt="location" />
                    <h3>Office Address</h3>
                </div>
                <p class="address-paragraph">19 Grove Ln, Handsworth, Birmingham B21 9ES</p>

            </div>
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/phone.png')}}" alt="phone" />
                    <h3>Phone</h3>
                </div>
                <p class="address-paragraph">+44 01214484501</p>
                <p class="address-paragraph">+44 7485705519</p>
                <p class="address-paragraph">+44 7449688883</p>

            </div>
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/mail.png')}}" alt="mail" />
                    <h3>Email</h3>
                </div>
                <p class="address-paragraph">agency@humucarecleaning.co.uk</p>

            </div>
        </div>
        <div class="map">
            <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Birmingham+(humucare)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps systems</a>
                </iframe>
            </div>
        </div>
    </div>
</section>


@endsection
