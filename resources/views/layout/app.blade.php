<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humucarecleaning - Home</title>
    <meta name="title" Content="JobLab - Home">
    <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="JobLab,Job post platform,job search platform,employe hire platform">
    <link rel="shortcut icon" href="{{URL::asset('assets/images/logoIcon/favicon.png')}}" type="image/x-icon">


    <link rel="apple-touch-icon" href="{{URL::asset('assets/images/logoIcon/logo.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Humucarecleaning - Home">

    <meta itemprop="name" content="JobLab - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{URL::asset('assets/images/seo/613090dc406451630572764.png')}}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="JobLab - Job Portal Platform">
    <meta property="og:description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="{{URL::asset('assets/images/seo/613090dc406451630572764.png')}}"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="">

    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/png" href="{{URL::asset('assets/images/logoIcon/favicon.png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{URL::asset('assets/templates/basic/frontend/css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/templates/basic/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/templates/basic/frontend/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/templates/basic/frontend/css/lib/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/templates/basic/frontend/css/main.css')}}">
    <link rel="stylesheet" href="assets/templates/basic/css/custom.css')}}">
            <link href="{{URL::asset('assets/templates/basic/css/color.php?color=16c79a&secondColor=14233c')}}" rel="stylesheet"/>
</head>
<body>
        <div class="preloader-holder">
        <div class="preloader">
            <img src="{{URL::asset('assets/images/logoIcon/logo.png')}}">
        </div>
    </div>
    <header class="header">
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <a class="site-logo site-title" href=""><img src="{{URL::asset('assets/images/logoIcon/logo.png')}}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu m-auto">
                        <li><a href="{{ ('/') }}">Home</a></li>
                                                    <li><a href="{{ route('about')}}">About</a></li>
                                                   <!--<li><a href="{{ route('job')}}">Jobs</a></li>
                                                   <li><a href="{{ route('company')}}">Company</a></li>-->
                                                   <li><a href="{{ route('contact')}}">Contact</a></li>
                                                   <li><a href="https://training.humucarecleaning.co.uk/courses">Humucarecleaning Courses</a></li>
                                            </ul>
                    <div class="nav-right">




                                                    <a href="login.html" class="btn btn-md btn--base d-flex align-items-center"><i class="las la-user fs--18px me-2"></i> Login</a>
                                            </div>
                </div>
            </nav>
        </div>
    </div>
</header>

  @yield('content')

 <!--<div class="cookie__wrapper ">
     <div class="container">
       <div class="d-flex flex-wrap align-items-center justify-content-between">
         <p class="txt my-2">
            <font face="Exo, sans-serif" color="#ffffff"><span style="font-size: 18px;">We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.</span></font><br>              <a href="#" target="_blank">Read Policy</a>
         </p>
           <a href="javascript:void(0)" class="btn btn--base my-2 policy">Accept</a>
       </div>
     </div>
 </div>-->
<footer class="footer-section">
    <div class="footer-section__top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4 col-sm-8 order-lg-1 order-1">
                    <a href="" class="footer-logo"><img src="{{URL::asset('assets/images/logoIcon/logo.png')}}" alt="logo"></a>
                    <p class="mt-4">Humucare&cleaning Agency is​ a registered company​​ located at the heart of birmingham, we are an organization with a standout experience in the care giving​ and cleaning .​ As we all know hygiene is a paramount and essential part of our lives so we bring you not just that but also more with love.</p>
                </div>
                <div class="col-lg-2 col-sm-4 order-lg-2 order-3">
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">Short Links</h3>
                        <ul class="footer-widget__list">
                                                            <li><a href="{{ route('about') }}">About</a></li>
                                                           <!--<li><a href="{{ route('job') }}">Job</a></li>-->
                                                            <!--<li><a href="{{ route('company') }}">Company</a></li>-->
                                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                                    </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 order-lg-3 order-4">
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">Information</h3>
                        <ul class="footer-widget__list">
                            <li><a href="">Support</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Join With Us</a></li>

                        </ul>
                    </div><!-- footer-widget end -->
                </div>
                <div class="col-lg-2 col-sm-4 order-lg-4 order-5">
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">Support</h3>
                        <ul class="footer-widget__list">
                                                            <li><a href="">Terms of Service</a></li>
                                                            <li><a href="">Privacy Policy</a></li>
                                                    </ul>
                    </div><!-- footer-widget end -->
                </div>
                <div class="col-lg-2 col-sm-4 order-lg-5 order-2">
                    <div class="footer-widget">
                        <div class="overview-item">
                            <div class="overview-item__number text--base">30k</div>
                            <p class="caption">Job posts</p>
                        </div>
                        <div class="overview-item">
                            <div class="overview-item__number text--base">20k</div>
                            <p class="caption">Total Condidates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section__bottom" style="background-color: #14233c;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 text-md-start text-center">
                    <p>Copyright © 2022 JobLab All Right Reserved</p>
                </div>
                <div class="col-md-6">
                    <ul class="social-link d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                                                    <li><a href="Youtube" target="_blank"><i class="lab la-youtube"></i></a></li>
                                                    <li><a href="https://twitter.com/" target="_blank"><i class="lab la-pinterest-p"></i></a></li>
                                                    <li><a href="https://twitter.com/" target="_blank"><i class="lab la-instagram"></i></a></li>
                                                    <li><a href="https://twitter.com/" target="_blank"><i class="lab la-twitter"></i></a></li>
                                                    <li><a href="https://www.google.com/" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                            </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


    <script src="{{URL::asset('assets/templates/basic/frontend/js/lib/jquery-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('assets/templates/basic/frontend/js/lib/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/templates/basic/frontend/js/lib/slick.min.js')}}"></script>
    <script src="{{URL::asset('assets/templates/basic/frontend/js/lib/wow.min.js')}}"></script>
    <script src="{{URL::asset('assets/templates/basic/frontend/js/app.js')}}"></script>
        <script>
    "use strict";
    $('.planSubscribe').on('click', function(){
        var modal = $('#exampleModal');
        modal.find('input[name=plan_id]').val($(this).data('plan_id'));
    })
</script>
<script>
	'use strict';
  	$('select[name=city]').on('change',function() {
        $('select[name=location]').html('<option value="" selected="" disabled="">Select One</option>');
        var locations = $('select[name=city] :selected').data('locations');
        var html = '';
        locations.forEach(function myFunction(item, index) {
            html += `<option value="${item.id}">${item.name}</option>`
        });
        $('select[name=location]').append(html);
    });
</script>
<script>
'use strict';
$('.policy').on('click',function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.get('', function(response){
        $('.cookie__wrapper').addClass('d-none');
         notify('success', response.success);

    });
});

</script>
        <link rel="stylesheet" href="{{URL::asset('assets/global/css/iziToast.min.css')}}') }}">
<script src="{{URL::asset('assets/global/js/iziToast.min.js') }}"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{URL::asset('change/"+$(this).val() ;
            });
        })(jQuery);
    </script>
</body>
</html>

