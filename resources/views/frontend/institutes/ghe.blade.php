@extends('frontend.layout.layout')

@section('title')
<title> GHE - Lebanese Chef's Palace Association</title>
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
        <div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9">
            <!--begin::Heading-->
            <div class="my-5 my-lg-10 py-10 py-lg-20">
                <!--begin::Institution Logo-->
                <div class="d-flex flex-center animate-on-scroll slide-up">
                    <img src="{{asset('assets/images/global-hospitality-events/global-hospitality-events-white.png')}}" alt="Global Hospitality Events"
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
            <h1 class="fs-2hx primary-color mb-20">Global Hospitality Events</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-7">
                <!--begin::Description-->
                <div class="text-start">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">The "Global Hospitality Event" committee is the body responsible for organizing and hosting culinary festivals and cooking competitions in Lebanon and abroad, with the aim of promoting Lebanese culinary culture globally.</p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">
                        These festivals and competitions are exceptional occasions that bring together creative and professional chefs from around the world to showcase their skills and innovations in Lebanese culinary arts.
                    </p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">Additionally, these events provide an opportunity to learn about new techniques and trends in the culinary world, and exchange experiences and knowledge among participants.
                    </p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">"Global Hospitality Event" is considered an important platform for enhancing cultural interaction and exchange between Lebanon and the rest of the world, and strengthening Lebanon's reputation as a distinguished destination for food tourism and hospitality.
                    </p>
                </div>
                <!--end::Description-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-5 animate-on-scroll slide-right">
                <img src="{{asset('assets/images/ghi/ghi-description-img.png')}}" alt="Golden Hospitality Institute" class="institutes-description-image" />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Description Section-->
@endsection