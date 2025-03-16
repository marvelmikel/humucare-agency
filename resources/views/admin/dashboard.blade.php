

<x-dashboard-component >

@php
    $services = App\Models\Service::all();
@endphp

    <x-slot name="dashbody">

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Dashboard</h4>
                            </div>
                            <!--end page-title-box-->
                        </div>
                        <!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">

                        <!--end col-->
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <span class="h4 fw-bold">{{$services->count()}}</span>
                                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Services</h6>
                                        </div>
                                        <!--end col-->
                                        <div class="col-auto position-reletive">
                                            <i
                                                class="las la-bed display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                        </div>
                                        <!--end col-->
                                    </div> <!-- end row -->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- container -->

                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> MisTech <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> Mistech</span>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- end page content -->

        </div>

    </x-slot>

</x-dashboard-component>
