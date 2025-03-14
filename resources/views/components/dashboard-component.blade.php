<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


    <meta charset="utf-8" />
    <title>Humu agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Edd Nettoyage" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/onboarding/logos/edd-no-bg-black.png">

    <!-- App css -->
    <link href="/dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/dash/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/dash/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/onboarding/css/flaticon.css" rel="stylesheet">


</head>

<body id="body">
    @include('sweetalert::alert')


    <!-- leftbar-tab-menu -->
    <div class="leftbar-tab-menu">
        <div class="main-icon-menu">
            <a href="index.html" class="logo logo-metrica d-block text-center">
                <span>
                    {{-- <img style="height: 50px; width: 50px" src="/dash/logos/edd-no-bg-black.png" alt="logo-small"
                        class="logo-sm"> --}}
                </span>
            </a>
            <div class="main-icon-menu-body">
                <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                    <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                            data-bs-trigger="hover">
                            <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                                <i class="ti ti-smart-home "></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Booking"
                            data-bs-trigger="hover">
                            <a href="#MetricaBooking" id="dashboard-tab" class="nav-link">
                                <i class="ti ti-ticket "></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Services"
                            data-bs-trigger="hover">
                            <a href="#MetricaServices" id="apps-tab" class="nav-link">
                                <i class="ti ti-briefcase "></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Website Builder"
                            data-bs-trigger="hover">
                            <a href="#MetricaApps" id="apps-tab" class="nav-link">
                                <i class="ti ti-apps "></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->


                        {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Faqs"
                            data-bs-trigger="hover">
                            <a href="#Faq" id="apps-tab" class="nav-link">
                                <i class="ti ti-question-mark menu-icon"></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Company"
                            data-bs-trigger="hover">
                            <a href="#Company" id="apps-tab" class="nav-link">
                                <i class="ti ti-box menu-icon"></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Coverage"
                            data-bs-trigger="hover">
                            <a href="#Work" id="apps-tab" class="nav-link">
                                <i class="ti ti-receipt menu-icon"></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item--> --}}

                        {{--

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit"
                            data-bs-trigger="hover">
                            <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                                <i class="ti ti-planet menu-icon"></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages"
                            data-bs-trigger="hover">
                            <a href="#MetricaPages" id="pages-tab" class="nav-link">
                                <i class="ti ti-files menu-icon"></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication"
                            data-bs-trigger="hover">
                            <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                                <i class="ti ti-shield-lock menu-icon"></i>
                            </a>
                            <!--end nav-link-->
                        </li>
                        <!--end nav-item--> --}}
                    </ul>
                    <!--end nav-->
                </div>
                <!--end /div-->
            </div>
            <!--end main-icon-menu-body-->

        </div>
        <!--end main-icon-menu-->

        <div class="main-menu-inner">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="#" class="logo">
                    <span>

                        Humu Agency
                        {{-- <img style="height: 100px; width: 100px" src="/dash/logos/edd-no-bg-black.png"
                            alt="logo-large" class="logo-lg logo-dark">
                        <img style="height: 100px; width: 100px" src="/dash/logos/edd-no-bg-black.png" alt="logo-large"
                            class="logo-lg logo-light"> --}}
                    </span>
                </a>
                <!--end logo-->
            </div>
            <!--end topbar-left-->
            <!--end logo-->
            <div class="menu-body navbar-vertical tab-content" data-simplebar>
                <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                    aria-labelledby="dasboard-tab">
                    <div class="title-box">
                        <h6 class="menu-title">
                            <a class="nav-link" href="#">Dashboard</a>

                        </h6>
                    </div>
                </div><!-- end Dashboards -->

                <div id="MetricaServices" class="main-icon-menu-pane tab-pane" role="tabpanel"
                    aria-labelledby="dasboard-tab">
                    <div class="title-box">
                        <h6 class="menu-title">Manage Services</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Create Services</a>
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#">All Services</a>
                            </li>
                            <!--end nav-item-->


                        </ul>
                        <!--end nav-->
                    </div>
                </div><!-- end Dashboards -->


            </div>
            <!--end menu-body-->
        </div><!-- end main-menu-inner-->
    </div>
    <!-- end leftbar-tab-menu-->





    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom" id="navbar-custom">
            <ul class="list-unstyled topbar-nav float-end mb-0">
                {{-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/dash/images/flags/french_flag.jpg" alt="" class="thumb-xxs rounded-circle">
                    </a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="#"><img src="/dash/images/flags/french_flag.jpg" alt=""
                                height="15" class="me-2">French</a>
                        <a class="dropdown-item" href="#"><img src="/dash/images/flags/us_flag.jpg" alt="" height="15"
                                class="me-2">English</a>
                    </div>
                </li>
                <!--end topbar-language--> --}}

                {{-- <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-mail"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                        <h6
                            class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                            Emails <span class="badge bg-soft-primary badge-pill">Latest 3</span>
                        </h6>
                        <div class="notification-menu" data-simplebar>


                            @foreach ($bookings->take(3) as $b)

                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">{{$b?->created_at->diffForHumans()}}</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <img src="/dash/logos/edd-no-bg-black.png" alt=""
                                            class="thumb-sm rounded-circle">
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Admin</h6>
                                        <small class="text-muted mb-0">{!! Str::limit( $b?->admin_response, 30 , '...')
                                            !!}</small>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                        </div>

                    </div>
                </li> --}}
                {{--
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-bell"></i>
                        @if (!$bookings->where('service_status', 'Pending')->isEmpty())
                        <span class="alert-badge"></span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                        <h6
                            class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                            Notifications <span class="badge bg-soft-primary badge-pill">Latest 3</span>
                        </h6>
                        <div class="notification-menu" data-simplebar>

                            @foreach ($bookings->where('service_status', 'Pending') as $b)

                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">{{$b?->created_at->diffForHumans()}}</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-chart-arcs"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">{{$b?->email}}</h6>
                                        <small class="text-muted mb-0">{{ Str::limit($b?->service_description, 30 ,
                                            '...')}}</small>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                        </div>

                        <a href="{{route('all.booking.view')}}" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li> --}}

                {{-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="/dash/logos/edd-no-bg-black.png" alt="profile-user"
                                class="rounded-circle me-2 thumb-sm" />
                            <div>
                                <small class="d-none d-md-block font-11">Admin</small>
                                <span class="d-none d-md-block fw-semibold font-12">Edd Nettoyage<i
                                        class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="dropdown-divider mb-0"></div>
                        <sapn class="dropdown-item">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <i class="ti ti-power font-16 me-1 align-text-bottom"></i>
                                <button style="border: none;" type="submit">Logout</button>
                            </form>
                            </span>
                    </div>
                </li>
            </ul> --}}

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                        <i class="ti ti-menu-2"></i>
                    </button>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" action="#" method="get">
                        <input type="search" name="search" class="form-control top-search mb-0"
                            placeholder="Type text...">
                        <button type="submit"><i class="ti ti-search"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <!-- Top Bar End -->


    {{$dashbody}}
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="/dash/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dash/libs/simplebar/simplebar.min.js"></script>
    <script src="/dash/libs/feather-icons/feather.min.js"></script>
    <script src="/dash/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/dash/js/pages/hospital-index.init.js"></script>
    <!-- App js -->
    <script src="/dash/js/app.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editorCreate' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>

</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/metrica/default/hospital-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 17:23:02 GMT -->

</html>
