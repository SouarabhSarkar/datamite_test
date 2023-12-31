<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Data mites</title>

    <meta name="description" content="READY FOR A CAREER IN
        DATA SCIENCE?">
    <meta name="author" content="datamites">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="READY FOR A CAREER IN
    DATA SCIENCE?">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="READY FOR A CAREER IN
        DATA SCIENCE?">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/r.jpg') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/r.jpg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/r.jpg') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="page-header-fixed page-header-glass main-content-boxed">

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="space-x-1 d-flex align-items-center space-x-2">
                    <!-- Logo -->
                    <a class="link-fx fw-bold" href="/">
                        <img src="{{ asset('assets/media/favicons/r.jpg') }}" alt="">
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="space-x-1">
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    {{-- <a class="btn btn-alt-primary px-3 d-none d-sm-inline-block" href="be_pages_dashboard.html"
                        target="_blank">
                        <i class="fa fa-rocket opacity-50"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Live Preview</span>
                    </a> --}}
                    <a class="btn btn-alt-success px-3" href="{{ route('registeration') }}">
                        <span class="ms-1 d-none d-sm-inline-block">Registeration</span>
                    </a>
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Feature: Developer Minded -->
            <div class="bg-body-light" style="background-color:white !important">
                <div class="content content-full">
                    <div class="pt-7 pb-5">
                        <div class="position-relative">
                            <h2 class="fw-bold text-center mb-2">
                                Welcome <span class="text-primary">SKS</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row mb-5 g-0 pull-b justify-content-center overflow-hidden">
                        <div class="col-md-6">
                            <!-- Floating Labels Login -->
                            <div class="block block-rounded h-100 mb-0 bg-body-light">
                                <div class="block-content">
                                    <form action="{{ route('loginUser') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Enter your username">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Enter your password">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-arrow-right opacity-50 me-1"></i> Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Floating Labels Login -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Feature: Developer Minded -->
            <!-- Footer -->
            {{-- <footer id="page-footer" class="bg-body-light">
                <div class="content py-5">
                    <div class="row fs-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="fw-semibold"
                                href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                            <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">Codebase
                                5.1</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer> --}}
            <!-- END Footer -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
</body>

</html>
