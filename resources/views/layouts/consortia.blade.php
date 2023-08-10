<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Dashboard Consortia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" /> 
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        type="application/json"></script>
    <!--end::Global Stylesheets Bundle-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style>
       
 
            [data-kt-app-layout=dark-sidebar] .app-sidebar {
                background-color: #ffffff!important;
                border-right: 0!important;
            }
            [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item .menu-link .menu-title{
                color:#000!important;
            }
            [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item .menu-link .menu-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item .menu-link .menu-icon .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item .menu-link .menu-icon i{
                color:#000;
            }
            [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item.hover:not(.here)>.menu-link:not(.disabled):not(.active):not(.here) .menu-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item.hover:not(.here)>.menu-link:not(.disabled):not(.active):not(.here) .menu-icon .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item.hover:not(.here)>.menu-link:not(.disabled):not(.active):not(.here) .menu-icon i, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-icon .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-icon i{
                color:#000;
            }
    </style>
    @section('page_css')
    @show
</head><!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">>
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <div id="kt_app_header" class="app-header">
                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                    id="kt_app_header_container">
                    <!--begin::sidebar mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                            id="kt_app_sidebar_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::sidebar mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.html" class="d-lg-none">
                            <img alt="Logo" src="{{ asset('assets/consortia/incent-log.png') }}" class="h-40px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1"
                        id="kt_app_header_wrapper">
                        <!--begin::Navbar-->
                        <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px"
                                data-kt-search-keypress="true" data-kt-search-min-length="2"
                                data-kt-search-enter="enter" data-kt-search-layout="menu"
                                data-kt-search-responsive="true" data-kt-menu-trigger="auto"
                                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start"
                                data-kt-search="true">

                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle"
                                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div class="d-flex ">
                                        <i class="ki-outline ki-magnifier fs-1 fs-1"></i>
                                    </div>
                                </div>
                                <!--end::Tablet and mobile search toggle-->
                                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                <form data-kt-search-element="form"
                                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden">
                                    <!--end::Hidden input-->

                                    <!--begin::Icon-->
                                    <i
                                        class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
                                    <!--end::Icon-->

                                    <!--begin::Input-->
                                    <input type="text"
                                        class="search-input form-control form-control border-0 h-lg-40px  ps-5"
                                        name="search" value="" placeholder="Search..." data-kt-search-element="input">
                                    <!--end::Input-->

                                    <!--begin::Spinner-->
                                    <span
                                        class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                    </span>
                                    <!--end::Spinner-->

                                    <!--begin::Reset-->
                                    <span
                                        class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                        data-kt-search-element="clear">
                                        <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i> </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->

                            </div>
                            <!--end::Search-->
                        </div>
                        <div class="app-navbar flex-shrink-0">

                            <!--begin::Theme mode-->
                            <div class="d-flex align-items-center">
                                <span class="text-white">Login <strong> {{ Auth::user()->name }} </strong></span>
                            </div>
                            <!--end::Theme mode-->

                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-55px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <img src="assets/media/avatars/300-1.jpg" alt="user" />
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5"> {{ Auth::user()->name }} </div>
                                                <!--<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>-->
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"> {{ Auth::user()->email }} </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a class="menu-link px-5" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Sign Out
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                    </div>
                                    <!--end::Menu item-->

                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->

                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header--> <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-4" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="">
                            <img alt="Logo" class="app-sidebar-logo-default m-0 p-0"
                                src="{{ asset('assets/consortia/incent-log.png') }}" width="200px" />
                            <img alt="Logo" src="{{ asset('assets/consortia/logo.png') }}"
                                class="h-40px app-sidebar-logo-minimize" />
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Sidebar toggle-->
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                            <span class="svg-icon svg-icon-2 rotate-180">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Sidebar toggle-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::sidebar menu-->
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                        <!--begin::Menu wrapper-->
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                            data-kt-scroll-save-state="true">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                                data-kt-menu="true" data-kt-menu-expand="false">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{  route('dashboard') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->

                                            <i class="fa-solid fa-gauge-high blue-color fs-1qx lh-0"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{  route('manageusers') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon -->
                                            <i class="fas fa-users blue-color fs-1qx lh-0"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Manage Users</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>


                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{  route('counties') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon-->
                                            <i class="fa-solid fa-chalkboard-user blue-color fs-1qx lh-0"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Counties</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>

                                
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{ route('manage.properties') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon -->
                                            <i class="fa-regular fa-calendar-days blue-color fs-1qx lh-0"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Manage Properties</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{  route('import.properties') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon-->
                                            <i class="fa-solid fa-chalkboard-user blue-color fs-1qx lh-0"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Import Properties</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>


                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{  route('review.properties') }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon-->
                                            <i class="fa-solid fa-chalkboard-user blue-color fs-1qx lh-0"></i>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Review Properties</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>

                                <!--end:Menu item-->

                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::sidebar menu-->
                    <!--begin::Footer-->
                    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                        <a class="btn btn-flex flex-center btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        Sign Out
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                        </a>
                        
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Main-->

                @section('content')
              
                @show
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js')}}"></script> 
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>

 
@section('page_js')
@show
<!--end::Body-->

</html>