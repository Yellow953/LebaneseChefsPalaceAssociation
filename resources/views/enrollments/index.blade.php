@extends('layouts.app')

@section('title', 'enrollments')

@php
$statuses = Helper::get_enrollment_statuses();
@endphp

@section('actions')
<a href="{{ route('enrollments.new') }}" class="btn btn-sm fw-bold btn-primary">
    New Enrollment
</a>
<a href="{{ route('enrollments.export') }}" class="btn btn-sm fw-bold btn-primary">
    Export Enrollments
</a>
@endsection

@section('filter')
<!--begin::filter-->
<div class="filter border-0 px-0 px-md-3 py-4">
    <!--begin::Form-->
    <form action="{{ route('enrollments') }}" method="GET" enctype="multipart/form-data" class="form">
        @csrf
        <div class="pt-0 pt-3 px-2 px-md-4">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <!--begin::Input group-->
                <div class="position-relative w-md-400px me-md-2">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="number" class="form-control ps-10" name="id" value="{{ request()->query('id') }}"
                        step="1" min="0" placeholder="Search By ID..." />
                </div>
                <!--end::Input group-->
                <!--begin:Action-->
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary me-5 px-3 py-2 d-flex align-items-center">
                        Search <span class="ml-2"><i class="fas fa-search"></i></span>
                    </button>
                    <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse"
                        href="#kt_advanced_search_form">Advanced Search</a>
                    <button type="reset" class="btn text-danger clear-btn">Clear</button>
                </div>
                <!--end:Action-->
            </div>
            <!--end::Compact form-->
            <!--begin::Advance form-->
            <div class="collapse" id="kt_advanced_search_form">
                <!--begin::Separator-->
                <div class="separator separator-dashed mt-9 mb-6"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-8 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Course</label>
                        <select name="course_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}" {{ request()->query('course_id') == $course->id ?
                                'selected' : '' }}>{{
                                ucwords($course->title) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Chef</label>
                        <select name="chef_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($chefs as $chef)
                            <option value="{{ $chef->id }}" {{ request()->query('chef_id') == $chef->id ?
                                'selected' : '' }}>{{
                                ucwords($chef->title) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-4">
                        <label class="fs-6 form-label fw-bold text-dark">Status</label>
                        <select name="status" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($statuses as $status)
                            <option value="{{ $status }}" {{ request()->query('status') == $status ? 'selected' : ''
                                }}>{{
                                ucwords($status) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-4">
                        <label class="fs-6 form-label fw-bold text-dark">From</label>
                        <input type="date" class="form-control" name="start_date"
                            value="{{ request()->query('start_date') }}" />
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-4">
                        <label class="fs-6 form-label fw-bold text-dark">To</label>
                        <input type="date" class="form-control" name="end_date"
                            value="{{ request()->query('end_date') }}" />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
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
    <!--begin::Tables Widget 10-->
    <div class="card mb-5 mb-xl-8">
        @yield('filter')

        <!--begin::Body-->
        <div class="card-body pt-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle text-center gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="col-1 p-3">ID</th>
                            <th class="col-2 p-3">Course</th>
                            <th class="col-2 p-3">Chef</th>
                            <th class="col-2 p-3">Date</th>
                            <th class="col-2 p-3">Status</th>
                            <th class="col-2 p-3">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @forelse ($enrollments as $enrollment)
                        <tr>
                            <td>
                                <b>{{ $enrollment->id }}</b>
                            </td>
                            <td>
                                <b>{{ ucwords($enrollment->course->title) }}</b>
                            </td>
                            <td>
                                <b>{{ ucwords($enrollment->chef->name) }}</b>
                            </td>
                            <td>
                                Enrolled At: {{ $enrollment->enrolled_at }} <br>
                                {{ $enrollment->completed_at ? 'Completed At: ' . $enrollment->completed_at : '' }}
                            </td>
                            <td>
                                {{ ucwords($enrollment->status) }}
                            </td>
                            <td class="d-flex justify-content-end border-0">
                                <a href="{{ route('enrollments.edit', $enrollment->id) }}"
                                    class="btn btn-icon btn-warning btn-sm me-1">
                                    <i class="bi bi-pen-fill"></i>
                                </a>
                                @if($enrollment->can_delete())
                                <a href="{{ route('enrollments.destroy', $enrollment->id) }}"
                                    class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip"
                                    data-original-title="Delete Course Enrollment">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="6">No Enrollments Yet ...</th>
                        </tr>
                        @endforelse
                    </tbody>
                    <!--end::Table body-->

                    <tfoot>
                        <tr>
                            <th colspan="6">
                                {{ $enrollments->appends(['id' => request()->query('id'), 'course_id' =>
                                request()->query('course_id'), 'chef_id' => request()->query('chef_id'), 'start_date' =>
                                request()->query('start_date'), 'end_date' => request()->query('end_date'), 'status'
                                =>request()->query('status')])->links() }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 10-->
</div>
@endsection