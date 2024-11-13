@extends('frontend.layout.layout')

@section('title')
<title>Lebanese Chef's Palace Association</title>
@endsection

@section('hero-bg')
<!--begin::Header Section-->
<div class="mb-0" id="home">
    <!--begin::Wrapper-->
    <div
        class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-light-bg landing-hero">
        @endsection

        @section('content')
        <!--begin::Landing hero-->
        <div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9">
            <!--begin::Heading-->
            <div class="text-start my-5 my-lg-10 py-10 py-lg-20 m-text-center">
                <!--begin::Title-->
                <h1 class="hero-text lh-base fs-2x fs-lg-3x mb-15"><span class="hero-text-span animate-on-scroll slide-left">LEBANESE CHEF'S
                        PALACE ASSOCIATION</span>
                    <br />
                    <span class="hero-text-span-2 animate-on-scroll slide-left delay-200" id="kt_landing_hero_text">قصر الطهاة اللبناني</span>
                </h1>
                <!--end::Title-->
                <!--begin::Action-->
                <a href="{{route('about')}}" class="btn btn-custom mx-5 animate-on-scroll slide-left delay-400">WHO ARE WE?
                </a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Landing hero-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!--begin::About Us Section-->
<div class="mb-n10 mb-lg-n20 mt-10 mt-lg-20 z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin:: Certifications Heading-->
        <div class="text-center my-10 mb-md-20 animate-on-scroll slide-up">
            <!--begin::Title-->
            <h3 class="fs-2hx primary-color my-5" id="certifications"
                data-kt-scroll-offset="{default: 100, lg: 150}">
                Certifications</h3>
            <!--end::Title-->
        </div>
        <!--end:: Certifications Heading-->
        <!--begin::Certifications slider-->
        <div class="tns tns-default animate-on-scroll slide-up">
            <!--begin::Slider-->
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                data-tns-nav="false" data-tns-items="4" data-tns-center="false" data-tns-dots="false"
                data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1" class="m-hidden">
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
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                data-tns-nav="false" data-tns-items="2" data-tns-center="false" data-tns-dots="false"
                data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1" class="desktop-hidden">
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
            <div class="text-center mt-5 mt-lg-15 mb-10 mb-lg-20" id="testchef" data-kt-scroll-offset="{default: 100, lg: 150}">
                <!--begin::Title-->
                <h3 class="fs-2hx text-tertiary text-shadow-dark fw-bold mb-5 pt-8 animate-on-scroll slide-up">Get Your Own Chef Certification</h3>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-5 text-white fw-bold m-px-2 animate-on-scroll slide-up">Take your culinary expertise to the next level
                    <br>with official recognition from Lebanon's premier chef certification body.
                    <br>Join our elite community of certified professionals and showcase your mastery
                    <br>of authentic Lebanese cuisine to restaurants and food lovers worldwide.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::TestChef Certificate-->
            <div class="d-flex flex-center animate-on-scroll slide-up">
                <img src="{{asset('assets/images/certifications/testchef-certification.jpg')}}"
                    alt="TestChef Certificate" class="w-50 mb-3 mw-60">
            </div>
            <!--end::TestChef Certificate-->
            <!--begin::Inspiring Quote-->
            <div class="fs-2 fw-semibold text-muted text-center mb-3 animate-on-scroll fade-in">
                <span class="fs-1 lh-1 text-gray-700">“</span>The kitchen is a sacred place <br>where secrets
                are kept, and magic happens
                <span class="fs-1 lh-1 text-gray-700">“</span>
            </div>
            <!--end::Quote-->
            <!--begin::Author-->
            <div class="fs-2 fw-semibold text-muted text-center animate-on-scroll fade-in">
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
            <h3 class="fs-2hx primary-color mb-5 animate-on-scroll slide-up" id="institutes" data-kt-scroll-offset="{default: 100, lg: 150}">
                Our Accredited Institutes</h3>
            <!--end::Title-->
            <!--begin::Sub-title-->
            <div class="fs-5 text-muted fw-bold animate-on-scroll slide-up">Our Accredited Institutes are carefully selected centers of
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
                    <div class="d-flex flex-stack mb-5 justify-content-center">
                        <div class="d-flex align-items-center">
                            <div class="me-5 animate-on-scroll slide-up">
                                <a href="{{route('ghc')}}">
                                    <img src="{{asset('assets/images/ghc/GHC-white.png')}}"
                                        alt="Global Hospitality Consultant" class="accredited-logo institutes-link" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-4">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex flex-stack mb-5 justify-content-center">
                        <div class="d-flex align-items-center">
                            <div class="me-5 animate-on-scroll slide-up">
                                <a href="{{route('ghi')}}">
                                    <img src="{{asset('assets/images/ghi/GHI-white.png')}}"
                                        alt="Global Hospitality Institute" class="accredited-logo institutes-link" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-4">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex flex-stack mb-5 justify-content-center">
                        <div class="d-flex align-items-center">
                            <div class="me-5 animate-on-scroll slide-up">
                                <a href="{{route('ghe')}}">
                                    <img src="{{asset('assets/images/global-hospitality-events/global-hospitality-events-white.png')}}"
                                        alt="Global Hospitality Events" class="accredited-logo institutes-link" />
                                </a>
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
                    <div class="d-flex flex-stack mb-5 justify-content-center">
                        <div class="d-flex align-items-center">
                            <div class=" me-5 animate-on-scroll slide-up">
                                <a href="{{route('golden_book')}}">
                                    <img src="{{asset('assets/images/golden-book/golden-book-white.png')}}"
                                        class="accredited-logo institutes-link" alt="Golden Book" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-4">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex flex-stack mb-5 justify-content-center">
                        <div class="d-flex align-items-center">
                            <div class="me-5 animate-on-scroll slide-up">
                                <a href="{{route('staycare')}}">
                                    <img src="{{asset('assets/images/staycare/staycare-white.png')}}" alt="STAYCARE"
                                        class="accredited-logo institutes-link" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-4">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex flex-stack mb-5 justify-content-center">
                        <div class="d-flex align-items-center">
                            <div class="me-5 animate-on-scroll slide-up">
                                <a href="{{route('costpitality')}}">
                                    <img src="{{asset('assets/images/costpitality/costpitality-white.png')}}"
                                        alt="Costpitality" class="accredited-logo institutes-link" />
                                </a>
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
@endsection