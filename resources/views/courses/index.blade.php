@extends('layouts.app')

@section('title', 'courses')

@php
$levels = Helper::get_course_levels();
$statuses = Helper::get_course_statuses();
@endphp

@section('actions')
<a href="{{ route('courses.new') }}" class="btn btn-sm fw-bold btn-primary">
    New Course
</a>
<a href="{{ route('courses.export') }}" class="btn btn-sm fw-bold btn-primary">
    Export Courses
</a>
@endsection

@section('filter')
<!--begin::filter-->
<div class="filter border-0 px-0 px-md-3 py-4">
    <!--begin::Form-->
    <form action="{{ route('courses') }}" method="GET" enctype="multipart/form-data" class="form">
        @csrf
        <div class="pt-0 pt-3 px-2 px-md-4">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <div class="position-relative w-md-400px me-md-2">
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control ps-10" name="title" value="{{ request()->query('title') }}"
                        placeholder="Search By Title..." />
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
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Status</label>
                        <select name="status" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($statuses as $status)
                            <option value="{{ $status }}" {{ request()->query('status') == $status ? 'selected' : '' }}>
                                {{ ucfirst($status) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Level</label>
                        <select name="level" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($levels as $level)
                            <option value="{{ $level }}" {{ request()->query('level') == $level ? 'selected' : '' }}>
                                {{ ucfirst($level) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Location</label>
                        <input type="text" class="form-control" name="location"
                            value="{{ request()->query('location') }}" placeholder="Enter Location..." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Duration</label>
                        <input type="text" class="form-control" name="duration"
                            value="{{ request()->query('duration') }}" placeholder="Enter Duration..." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Taught By</label>
                        <input type="text" class="form-control" name="taught_by"
                            value="{{ request()->query('taught_by') }}" placeholder="Enter Taugth By..." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Description</label>
                        <input type="text" class="form-control" name="description"
                            value="{{ request()->query('description') }}" placeholder="Enter Description..." />
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
                            <th class="col-2 p-3">Course</th>
                            <th class="col-2 p-3">Teacher</th>
                            <th class="col-2 p-3">Status</th>
                            <th class="col-2 p-3">Info</th>
                            <th class="col-2 p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                        <tr>
                            <td>{{ ucwords($course->title) }}</td>
                            <td>{{ ucwords($course->taught_by) }}</td>
                            <td>
                                <span
                                    class="badge bg-{{ $course->status == 'active' ? 'success' : ($course->status == 'expired' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($course->status) }}
                                </span>
                            </td>
                            <td>
                                Duration: {{$course->duration}} <br>
                                Level: {{$course->level}} <br>
                                Fee: {{$course->fee}}
                            </td>
                            <td class="d-flex justify-content-end border-0">
                                <a href="{{ route('courses.edit', $course->id) }}"
                                    class="btn btn-icon btn-warning btn-sm me-1">
                                    <i class="bi bi-pen-fill"></i>
                                </a>
                                @if ($course->can_delete())
                                <a href="{{ route('courses.destroy', $course->id) }}"
                                    class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Courses Found...</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">{{ $courses->appends(['title' => request()->query('title'), 'taught_by' =>
                                request()->query('taught_by'), 'status' => request()->query('status'), 'description' =>
                                request()->query('description'), 'duration' => request()->query('duration'),
                                'level' => request()->query('level'), 'location' =>
                                request()->query('location')])->links() }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection