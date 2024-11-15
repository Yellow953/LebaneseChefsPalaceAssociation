@extends('frontend.layout.layout')

@section('title')
<title> GHC - Lebanese Chef's Palace Association</title>
@endsection

@section('hero-bg')
<!--begin::Header Section-->
<div class="mb-0" id="home">
    <!--begin::Wrapper-->
    <div
        class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-light-bg institutes-individual-hero">
        @endsection

        @section('content')
        <!--begin::Landing hero-->
        <div class="d-flex flex-column w-100 min-h-250px min-h-lg-500px px-9">
            <!--begin::Heading-->
            <div class="my-5 my-lg-10 py-5 py-lg-20">
                <!--begin::Institution Logo-->
                <div class="d-flex flex-center animate-on-scroll slide-up">
                    <img src="{{asset('assets/images/ghc/GHC-white.png')}}" alt="Global Hospitality Consultant"
                        class="institutes-img" />
                </div>
                <!--end::Institution Logo-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Landing hero-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Header Section-->

<!--begin::Description Section-->
<div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9">
    <!--begin::Container-->
    <div class="my-5 my-lg-10 py-10 py-lg-20">
        <!--begin::Heading-->
        <div class="d-flex flex-center text-center animate-on-scroll slide-up">
            <h1 class="fs-2hx primary-color mb-20">Global Hospitality Consultant</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-7">
                <!--begin::Description-->
                <div class="text-start m-text-center">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">The "Global Hospitality
                        Consultant" committee is a specialized consulting body in the field of global hospitality,
                        offering a wide range of consulting services to improve and develop services and operations in
                        the hospitality industry. The committee's services include:</p>
                </div>
                <ul>
                    <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                        <span class="fw-bold text-tertiary">Kitchen Operations Consulting:</span> Providing advice
                        and strategies to improve the efficiency and effectiveness of kitchen operations, including
                        work organization, quality improvement, and inventory management.
                    </li>
                    <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                        <span class="fw-bold text-tertiary">Marketing and Promotion Consulting:</span> Offering
                        innovative marketing strategies to increase brand awareness and attract more customers,
                        including the use of social media and launching effective advertising campaigns.
                    </li>
                    <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                        <span class="fw-bold text-tertiary">Space Design Consulting:</span> Providing advice and
                        guidance for designing and improving interior and exterior spaces of restaurants, hotels,
                        and hospitality facilities, ensuring a comfortable and attractive experience for customers.
                    </li>
                </ul>
                <div class="text-start m-text-center">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">
                        The committee aims to support and enhance the hospitality industry in Lebanon by providing
                        professional and specialized solutions and guidance that help hospitality establishments achieve
                        success and excellence.
                    </p>
                </div>
                <!--end::Description-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-5 animate-on-scroll slide-right m-slide-up">
                <img src="{{asset('assets/images/ghc/ghc-description-img.png')}}" alt="Global Hospitality Consultant"
                    class="institutes-description-image" />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Description Section-->
<!--begin::Timeline Section-->
<div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9">
    <!--begin::Container-->
    <div class="my-5 my-lg-10 py-10 py-lg-20">
        <!--begin::Heading-->
        <div class="d-flex flex-center text-center animate-on-scroll slide-up">
            <h1 class="fs-2hx primary-color mb-20">Consultancies</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Timeline-->
        <div class="timeline-vertical">
            <div class="timeline-line"></div>
            <!--begin::Timeline item-->
            <div class="timeline-item left animate-on-scroll slide-left m-slide-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>Consultant</h3>
                </div>
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item right animate-on-scroll slide-right m-slide-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3>Food Blogger</h3>
                </div>
            </div>
            <!--end::Timeline item-->
        </div>
        <!--end::Timeline-->
    </div>
    <!--end::Container-->
</div>
<!--end::Timeline Section-->
@endsection