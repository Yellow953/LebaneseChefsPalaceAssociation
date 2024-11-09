@extends('frontend.layout.layout')

@section('title')
<title>About Us - Lebanese Chef's Palace Association</title>
@endsection

@section('hero-bg')
<!--begin::Header Section-->
<div class="mb-0" id="about">
    <!--begin::Wrapper-->
    <div
        class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-light-bg about-hero">
        @endsection

        @section('content')
        <!--begin::About Hero-->
        <div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9 mb-20">
            <!--begin::Heading-->
            <div class="text-start my-5 my-lg-10 py-10 py-lg-20 m-text-center">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-4 col-lg-4 animate-on-scroll slide-left">
                        <!--begin::Title-->
                        <h1 class="hero-text lh-base fs-4x fs-lg-5x mb-15 pt-20"><span class="hero-text-span">ABOUT US</span>
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-8 col-lg-8 animate-on-scroll slide-right">
                        <!--begin::Description-->
                        <p class="lh-base fs-3 fs-lg-4 mb-15 me-5"><span class="about-hero-text">Our NGO Lebanese Chef's Palace Association specializes in recruiting employees and
                                evaluating chefs or issuing certificates to build professional high standard profiles. We issue certificates to improve Restaurants' exposure and effectiveness. Our Certificates
                                comply with international food safety measures respecting employee rights and accurate
                                profiling. We protect consumer rights. Our main goal is to enhance and promote healthy and cost
                                efficient hospitality services satisfying Consumers, Employees and Employers by providing international standard certificates.</span>
                        </p>
                        <!--end::Description-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::About Hero-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!--begin::Values Section-->
<div class="mb-n10 mb-lg-n20 z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17 animate-on-scroll slide-up">
            <!--begin::Title-->
            <h3 class="fs-2hx primary-color mb-5 mt-10" id="about-us" data-kt-scroll-offset="{default: 100, lg: 150}">
                OUR VALUES</h3>
            <!--end::Title-->
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row w-100 gy-10 mb-md-20">
            <!--begin::Col-->
            <div class="col-md-4 px-5 plate-bg h-400px align-items-center animate-on-scroll slide-left delay-400">
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
                    <div class="fw-semibold fs-6 fs-lg-4 text-muted-custom m-px-2">We evaluate food safety standards,
                        kitchen hygiene and service quality through our inspections to ensure excellence in food
                        service establishments.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Story-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-4 plate-bg h-400px px-5 animate-on-scroll slide-left delay-200">
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
                    <div class="fw-semibold fs-6 fs-lg-4 text-muted-custom m-px-2">We help restaurants optimize their
                        operations and resources while maintaining quality, ensuring<br>business profitability
                        and fair<br>consumer pricing.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Story-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-4 plate-bg h-400px px-5 animate-on-scroll slide-left">
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
                    <div class="fw-semibold fs-6 fs-lg-4 text-muted-custom m-px-2">We make pricing
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
        <div class="text-center mb-10 mb-md-20 animate-on-scroll slide-up">
            <!--begin::Title-->
            <h3 class="fs-2hx primary-color mb-5" id="certifications"
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
<!--end::Values Section-->
@endsection