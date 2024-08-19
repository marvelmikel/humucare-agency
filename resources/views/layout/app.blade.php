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
        <link rel="stylesheet" href="{{ URL::asset('assets/styles/home.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/styles/navbar.css')}}">



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



</head>

<body>
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

    @yield('content')
    <footer class="footer">
        <div class="footer-main">
            <div class="footer-details">
                <div class="footer-nav">
                    <h3>Company</h3>
                    <ul class="footer-links__list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="home#contact">Contact</a></li>
                        {{-- <li><a href="{{ route('home') }}">Consultation</a></li> --}}
                        <li><a href="{{ route('service') }}">Services</a></li>
                    </ul>
                    <button  class="btn footer-btn">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

     <script>
        function confirmation(ev) {
          ev.preventDefault();
          var downloadContent = ev.currentTarget.getAttribute('data-content');
          if (downloadContent == '/download5') {

              swal({

              title: "Download Humucare Nanny application form?",
              text: "This action cannot be reverted easily",
              icon: "info",
              buttons: true,
              dangerMode: false,
              })
              .then((willCancel) => {
              if (willCancel) {

                  window.location.href = downloadContent;

              }
              });
          }

          if (downloadContent == '/download3') {

              swal({

              title: "Download Humucare Time Sheet Form?",
              text: "Download only after job offer is granted",
              icon: "info",
              buttons: true,
              dangerMode: false,
              })
              .then((willCancel) => {
              if (willCancel) {

                  window.location.href = downloadContent;

              }
              });
          }

          if (downloadContent == '/download6') {

              swal({

              title: "Download Humucare Parent application form?",
              text: "This action cannot be reverted easily.",
              icon: "info",
              buttons: true,
              dangerMode: false,
              })
              .then((willCancel) => {
              if (willCancel) {

                  window.location.href = downloadContent;

              }
              });
          }

          if (downloadContent == '/download') {

              swal({

              title: "Download Humucare Cleaner Application Form?",
              text: "This action cannot be reverted easily.",
              icon: "info",
              buttons: true,
              dangerMode: false,
              })
              .then((willCancel) => {
              if (willCancel) {

                  window.location.href = downloadContent;

              }
              });
          }

          if (downloadContent == '/download2') {

              swal({

              title: "Download Humucare Job Application Form?",
              text: "This action cannot be reverted easily.",
              icon: "info",
              buttons: true,
              dangerMode: false,
              })
              .then((willCancel) => {
              if (willCancel) {

                  window.location.href = downloadContent;

              }
              });
          }

      }
    </script>

<script type="module" src="{{ URL::asset('assets/js/app.js')}}"></script>
<script type="module" src="{{ URL::asset('assets/js/navbar.js')}}"></script>
</html>

