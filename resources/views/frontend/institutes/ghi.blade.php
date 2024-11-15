@extends('frontend.layout.layout')

@section('title')
<title> GHI - Lebanese Chef's Palace Association</title>
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
                    <img src="{{asset('assets/images/ghi/GHI-white.png')}}" alt="Global Hospitality Institute"
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
            <h1 class="fs-2hx primary-color mb-20">Global Hospitality Institute</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-7">
                <!--begin::Description-->
                <div class="text-start">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">The "Global Hospitality
                        Institute" committee specializes in training and qualifying new personnel in several important
                        areas of the hospitality industry.
                        The committee offers distinguished training programs including:</p>
                    <ul>
                        <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                            <span class="fw-bold text-tertiary">Training in "Food Blogging":</span> Where participants
                            learn how to create distinctive and engaging content about food and hospitality to enhance
                            audience engagement.
                        </li>
                        <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                            <span class="fw-bold text-tertiary">Restaurant Management Training:</span> This training
                            covers aspects of restaurant management including planning, organization, marketing, and
                            human resource management.
                        </li>
                        <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                            <span class="fw-bold text-tertiary">Life Skills Courses:</span> Aimed at developing
                            participants' communication, leadership, problem-solving, and time management skills.
                        </li>
                        <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                            <span class="fw-bold text-tertiary">Food Safety Courses:</span> Focuses on hygiene
                            procedures and food safety in kitchens and restaurants.
                        </li>
                        <li class="fs-3 text-muted-custom lh-lg animate-on-scroll slide-left">
                            <span class="fw-bold text-tertiary">Learning "Kitchen English":</span> Where participants
                            learn essential vocabulary and phrases used in kitchen environments in English.
                        </li>
                    </ul>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">
                        Additionally, the committee offers the "Test Chef" examination, which is considered an important
                        indicator of chefs' experience and professionalism, proving their competency and skills in the
                        kitchen. This certification is considered an important reference for evaluating a chef's rank
                        and their true standing in the culinary industry.
                    </p>
                </div>
                <!--end::Description-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-5 animate-on-scroll slide-right">
                <img src="{{asset('assets/images/ghi/ghi-description-img.png')}}" alt="Golden Hospitality Institute"
                    class="institutes-description-image" />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Description Section-->
@endsection