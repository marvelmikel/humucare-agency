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

    @include('sweetalert::alert')
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

                        <a href="home#contact">Contact</a>

                        <a href="https://www.humucareshop.co.uk/">Fashion Shop</a>

                        <a href="https://mannie.ac/"> Food Shop</a>

                        <a href="https://humucarepay.payceler.net/">Send Money</a>

                        <a href="https://humucareemployeemanagement.humucarecleaning.co.uk"
                            id="loginMobileBtn">Login</a>


                    </div>
                    <a href="https://training.humucarecleaning.co.uk/courses">

                        <button class="btn">Humu Courses</button>
                    </a>
                    <a href="https://humucareemployeemanagement.humucarecleaning.co.uk">
                        <button class="btn" id="">Login</button>
                    </a>
                </div>
                <a href="javascript:void(0);" class="icon" id="mobileNav">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </nav>
        </header>

        {{-- <div id="pspdfkit" style="height: 100vh"></div> --}}

        <section class="service-quote">
            <div class="service-quote-sub">
                <h2>Service Quote Form</h2>
                <form action="{{route('serviceQoute')}}" method="POST">
                    @csrf
                    <input type="text" id="first_name" name="fname" placeholder="First Name">
                    <input type="text" id="last_name" name="lname" placeholder="Last Name">
                    <input type="text" id="email" name="email" placeholder="Email">
                    {{-- <input type="text" id="password" name="password" placeholder="Password"> --}}

                    <div class="cleaning-service">
                        <h2>Cleaning Services</h2>
                        <p>Select those that apply</p>
                        <div class="cleaning-service-sub">
                            <div class="cleaning-service-left">
                                <div class="cleaning-service-left-inner">
                                    <input name="renovation_service" type="checkbox" />
                                    <h4>Renovation Services</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="interio_decoration_service" type="checkbox" />
                                    <h4>Interio Decorations Services</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="capentary_service" type="checkbox" />
                                    <h4>Capentary Services</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="vacuum_and_mop_floors" type="checkbox" />
                                    <h4>Vacuum and mop floors</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="dust_and_wipe_surfaces" type="checkbox" />
                                    <h4>Dust and wipe surfaces</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="cleaning_and_sanitize_bathrooms" type="checkbox" />
                                    <h4>Cleaning and sanitize bathrooms</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="cleaning_and_sanitize_kitchen" type="checkbox" />
                                    <h4>Cleaning and sanitize kitchen</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="empty_trash_cans_and_replace_liners" type="checkbox" />
                                    <h4>Empty trash cans and replace liners</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="cleaning_and_sanitize_bedrooms" type="checkbox" />
                                    <h4>Cleaning and sanitize bedrooms</h4>
                                </div>
                                <div class="cleaning-service-left-inner">
                                    <input name="cleaning_and_sanitize_living_room" type="checkbox" />
                                    <h4>Cleaning and sanitize living room</h4>
                                </div>
                            </div>
                            <div class="cleaning-service-right">
                                <div class="cleaning-service-right-inner">
                                    <input name="fridge_cleaning" type="checkbox" />
                                    <h4>Fridge cleaning</h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="empty_trash_cans_and_replace_liners" type="checkbox" />
                                    <h4>Empty trash cans and replace liners</h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="flower_cleaning" type="checkbox" />
                                    <h4>Flower cleaning</h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="private_car_washing" type="checkbox" />
                                    <h4>Private Car Washing</h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="dishwashing" type="checkbox" />
                                    <h4>Dishwashing</h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="deep_cleaning" type="checkbox" />
                                    <h4>Deep Cleaning</h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="house_shopping" type="checkbox" />
                                    <h4>House Shopping </h4>
                                </div>
                                <div class="cleaning-service-right-inner">
                                    <input name="cleaning_and_sanitizing_dining_room" type="checkbox" />
                                    <h4>Cleaning and Sanitizing dining room</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn request_btn" type="submit">Request Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="other_service_heading">Other Service</div>
            <div class="other-service-card-container">
                <div class="other-service-card">
                    <p>Accommodation (Air bnb)</p>
                    <a href="{{ route('serviceRequest') }}">
                        <button class="btn request_btn">Request Quote</button>
                    </a>
                </div>
                <div class="other-service-card">
                    <p>Visa
                        Application</p>
                    <a href="{{ route('serviceRequest') }}">
                        <button class="btn request_btn">Request Quote</button>
                    </a>
                </div>
                <div class="other-service-card">
                    <p>Forklift
                        Training/Service</p>
                    <a href="{{ route('serviceRequest') }}">
                        <button class="btn request_btn">Request Quote</button>
                    </a>
                </div>
                <div class="other-service-card">
                    <p>Legal Services</p>
                    <a href="{{ route('serviceRequest') }}">
                        <button class="btn request_btn">Request Quote</button>
                    </a>
                </div>
                <div class="other-service-card">
                    <p>Accountant
                        Services</p>
                    <a href="{{ route('serviceRequest') }}">
                        <button class="btn request_btn">Request Quote</button>
                    </a>
                </div>
                <div class="other-service-card">
                    <p>Flight
                        Booking</p>
                    <a href="{{ route('serviceRequest') }}">
                        <button class="btn request_btn">Request Quote</button>
                    </a>
                </div>

                <div class="other-service-card">
                    <p>DBS Check £65</p>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AYgUPAKrnn3sQqrOWg8HEayjK_Li5KzAUrSfAO9LP4QwjIIo-IgXE2dOyi0h4KQ-rJrD37Qx13x0FTsW&enable-funding=venmo&currency=GBP"
                        data-sdk-integration-source="button-factory"></script>
                    <script>
                        function initPayPalButton() {
                            paypal.Buttons({
                                style: {
                                    shape: 'rect',
                                    color: 'gold',
                                    layout: 'vertical',
                                    label: 'paypal',

                                },

                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            "description": "DBS check fee\n£ 65",
                                            "amount": {
                                                "currency_code": "GBP",
                                                "value": 65
                                            }
                                        }]
                                    });
                                },

                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(orderData) {

                                        // Full available details
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                        // Show a success message within this page, e.g.
                                        const element = document.getElementById('paypal-button-container');
                                        element.innerHTML = '';
                                        element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                        // Or go to another URL:  actions.redirect('thank_you.html');

                                    });
                                },

                                onError: function(err) {
                                    console.log(err);
                                }
                            }).render('#paypal-button-container');
                        }
                        initPayPalButton();
                    </script>
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

<script src="{{ URL::asset('assets/pspdfkit.js')}}"></script>

<script>
    PSPDFKit.load({
		container: "#pspdfkit",
  		document: "humucare-job-application-form.pdf",
        licenseKey: "ZReDVTLiJuFbqlFb27kscJ6qx1EAP1HZlIK8FrV9TNPSSMLXoUoYtplepNagO6Rdw8W2cN5H3-26qbuKOBjoBRVU5g6wZy2yPQV5casyQFR7UaV5V6-x2_3XzMtI8KgbQltH7vWSf7D9jN7eNURKyt7pQrAl3fi5o3kL7aJUmQNCNb0QyVX_5sCftoobUR2RsQG6SAoD3yILX_Sc"
	})
	.then(function(instance) {
		console.log("PSPDFKit loaded", instance);
	})
	.catch(function(error) {
		console.error(error.message);
	});
</script>

</html>
