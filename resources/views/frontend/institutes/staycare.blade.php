@extends('frontend.layout.layout')

@section('title')
<title> StayCare - Lebanese Chef's Palace Association</title>
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
                    <img src="{{asset('assets/images/staycare/staycare-white.png')}}" alt="STAYCARE"
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
            <h1 class="fs-2hx primary-color mb-20">STAYCARE</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-7">
                <!--begin::Description-->
                <div class="text-start">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">The "Stay Care" committee is distinguished by providing innovative and comprehensive solutions for chefs in the hospitality sector, striving to ensure they receive necessary care and support. Through specialized insurance programs like "Healthy Chef," high-quality healthcare services are provided at reasonable costs, ensuring peace of mind for chefs and their families.
                    </p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">
                        Additionally, the "Hospitality Golden Card" discount cards offer a range of privileges and discounts at restaurants and hotel establishments, promoting positive interaction between sector members and encouraging them to support and encourage one another.
                    </p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">Thanks to the efforts of the "Stay Care" committee, chefs can enjoy a distinguished and stable professional experience, fully supported by the hospitality community and society as a whole.
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