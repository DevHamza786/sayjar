<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('panel/assets/images/side-logo.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('panel/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('panel/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('panel/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    @yield('inner-pagecss')
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo py-8" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center">
                        <img alt="Logo" src="{{ asset('panel/assets/images/side-logo.png') }}"
                            class="h-45px logo" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper"
                        data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                            id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item py-2">
                                <a class="menu-link @if (!empty($page_slug) && $page_slug == 'dashboard') active @endif menu-center"
                                    href="{{ route('dashboard') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <img src="{{ asset('panel/assets/images/dashboard.png') }}" width="32" height="32"/>
                                    </span>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>
                            @hasrole('admin')
                                <div class="menu-item py-2">
                                    <a class="menu-link @if (!empty($page_slug) && $page_slug == 'type') active @endif menu-center"
                                        href="{{ route('type') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <img src="{{ asset('panel/assets/images/types.png') }}" width="52" height="52"/>
                                        </span>
                                        <span class="menu-title">Types</span>
                                    </a>
                                </div>
                                <div class="menu-item py-2">
                                    <a class="menu-link @if (!empty($page_slug) && $page_slug == 'category') active @endif menu-center"
                                        href="{{ route('category') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <img src="{{ asset('panel/assets/images/cat.png') }}" width="32" height="32"/>
                                        </span>
                                        <span class="menu-title">Category</span>
                                    </a>
                                </div>
                                <div class="menu-item py-2">
                                    <a class="menu-link @if (!empty($page_slug) && $page_slug == 'models') active @endif menu-center"
                                        href="{{ route('models') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <img src="{{ asset('panel/assets/images/model.png') }}" width="32" height="32"/>
                                        </span>
                                        <span class="menu-title">Model</span>
                                    </a>
                                </div>
                                <div class="menu-item py-2">
                                    <a class="menu-link @if (!empty($page_slug) && $page_slug == 'users') active @endif menu-center"
                                        href="{{ route('users') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <img src="{{ asset('panel/assets/images/users.png') }}" width="32" height="32"/>
                                        </span>
                                        <span class="menu-title">Users</span>
                                    </a>
                                </div>
                                <div class="menu-item py-2">
                                    <a class="menu-link @if (!empty($page_slug) && $page_slug == 'ad-post') active @endif menu-center"
                                        href="{{ route('adpost.admin') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <img src="{{ asset('panel/assets/images/ads.png') }}" width="32" height="32"/>
                                        </span>
                                        <span class="menu-title">AdPost</span>
                                    </a>
                                </div>
                            @endhasrole
                            @hasrole('customer')
                                <div class="menu-item py-2">
                                    <a class="menu-link @if (!empty($page_slug) && $page_slug == 'ad-post') active @endif menu-center"
                                        href="{{ route('ad-post') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right">
                                        <span class="menu-icon me-0">
                                            <img src="{{ asset('panel/assets/images/ads.png') }}" width="32" height="32"/>
                                        </span>
                                        <span class="menu-title">AdPost</span>
                                    </a>
                                </div>
                            @endhasrole
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg')}}-->
                                <span class="svg-icon svg-icon-2x mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="../../demo6/dist/index.html" class="d-lg-none">
                                <img alt="Logo" src="{{ asset('panel/assets/media/logos/logo-demo6.svg') }}"
                                    class="h-30px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between flex-lg-grow-1">
                            <!--begin::Topbar-->
                            <a href="{{ route('home') }}" class="btn btn-warning" target="_blank">Home</a>
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3"
                                        id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end">
                                                <img alt="Logo" src="{{ (isset(auth()->user()->avatar)) ? asset('storage/' . auth()->user()->avatar) : asset('panel/assets/media/avatars/150-26.jpg')  }}" />
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-375px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="{{ (isset(auth()->user()->avatar)) ? asset('storage/' . auth()->user()->avatar) : asset('panel/assets/media/avatars/150-26.jpg')  }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                                            {{ auth()->user()->name }}</div>
                                                        <a href="mailto:{{ auth()->user()->email }}"
                                                            class="fw-bold text-muted text-hover-primary fs-7" style="word-break: break-word;">{{ auth()->user()->email }}</a>
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
                                                <a href="{{ route('profile') }}"
                                                    class="menu-link px-5">My Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <form method="POST" action="{{ route('logout') }}"
                                                    class="menu-link p-0">
                                                    @csrf
                                                    <button class="btn menu-link" type="submit"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">Sign
                                                        Out</button>
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
                                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                            id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg')}}-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2023©</span>
                            <a href="{{ route('home') }}" target="_blank"
                                class="text-gray-800 text-hover-primary">Sayjar</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg')}}-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                    rx="1" transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('panel/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('panel/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('panel/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('panel/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('panel/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('panel/assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('panel/assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    @yield('script_page')
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
