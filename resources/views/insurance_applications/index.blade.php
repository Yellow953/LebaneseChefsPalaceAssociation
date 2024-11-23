@extends('layouts.app')

@section('title', 'insurance_applications')

@php
$maritial_statuses = Helper::get_insurance_application_maritial_statuses();
$ranks = Helper::get_chefs_ranks();
@endphp

@section('actions')
<a href="{{ route('insurance_applications.new') }}" class="btn btn-sm fw-bold btn-primary">
    New Insurance Application
</a>
@endsection

@section('filter')
<!--begin::filter-->
<div class="filter border-0 px-0 px-md-3 py-4">
    <!--begin::Form-->
    <form action="{{ route('insurance_applications') }}" method="GET" enctype="multipart/form-data" class="form">
        @csrf
        <div class="pt-0 pt-3 px-2 px-md-4">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <div class="position-relative w-md-400px me-md-2">
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="number" class="form-control ps-10" name="id" value="{{ request()->query('id') }}"
                        placeholder="Search By ID..." />
                </div>
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary me-5 px-3 py-2 d-flex align-items-center">
                        Search <span class="ml-2"><i class="fas fa-search"></i></span>
                    </button>
                    <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse"
                        href="#kt_advanced_search_form">Advanced Search</a>
                    <button type="reset" class="btn text-danger clear-btn">Clear</button>
                </div>
            </div>
            <!--end::Compact form-->
            <!--begin::Advance form-->
            <div class="collapse" id="kt_advanced_search_form">
                <div class="separator separator-dashed mt-9 mb-6"></div>
                <div class="row g-8 mb-8">
                    <div class="col-md-12">
                        <label class="fs-6 form-label fw-bold text-dark">Insurance Type</label>
                        <select name="insurance_type_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($insuranceTypes as $type)
                            <option value="{{ $type->id }}" {{ request()->query('insurance_type_id') == $type->id ?
                                'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ request()->query('name') }}"
                            placeholder="Search By Name...." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" value="{{ request()->query('phone') }}"
                            placeholder="Search By Phone Number...." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ request()->query('address') }}"
                            placeholder="Search By Address...." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Rank</label>
                        <select name="type" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($ranks as $rank)
                            <option value="{{ $rank }}" {{ request()->query('rank') == $rank ? 'selected' : '' }}>{{
                                ucwords($rank) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" value="{{ request()->query('dob') }}" />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Maritial Status</label>
                        <select name="maritial_status" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($maritial_statuses as $maritial_status)
                            <option value="{{ $maritial_status }}" {{ request()->query('maritial_status') ==
                                $maritial_status ? 'selected' : '' }}>
                                {{ ucfirst($maritial_status) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Health Status</label>
                        <input type="text" class="form-control" name="health_status"
                            value="{{ request()->query('health_status') }}" placeholder="Search By Health Status...." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Company Name</label>
                        <input type="text" class="form-control" name="company_name"
                            value="{{ request()->query('company_name') }}" placeholder="Search By Company Name...." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Work Location</label>
                        <input type="text" class="form-control" name="work_location"
                            value="{{ request()->query('work_location') }}" placeholder="Search By Work Location...." />
                    </div>
                    <div class="col-md-12">
                        <label class="fs-6 form-label fw-bold text-dark">Work Description</label>
                        <input type="text" class="form-control" name="work_description"
                            value="{{ request()->query('work_description') }}"
                            placeholder="Search By Work Description...." />
                    </div>
                </div>
            </div>
            <!--end::Advance form-->
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::filter-->
@endsection

@section('content')
<div class="container">
    <div class="card mb-5 mb-xl-8">
        @yield('filter')

        <div class="card-body pt-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle text-center gs-0 gy-4">
                    <thead>
                        <tr>
                            <th class="col-2 p-3">ID</th>
                            <th class="col-2 p-3">Type</th>
                            <th class="col-2 p-3">Applier</th>
                            <th class="col-2 p-3">Work</th>
                            <th class="col-2 p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($insurance_applications as $insurance_application)
                        <tr>
                            <td><b>{{ $insurance_application->id }}</b></td>
                            <td><b>{{ ucwords($insurance_application->insuranceType->name) }}</b></td>
                            <td>
                                <b>Name: </b>{{ ucwords($insurance_application->name) }} <br>
                                Phone Number: {{ $insurance_application->phone }} <br>
                                Address: {{ $insurance_application->address }} <br>
                                Rank: {{ ucwords($insurance_application->rank) }} <br>
                                Date Of Birth: {{ $insurance_application->dob }} <br>
                                Maritial Status: {{ $insurance_application->maritial_status }} <br>
                                {{ $insurance_application->number_of_kids ? 'Number Of Kids: ' .
                                $insurance_application->number_of_kids
                                : '' }} <br>
                                {{ $insurance_application->health_status ? 'Health Status: ' .
                                Str::limit($insurance_application->health_status, 50)
                                : '' }}
                            </td>
                            <td>
                                <b>Company Name: </b>{{ ucwords($insurance_application->company_name) }} <br>
                                {{ $insurance_application->work_location ? 'Work Location: ' .
                                $insurance_application->work_location
                                : '' }} <br>
                                {{ $insurance_application->salary ? 'Salary: ' .
                                number_format($insurance_application->salary, 2)
                                : '' }} <br>
                                {{ $insurance_application->work_description ? 'Work Description: ' .
                                Str::limit($insurance_application->work_description, 50)
                                : '' }}
                            </td>
                            <td class="d-flex justify-content-end border-0">
                                <a href="{{ route('insurance_applications.edit', $insurance_application->id) }}"
                                    class="btn btn-icon btn-warning btn-sm me-1">
                                    <i class="bi bi-pen-fill"></i>
                                </a>
                                @if ($insurance_application->can_delete())
                                <a href="{{ route('insurance_applications.approve', $insurance_application->id) }}"
                                    class="btn btn-icon btn-success btn-sm me-1">
                                    <i class="bi bi-check-lg"></i>
                                </a>
                                <a href="{{ route('insurance_applications.destroy', $insurance_application->id) }}"
                                    class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Insurance Applications Found...</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">{{ $insurance_applications->appends(['id' => request()->query('id'),
                                'insurance_type_id' => request()->query('insurance_type_id'), 'name' =>
                                request()->query('name'), 'phone' => request()->query('phone'),'address' =>
                                request()->query('address'), 'rank' => request()->query('rank'), 'dob' =>
                                request()->query('dob'), 'maritial_status' => request()->query('maritial_status'),
                                'company_name' => request()->query('company_name'), 'health_status' =>
                                request()->query('health_status'),'work_location' => request()->query('work_location'),
                                'work_description' => request()->query('work_description')])->links() }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection