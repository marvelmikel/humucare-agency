<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Humucare</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/service.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/navbar.css')}}">
</head>

<body>
    <!-- <img src="./images/hero-bg-image.png" alt="hero-bg" /> -->
    <main>

        <header>
            <nav class="navbar" id="myNavbar">
                <div class="nav-items">
                    <div>
                        <a href="{{ route('home') }}">
                            <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo" class="logo" />
                            </a>
                    </div>
                    <div class="nav-links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('service') }}">Services</a>
                        <a href="service#contact">Contact</a>
                        <a href="./login.html" id="loginMobileBtn">Login</a>
                    </div>

                    <button class="btn">Humu Courses</button>
                    <a href="">
                        <button class="btn" id="registerBtn">Register</button>
                    </a>
                </div>
                <a href="javascript:void(0);" class="icon" id="mobileNav">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </nav>
        </header>

        <section class="service-quote">
            <div class="service-quote-sub">
                <h2>Service Quote Form</h2>
                <form>
                    <input type="text" id="first_name" name="fname" placeholder="First Name">
                    <input type="text" id="last_name" name="fname" placeholder="Last Name">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <input type="text" id="password" name="password" placeholder="Password">
                </form>
                <div class="cleaning-service">
                    <h2>Cleaning Services</h2>
                    <p>Select those that apply</p>
                    <div class="cleaning-service-sub">
                        <div class="cleaning-service-left">
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Vacuum and mop floors</h4>
                            </div>
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Dust and wipe surfaces</h4>
                            </div>
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Cleaning and sanitize bathrooms</h4>
                            </div>
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Cleaning and sanitize kitchen</h4>
                            </div>
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Empty trash cans and replace liners</h4>
                            </div>
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Cleaning and sanitize bedrooms</h4>
                            </div>
                            <div class="cleaning-service-left-inner">
                                <input type="checkbox" />
                                <h4>Cleaning and sanitize living room</h4>
                            </div>
                        </div>
                        <div class="cleaning-service-right">
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Fridge cleaning</h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Empty trash cans and replace liners</h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Flower cleaning</h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Private Car Washing</h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Dishwashing</h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Deep Cleaning</h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>House Shopping </h4>
                            </div>
                            <div class="cleaning-service-right-inner">
                                <input type="checkbox" />
                                <h4>Cleaning and Sanitizing dining room</h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn request_btn">Request Quote</button>
                    </div>
                </div>
            </div>
            <div class="other_service_heading">Other Service</div>
            <div class="other-service-card-container">
                <div class="other-service-card">
                    <p>Accommodation (Air bnb)</p>
                    <button class="btn request_btn">Request Quote</button>
                </div>
                <div class="other-service-card">
                    <p>Visa
                        Application</p>
                    <button class="btn request_btn">Request Quote</button>
                </div>
                <div class="other-service-card">
                    <p>Forklift
                        Training/Service</p>
                    <button class="btn request_btn">Request Quote</button>
                </div>
                <div class="other-service-card">
                    <p>Legal Services</p>
                    <button class="btn request_btn">Request Quote</button>
                </div>
                <div class="other-service-card">
                    <p>Accountant
                        Services</p>
                    <button class="btn request_btn">Request Quote</button>
                </div>
                <div class="other-service-card">
                    <p>Flight
                        Booking</p>
                    <button class="btn request_btn">Request Quote</button>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-main">
                <h2>Contact Us</h2>
                <div class="address">
                    <div>
                        <div class="address-heading">
                            <img class="contact-icons" src="./images/location.png" alt="location" />
                            <h3>Office Address</h3>
                        </div>
                        <p class="address-paragraph">19 Grove Ln, Handsworth, Birmingham B21 9ES</p>

                    </div>
                    <div>
                        <div class="address-heading"><img class="contact-icons" src="./images/phone.png" alt="phone" />
                            <h3>Phone</h3>
                        </div>
                        <p class="address-paragraph">+44 01214484501</p>
                        <p class="address-paragraph">+44 7485705519</p>
                        <p class="address-paragraph">+44 7449688883</p>

                    </div>
                    <div>
                        <div class="address-heading"><img class="contact-icons" src="./images/mail.png" alt="mail" />
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
        <footer class="footer">
            <div class="footer-main">
                <div class="footer-details">
                    <div class="footer-nav">
                        <h3>Company</h3>
                        <ul class="footer-links__list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="service#contact">Contact</a></li>
                            {{-- <li><a href="{{ route('home') }}">Consultation</a></li> --}}
                            <li><a href="{{ route('service') }}">Services</a></li>
                        </ul>
                        <button class="btn footer-btn">
                            Courses
                        </button>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-logo">
                            <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo" />

                        </div>
                        <h6>Humucare&cleaning Agency is​ a registered company​​ located at the heart of birmingham, we
                            are
                            an
                            organization with a
                            standout experience in the care giving​ and cleaning.​As we all know hygiene is a paramount
                            and
                            essential part of our
                            lives so we bring you not just that but also more with love.</h6>
                    </div>
                </div>
            </div>
            <div class="copyright-container">
                <div class="policy-container">
                    <span>Privacy Policy</span>
                    <span>Terms of Services</span>
                    <span>Legal</span>
                </div>
                <div class="copyright">
                    <span>Copyright © 2022 Humucarecleaning All Right Reserved</span>
                </div>
            </div>
        </footer>
    </main>
</body>
<script type="text/javascript" src="{{ URL::asset('assets/js/navbar.js')}}"></script>

</html>