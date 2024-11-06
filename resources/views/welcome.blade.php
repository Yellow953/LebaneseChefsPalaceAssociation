<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lebanese Chef's Palace Association</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="icon" type="favicon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div
                class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-light-bg hero">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
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
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="{{ route('home') }}">
                                    <img alt="Logo" src="{{asset('assets/images/favicon.png')}}"
                                        class="logo-default h-50px h-lg-60px" />
                                    <img alt="Logo" src="{{asset('assets/images/favicon.png')}}"
                                        class="logo-sticky h-50px h-lg-60px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link nav-link-custom active py-3 px-4 px-xxl-6"
                                                href="#home" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">HOME</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link nav-link-custom py-3 px-4 px-xxl-6"
                                                href="#about-us" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">ABOUT US</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link nav-link-custom py-3 px-4 px-xxl-6"
                                                href="#certifications" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">CERTIFICATIONS</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link nav-link-custom py-3 px-4 px-xxl-6"
                                                href="#testchef" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">TESTCHEF</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link nav-link-custom py-3 px-4 px-xxl-6"
                                                href="#institutes" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">INSTITUTES</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                @auth
                                <a href="{{ route('custom_logout') }}" class="btn btn-custom">SIGN OUT</a>
                                @else
                                <a href="{{ route('login') }}" class="btn btn-custom">SIGN IN</a>
                                @endauth
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9">
                    <!--begin::Heading-->
                    <div class="text-start my-5 my-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="hero-text lh-base fs-2x fs-lg-3x mb-15"><span class="hero-text-span">LEBANESE CHEF'S
                                PALACE ASSOCIATION</span>
                            <br />
                            <span class="hero-text-span-2" id="kt_landing_hero_text">قصر الطهاة اللبناني</span>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <a href="#about-us" class="btn btn-custom mx-5">WHO ARE WE?
                        </a>
                        <!--end::Action-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Clients-->
                    <div class="d-flex flex-center flex-wrap position-relative px-5">
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                            <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                            <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                            <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                            <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                            <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                            title="AON - Empower Results">
                            <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
                            <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                            <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                    </div>
                    <!--end::Clients-->
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-light-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->

        <!--begin::About Us Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx primary-color mb-5" id="about-us" data-kt-scroll-offset="{default: 100, lg: 150}">
                        About Us</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-muted-custom fw-bold fs-5">Setting the gold standard for Lebanese cuisine through
                        professional certification, education, and recognition of exceptional culinary talent.
                        <br> Our NGO Lebanese Chef's Palace Association specializes in recruiting employees and
                        evaluating chefs or issuing certificates <br>to build professional high standard profiles.
                        <br>We issue certificates to improve Restaurants' exposure and effectiveness. Our Certificates
                        comply with international food <br>safety measures respecting employee rights and accurate
                        profiling.
                        <br>We protect consumer rights. Our main goal is to enhance and promote healthy and cost
                        efficient hospitality services <br>satisfying Consumers, Employees and Employers
                        <br>by providing international standard certificates that will rectify the market's fluctuating
                        and low standards.
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row w-100 gy-10 mb-md-20">
                    <!--begin::Col-->
                    <div class="col-md-4 px-5 plate-bg h-400px align-items-center">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0 pt-20">
                            <!--begin::Illustration-->
                            <!-- <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="" /> -->
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5 pt-20">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bold primary-color">QUALITY CONTROL</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted-custom">We evaluate food safety standards,
                                kitchen hygiene and service quality through our inspections to ensure excellence in food
                                service establishments.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 plate-bg h-400px px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0 pt-20">
                            <!--begin::Illustration-->
                            <!-- <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="" /> -->
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5 pt-20">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bold primary-color">COST EFFICIENCY</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted-custom">We help restaurants optimize their
                                operations and resources while maintaining quality, ensuring<br>business profitability
                                and fair<br>consumer pricing.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 plate-bg h-400px px-5">
                        <!--begin::Story-->
                        <div class="text-center mb-10 mb-md-0 pt-20">
                            <!--begin::Illustration-->
                            <!-- <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt="" /> -->
                            <!--end::Illustration-->
                            <!--begin::Heading-->
                            <div class="d-flex flex-center mb-5 pt-20">
                                <!--begin::Badge-->
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                                <!--end::Badge-->
                                <!--begin::Title-->
                                <div class="fs-5 fs-lg-3 fw-bold primary-color">MARKET TRANSPARENCY</div>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted-custom">We make pricing
                                information<br>publicly accessible across different establishments to
                                promote<br>informed consumer choices<br>and fair competition.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Story-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin:: Certifications Heading-->
                <div class="text-center mb-10 mb-md-20">
                    <!--begin::Title-->
                    <h3 class="fs-2hx primary-color mb-5" id="certifications"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        Certifications</h3>
                    <!--end::Title-->
                </div>
                <!--end:: Certifications Heading-->
                <!--begin::Certifications slider-->
                <div class="tns tns-default">
                    <!--begin::Slider-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-nav="false" data-tns-items="4" data-tns-center="false" data-tns-dots="false"
                        data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-1.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-2.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-3.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-4.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-5.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-6.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-7.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-8.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-9.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-10.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-11.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-12.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-13.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-14.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-15.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-16.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                            <img src="{{asset('assets/images/certifications/certification-17.jpg')}}"
                                class="card-rounded shadow mh-lg-650px mw-100" alt="" />
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Slider-->
                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Slider button-->
                    <!--begin::Slider button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-3x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Slider button-->
                </div>
                <!--end::Product slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::About Us Section-->

        <!--begin::TestChef Section-->
        <div class="mt-sm-n10">
            <!--begin::Curve top-->
            <div class="landing-curve primary-color-curve">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pb-15 pt-18 achievements-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mt-15 mb-18" id="testchef" data-kt-scroll-offset="{default: 100, lg: 150}">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white fw-bold mb-5 pt-8">Get Your Own Chef Certification</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-5 text-white fw-bold">Take your culinary expertise to the next level
                            <br>with official recognition from Lebanon's premier chef certification body.
                            <br>Join our elite community of certified professionals and showcase your mastery
                            <br>of authentic Lebanese cuisine to restaurants and food lovers worldwide.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::TestChef Certificate-->
                    <div class="d-flex flex-center">
                        <img src="{{asset('assets/images/certifications/testchef-certification.jpg')}}"
                            alt="TestChef Certificate" class="w-50 mb-3">
                    </div>
                    <!--end::TestChef Certificate-->
                    <!--begin::Inspiring Quote-->
                    <div class="fs-2 fw-semibold text-muted text-center mb-3">
                        <span class="fs-1 lh-1 text-gray-700">“</span>The kitchen is a sacred place <br>where secrets
                        are kept, and magic happens
                        <span class="fs-1 lh-1 text-gray-700">“</span>
                    </div>
                    <!--end::Quote-->
                    <!--begin::Author-->
                    <div class="fs-2 fw-semibold text-muted text-center">
                        <a href="#" class="link-primary lighter-primary-color fs-4 fw-bold">Chef Edward Lee,</a>
                        <span class="fs-4 fw-bold text-gray-600">Culinary Expert</span>
                    </div>
                    <!--end::Author-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve primary-color-curve">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::TestChef Section-->

        <!--begin::Institutes Section-->
        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="institutes" data-kt-scroll-offset="{default: 100, lg: 150}">
                        Our Accredited Institutes</h3>
                    <!--end::Title-->
                    <!--begin::Sub-title-->
                    <div class="fs-5 text-muted fw-bold">Our Accredited Institutes are carefully selected centers of
                        excellence across Lebanon
                        <br>each upholding our rigorous standards in culinary education. With 6 certified institutes
                        nationwide,
                        <br>we ensure aspiring chefs receive authentic training and certification in
                        <br>Lebanese cuisine from qualified master instructors.
                    </div>
                    <!--end::Sub-title=-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row g-5 g-lg-10">
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex flex-stack mb-5">
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <img src="{{asset('assets/images/ghc/GHC-white.png')}}"
                                            alt="Global Hospitality Consultant" class="accredited-logo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex flex-stack mb-5">
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <img src="{{asset('assets/images/ghi/GHI-white.png')}}"
                                            alt="Global Hospitality Institute" class="accredited-logo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex flex-stack mb-5">
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <img src="{{asset('assets/images/global-hospitality-events/global-hospitality-events-white.png')}}"
                                            alt="Global Hospitality Events" class="accredited-logo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-lg-10">
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex flex-stack mb-5">
                                <div class="d-flex align-items-center">
                                    <div class=" me-5">
                                        <img src="{{asset('assets/images/golden-book/golden-book-white.png')}}"
                                            class="accredited-logo" alt="Golden Book" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex flex-stack mb-5">
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <img src="{{asset('assets/images/staycare/staycare-white.png')}}" alt="STAYCARE"
                                            class="accredited-logo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex flex-stack mb-5">
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <img src="{{asset('assets/images/costpitality/costpitality-white.png')}}"
                                            alt="Costpitality" class="accredited-logo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Institutes Section-->

        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve primary-color-curve">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="primary-color-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded red-dotted-border white-bg p-9 mb-10 ">
                                <!--begin::Title-->
                                <h2 class="text-dark">Would you need a Custom License?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="#" class="link-footer-card">support@keenthemes.com</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded red-dotted-border p-9 white-bg">
                                <!--begin::Title-->
                                <h2 class="text-dark">How About a Custom Project?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="#" class="link-footer-card text-hover-primary">Click to Get a
                                        Quote</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/faqs"
                                        class="opacity-80 link-footer fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                                        class="opacity-80 link-footer fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos"
                                        class="opacity-80 link-footer fs-5 mb-6">Video Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        class="opacity-80 link-footer fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://devs.keenthemes.com/"
                                        class="opacity-80 link-footer fs-5 mb-6">Support Forum</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/blog"
                                        class="opacity-80 link-footer fs-5">Blog</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="link-footer opacity-80 fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://github.com/KeenthemesHub" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
                                        <span class="opacity-80 link-footer fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://twitter.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="opacity-80 link-footer fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://dribbble.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="opacity-80 link-footer fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2"
                                            alt="" />
                                        <span
                                            class="opacity-80 link-footer fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="red-dotted-top-border"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="{{ route('home') }}">
                                <img alt="Logo" src="{{asset('assets/images/favicon.png')}}" class="h-40px h-md-60px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="{{route('home')}}">&copy;
                                2024 Lebanese Chef's Palace Association</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank"
                                    class="link-footer opacity-80 px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="link-footer opacity-80 px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank"
                                    class="link-footer opacity-80 px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
    </div>
    <!--end::Root-->

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('assets/js/custom/pages/pricing/general.js') }}"></script>
</body>

</html>