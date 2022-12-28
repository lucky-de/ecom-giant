<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
   @include('admin.includes.head')
    @yield('styles')
</head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<body>
    <!-- Begin page -->
<div id="layout-wrapper">
<header id="page-topbar">
    @include('admin.includes.top-navgation')
   
</header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="https://giantcart-ethio.com/asstes/img/logo.svg" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="https://giantcart-ethio.com/asstes/img/logo.svg" alt="" height="50">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="https://giantcart-ethio.com/asstes/img/logo.svg" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="https://giantcart-ethio.com/asstes/img/logo.svg" alt="" height="50">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                @include('admin.includes.sidebar_menu')
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    @include('admin.includes.setting')

    @include('admin.includes.footer')
    @yield('scripts')

</body>

</html>