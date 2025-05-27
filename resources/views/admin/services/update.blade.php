<x-dashboard-component>

    <x-slot name="dashbody">

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Update Services</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form action="{{route('update', $service?->id)}}" enctype="multipart/form-data" method="POST">

                                                @csrf
                                                <div class="form-group">
                                                    <div class="row">

                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <label for="projectName" class="form-label">Service Title :</label>
                                                            <input type="text" class="form-control" name="title" value="{{$service?->title}}" aria-describedby="emailHelp" required placeholder="Enter Title  eg. Humucare Cleaning">
                                                        </div><!--end form-group-->

                                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                                            <label for="projectName" class="form-label">Service Link : Eg. https://www.humucareshop.co.uk/</label>
                                                            <input type="url" class="form-control" name="link" value="{{$service?->link}}" aria-describedby="emailHelp" required placeholder="Enter Link eg. https://humucarecleaning.com">
                                                        </div><!--end form-group-->



                                                    </div>
                                                </div><!--end form-group-->


                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-2 mb-lg-3">
                                                            <label class="form-label mt-2" for="pro-end-date">Image: Image should not be more than 2mb in size</label>
                                                            <input type="file" name="image" class="form-control" accept="image/*">
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div>

                                                <div class="col-lg-6 mb-2 mt-lg-0">
                                                    <label for="projectName" class="form-label">Short description :</label>
                                                    <textarea  class="form-control" name="description" id=""  rows="10">{{$service?->description}}</textarea>
                                                </div><!--end form-group-->

                                                <button name="update service button" type="submit" class="btn btn-de-primary btn-sm">Update Service</button>
                                            </form>  <!--end form-->
                                        </div><!--end col-->

                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Mistech<span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> Mistech</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

    </x-slot>
</x-dashboard-component>
