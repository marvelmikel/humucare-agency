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

                                <h4 class="page-title">Service Display</h4>
                            </div>
                            <!--end page-title-box-->
                        </div>
                        <!--end col-->
                    </div>


                    <div class="row">

                        @foreach ($services as $index => $s)

                        <div class="col-lg-3">
                            <div class="card client-card">
                                <div class="card-body text-center">
                                    <img src="{{$s?->local_image_path}}" alt="codeBrown"
                                        class="rounded-circle thumb-xl">
                                    <h5 class=" client-name">{{$s?->name}}</h5>

                                    <p class="text-muted text-center mt-3">{!! Str::limit($s?->description, 30, ' ...') !!}
                                        <a href="#" class="see-more-link" data-index="{{ $index }}">(see more)</a>
                                    </p>
                                    <div class="see-more-dropdown" data-index="{{ $index }}">
                                        <p class="see-more-content">{{ $s?->description }}</p>
                                    </div>

                                    <h6>{{$s?->link}}</h6>
                                    {{-- <label for="">{{$s?->link}}</label> --}}
                                    <button type="button" onclick="window.location.href='{{ $s?->link }}'"
                                        class="btn btn-sm btn-de-success">Click to move to link</button>

                                    <button type="button" class="btn btn-sm btn-de-primary"
                                        onclick="window.location.href='{{ route('update.view', $s->id) }}'">
                                        Update Service
                                    </button>

                                    <a href="javascript:void(0);" class="btn btn-sm btn-de-danger" onclick="if(confirm('Are you sure you want to delete this service?')) { window.location.href='{{ route('delete.service', $s->id) }}'; }">Delete Service</a>
                                    {{-- <button type="button" class="btn btn-sm btn-de-danger"
                                        onclick="window.location.href='{{ route('update.view', $s->id) }}'">
                                        Delete Service
                                    </button> --}}

                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        @endforeach


                    </div>
                    <!--end row-->

                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center"
                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div>
                            <!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div>
                            <!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div>
                            <!--end form-switch-->
                        </div>
                        <!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div>
                            <!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div>
                            <!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div>
                            <!--end form-switch-->
                        </div>
                        <!--end /div-->
                    </div>
                    <!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->

                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Mistech <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mistech</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

    </x-slot>
</x-dashboard-component>
