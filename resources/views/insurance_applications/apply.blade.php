@extends('auth.app')

@php
$maritial_statuses = Helper::get_insurance_application_maritial_statuses();
$ranks = Helper::get_chefs_ranks();
@endphp

@section('content')
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Body-->
        <div class="d-flex flex-center w-lg-50 p-10" style="margin: auto">
            <!--begin::Card-->
            <div class="card login-card-custom card-insurance rounded-3">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column px-10 py-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column-fluid">
                        <div class="container">
                            <h4 class="fs-2 fs-lg-1 primary-color text-center mt-5">Apply for Insurance</h4>
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST" class="d-flex flex-column">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="fs-5 fs-lg-4 mb-2 primary-color required">Name</label>
                                                    <input type="text" class="form-control input" id="name" name="name" required>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="dob" class="fs-5 fs-lg-4 mb-2 primary-color required">Date Of Birth</label>
                                                    <input type="date" class="form-control input" id="dob" name="dob" required>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="marital_status" class="fs-5 fs-lg-4 mb-2 primary-color required">Marital Status</label>
                                                    <select class="form-control input" id="marital_status" name="marital_status" required>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="number_of_kids" class="fs-5 fs-lg-4 mb-2 primary-color">Number Of Kids</label>
                                                    <input type="number" class="form-control input" id="number_of_kids" name="number_of_kids">
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="health_status" class="fs-5 fs-lg-4 mb-2 primary-color">Health Status</label>
                                                    <select class="form-control input" id="health_status" name="health_status">
                                                        <option value="good">Good</option>
                                                        <option value="poor">Poor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class=" form-group">
                                                    <label for="company_name" class="fs-5 fs-lg-4 mb-2 primary-color d-sm-block d-md-none mt-5">Company Name</label>
                                                    <label for="company_name" class="fs-5 fs-lg-4 mb-2 primary-color d-none d-md-block">Company Name</label>
                                                    <input type="text" class="form-control input" id="company_name" name="company_name">
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="work_location" class="fs-5 fs-lg-4 mb-2 primary-color">Work Location</label>
                                                    <input type="text" class="form-control input" id="work_location" name="work_location">
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="salary" class="fs-5 fs-lg-4 mb-2 primary-color">Salary (in USD)</label>
                                                    <input type="number" class="form-control input" id="salary" name="salary">
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label for="work_description" class="fs-5 fs-lg-4 mb-2 primary-color">Work Description</label>
                                                    <textarea class="form-control input d-sm-block d-md-none" id="work_description" name="work_description" rows="1"></textarea>
                                                    <textarea class="form-control input d-none d-md-block" id="work_description" name="work_description" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row d-flex">
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-custom mt-5 align-self-center align-items-center">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
@endsection