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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Humucare</title>
    <!-- <link rel="stylesheet" href="./styles/home.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/registration.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/navbar.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('asset/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('asset/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('asset/css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('asset/css/style.css')}}">
</head>

<body>
    @include('partials.notify')

    <img src="{{ URL::asset('assets/images/hero-bg-image.png')}}" alt="hero-bg" />
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

                        <a href="https://humucareemployeemanagement.humucarecleaning.co.uk" id="loginMobileBtn">Login</a>

                      
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
        <section class="form" id="home">
            <div class="form-sub">
                <h2>Humucare Service Quote Form</h2>
                <div class="form-container">
                   
                    <p>Request for any of our service</p>

                    <form id="myForm" action="{{route('serviceRequest')}}" method="post">
                        @csrf
                        <input type="text" id="first_name" name ="firstname"  required placeholder="First Name">
                        <input type="text" id="last_name"  name ="lastname" placeholder="Last Name">
                        <input type="text" id="email" name ="email" placeholder="Email">
                        <input type="text" id="phone"  name ="phone" placeholder="Phone">
                        <input type="text" id="phone" required name ="type" placeholder="Service type (e.g folklift service, Global Talent, Visa, Accommodation, Ticket, Lawyer/Accountant Assistant, ">
                        <button  type="submit" class="btn btn-info">
                            Submit
                        </button>
                        {{-- <span>Already have an account? <a href="./login.html">Login</a></span> --}}
                    </form>
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
       
    </main>

    <script src="asset/js/jquery-3.5.1.min.js"></script>

    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

    <script src="asset/js/jquery.slimscroll.min.js"></script>

    <script src="asset/js/app.js"></script>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
            window.location.href = "/";
        </script>
    @endif
</body>

{{-- <script type="text/javascript" src="{{ URL::asset('assets/js/registration.js')}}"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/js/navbar.js')}}"></script>
</html>
