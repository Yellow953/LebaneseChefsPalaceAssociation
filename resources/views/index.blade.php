@extends('layouts.app')

@section('title', 'app')

@section('content')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Card widget 19-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-6">
                            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid">
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 19-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Engage widget 9-->
                    <div class="card h-lg-100 bg-primary">
                        <!--begin::Body-->
                        <div class="card-body">
                            <h1 class="text-center mt-1 mb-10 heading">Lebanese Chefs Palace</h1>
                            <p class="text-center text-white paragraph">
                                The Lebanese Chef's Palace Association (LCPA) operates five specialized committees
                                focused on quality control, cost efficiency, public transparency, and fair pricing in
                                hospitality. Serving both local and international markets, LCPA recruits and evaluates
                                chefs, issuing certificates that strengthen professional profiles and meet global food
                                safety standards. These certificates support restaurant visibility, enhance efficiency,
                                and protect consumer rights. By establishing standards and monitoring industry
                                practices, LCPA aims to improve healthy, cost-efficient hospitality services,
                                benefitting consumers, employees, and employers.
                            </p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 9-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!-- start::Col -->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100 bg-primary">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3 d-flex justify-content-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed white;">
                                <i class="bi bi-person-fill text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body p-2 mb-3">
                            <!--begin::Info-->
                            <div class="text-center">
                                <div class="fs-4hx text-white fw-bold" data-kt-countup="true"
                                    data-kt-countup-value="{{ $chefs_count }}" data-kt-countup-prefix="">
                                    {{ $chefs_count }}
                                </div>
                                <div class="fw-bold fs-6 text-white">
                                    Chefs
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->

                <!-- start::Col -->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100 bg-primary">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3 d-flex justify-content-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed white;">
                                <i class="bi bi-building-fill text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body p-2 mb-3">
                            <!--begin::Info-->
                            <div class="text-center">
                                <div class="fs-4hx text-white fw-bold" data-kt-countup="true"
                                    data-kt-countup-value="{{ $restaurants_count }}" data-kt-countup-prefix="">
                                    {{ $restaurants_count }}
                                </div>
                                <div class="fw-bold fs-6 text-white">
                                    Restaurants
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->

                <!-- start::Col -->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100 bg-primary">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3 d-flex justify-content-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed white;">
                                <i class="bi bi-person-fill text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body p-2 mb-3">
                            <!--begin::Info-->
                            <div class="text-center">
                                <div class="fs-4hx text-white fw-bold" data-kt-countup="true"
                                    data-kt-countup-value="{{ $users_count }}" data-kt-countup-prefix="">
                                    {{ $users_count }}
                                </div>
                                <div class="fw-bold fs-6 text-white">
                                    Users
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->

                <!-- start::Col -->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100 bg-primary">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3 d-flex justify-content-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed white;">
                                <i class="bi bi-file-text-fill text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body p-2 mb-3">
                            <!--begin::Info-->
                            <div class="text-center">
                                <div class="fs-4hx text-white fw-bold" data-kt-countup="true"
                                    data-kt-countup-value="{{ $logs_count }}" data-kt-countup-prefix="">
                                    {{ $logs_count }}
                                </div>
                                <div class="fw-bold fs-6 text-white">
                                    Logs
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection