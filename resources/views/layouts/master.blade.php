<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Urgo - Online Video Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="_token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    @include('layouts.head')
</head>

@section('body')

    <body data-sidebar="dark">
    @show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endforeach

                    <div id="ajaxContent">
                        @yield('content')
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <div class="page-content">
                <div class="ajax-loader">
                    <img src="assets/images/loading.gif" class="img-responsive" />
                </div>
            </div>
        </div>

        <!-- ========================== Loading ==================================== -->
        <style>
            .ajax-loader {
                background-color: rgba(255, 255, 255, 0.7);
                z-index: +100 !important;
                height: 100%;
                display: none;
            }

            .ajax-loader img {
                position: absolute;
                top: 35%;
                left: 45%;
                width: 300px;
            }

        </style>

        <div class="ajax-loader">
            <img src="assets/images/loading.gif" class="img-responsive" />
        </div>
        <!-- ========================== ./Loading ================================== -->


        <!-- End Page-content -->
        {{-- @include('layouts.footer') --}}
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('layouts.footer-script')
</body>

</html>
