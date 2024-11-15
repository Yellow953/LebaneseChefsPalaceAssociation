@extends('frontend.layout.layout')

@section('title')
<title> Institutes - Lebanese Chef's Palace Association</title>
@endsection

@section('hero-bg')
<!--begin::Header Section-->
<div class="mb-0" id="about">
    <!--begin::Wrapper-->
    <div
        class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-light-bg institutes-hero">
        @endsection

        @section('content')
        <!--begin::About Hero-->
        <div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9 mb-20">
            <!--begin::Heading-->
            <div class="text-start my-5 my-lg-10 py-10 py-lg-20 m-text-center">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-12 col-lg-5 animate-on-scroll slide-left">
                        <!--begin::Title-->
                        <h1 class="hero-text lh-base fs-4x fs-lg-4x mb-15 pt-20"><span class="hero-text-span">OUR INSTITUTES</span>
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-12 col-lg-7 animate-on-scroll slide-right">
                        <!--begin::Description-->
                        <p class="lh-base fs-2 fs-lg-4 mb-15 me-5 m-px-2"><span class="about-hero-text">Our Accredited Institutes are carefully selected centers of
                                excellence across Lebanon
                                <br>each upholding our rigorous standards in culinary education. With 6 certified institutes
                                nationwide,
                                <br>we ensure aspiring chefs receive authentic training and certification in
                                <br>Lebanese cuisine from qualified master instructors.</span>
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

<!--begin::Institutes Section-->
<div class="py-10 py-lg-20">
    <!--begin::Container-->
    <div class="container">
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