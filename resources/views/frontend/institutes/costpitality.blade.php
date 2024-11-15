@extends('frontend.layout.layout')

@section('title')
<title> Costpitality - Lebanese Chef's Palace Association</title>
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
            <div class="my-5 my-lg-10 py-10 py-lg-20">
                <!--begin::Institution Logo-->
                <div class="d-flex flex-center animate-on-scroll slide-up">
                    <img src="{{asset('assets/images/costpitality/costpitality-white.png')}}" alt="Costpitality"
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
            <h1 class="fs-2hx primary-color mb-20">Costpitality</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-7">
                <!--begin::Description-->
                <div class="text-start">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">Costpitality is a specialized consultancy firm that provides in-depth analysis and strategic guidance to help restaurants improve their food costs, operational efficiencies, and overall profitability. Founded by a team of seasoned culinary and financial experts, Costpitality works closely with eateries of all sizes - from neighborhood bistros to national chains.</p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">The institute examines every aspect of a restaurant's food supply chain and cost structure. Costpitality's analysts meticulously review vendor contracts, inventory management, menu engineering, portion control, and labor productivity to identify areas for optimization. They then develop customized strategies to streamline operations, reduce waste, and enhance profitability.</p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">In addition to the audit, Costpitality offers ongoing support through monthly cost tracking, menu pricing recommendations, and customized employee training programs. The institute also hosts quarterly industry roundtables, where restaurant owners can share best practices and learn from peers facing similar challenges.</p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">Costpitality's holistic approach has helped numerous restaurants improve their financial performance and achieve sustainable growth. Clients rave about the institute's data-driven insights, practical solutions, and long-term partnership model - all of which are tailored to the unique needs of the hospitality industry.</p>
                </div>
                <!--end::Description-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-5 animate-on-scroll slide-right m-slide-up">
                <img src="{{asset('assets/images/costpitality/costpitality-description-img.jpg')}}" alt="Costpitality"
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