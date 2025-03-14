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
                <h2>Login </h2>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <input type="email" id="email" name="email" placeholder="First Name">
                    <input type="password" id="password" name="password" placeholder="Last Name">
                    <button class="btn">Login</button>
                </form>
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
