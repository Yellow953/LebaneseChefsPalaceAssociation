@extends('frontend.layout.layout')

@section('title')
<title> Golden Book - Lebanese Chef's Palace Association</title>
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
                    <img src="{{asset('assets/images/golden-book/golden-book-white.png')}}" alt="Golden Book"
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
            <h1 class="fs-2hx primary-color mb-20">Golden Book</h1>
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-7">
                <!--begin::Description-->
                <div class="text-start">
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">The "Golden Book" committee represents a specialized platform aimed at organizing and honoring creativity and excellence in Lebanese cuisine. Its mission is manifested in highlighting creative chefs and young talents in the hospitality industry, and honoring them by including their names and achievements in the "Golden Book."</p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">
                        The committee seeks to enhance Lebanon's reputation as a culinary and hospitality tourism destination globally by highlighting the country's rich and diverse food heritage, and showcasing various famous Lebanese dishes and recipes.
                    </p>
                    <p class="fs-3 fw-bold text-tertiary lh-lg animate-on-scroll slide-up">As a prestigious committee, "Golden Book" works seriously to encourage chefs and restaurants to achieve the highest standards of quality and innovation in Lebanese culinary industry, and to provide unique and unforgettable experiences for customers.
                    </p>
                </div>
                <!--end::Description-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-5 animate-on-scroll slide-right m-slide-up">
                <img src="{{asset('assets/images/golden-book/golden-book-description-img.jpg')}}" alt="Golden Book" class="institutes-description-image" />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Description Section-->
@endsection