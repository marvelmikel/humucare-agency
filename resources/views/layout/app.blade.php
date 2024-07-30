<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humucarecleaning - Home</title>
    <meta name="title" Content="Humucarecleaning - Home">
    <meta name="description"
        content="Humucare&cleaning Agency is a registered company located at the heart of birmingham, we are an organization with a standout experience in the care giving and cleaning. As we all know hygiene is a paramount and essential
                     part of our lives so we bring you not just that but also more with love.">

    <meta name="keywords" content="Humucare,health workers, Agency,cleaning services, Health Job, post platform,job search platform,employe hire platform">

    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logoIcon/logo.png') }}" type="image/x-icon">

    <meta name="google-site-verification" content="7X6Gly5WrX-YUCJoRjgVYucQy5QqRNsTVW87x3PrIqA" />
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62b879bdb0d10b6f3e7961e0/1g6g9n5md';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    {{-- new design css --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/home.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/service.css')}}">

</head>

<body>
    <img src="{{ URL::asset('assets/images/hero-bg-image.png')}}" alt="hero-bg" />
    <main>
        <header>
            <nav class="navbar" id="myNavbar">
                <div class="nav-items">
                    <div>
                        <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo" class="logo" />
                    </div>
                    <div class="nav-links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('service') }}">Services</a>
                        <a href="#contact">Contact</a>
                        {{-- <a href="#consultations">Consultation</a> --}}
                     
                        <a href="./courses.html" id="couresMobileBtn">Courses</a>
                        <a href="./login.html" id="loginMobileBtn">Login</a>
                    </div>

                    <button class="btn">Humu Courses</button>
                    <a href="./registration.html">
                        <button class="btn" id="registerBtn">Register</button>
                    </a>
                </div>
                <a href="javascript:void(0);" class="icon" id="mobileNav">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </nav>
        </header>

    @yield('content')

    <footer class="footer">
        <div class="footer-main">
            <div class="footer-details">
                <div class="footer-nav">
                    <h3>Company</h3>
                    <div class="footer-links">
                        <a>Home</a>
                        <a>About</a>
                        <a>Contact</a>
                        <a>Consultation</a>
                        <a>Services</a>
                        <button class="btn">
                            Courses
                        </button>
                    </div>
                </div>
                <div class="footer-nav">
                    <div class="footer-logo">
                        <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo" />

                    </div>
                    <h6>Humucare&cleaning Agency is​ a registered company​​ located at the heart of birmingham, we
                        are
                        an
                        organization with a
                        standout experience in the care giving​ and cleaning.​ As we all know hygiene is a paramount
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
<script type="module" src="{{ URL::asset('assets/js/app.js')}}"></script>
<script type="module" src="{{ URL::asset('assets/js/navbar.js')}}"></script>
</html>
