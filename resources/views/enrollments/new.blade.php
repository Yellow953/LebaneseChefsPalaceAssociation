@extends('layouts.app')

@section('title', 'enrollments')

@section('sub-title', 'new')

@php
$statuses = Helper::get_enrollment_statuses();
@endphp

@section('actions')
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm fw-bold">
    Back
</a>
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('enrollments.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">New Enrollment</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Course</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="course_id">
                                <option value=""></option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}" {{ old('course_id')==$course->id ? 'selected' : '' }}>
                                    {{ ucwords($course->title) }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Chef</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="chef_id">
                                <option value=""></option>
                                @foreach ($chefs as $chef)
                                <option value="{{ $chef->id }}" {{ old('chef_id')==$chef->id ? 'selected' : '' }}>
                                    {{ ucwords($chef->name) }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Enrolled At</label>
                            <input type="date" class="form-control" name="enrolled_at" value="{{ old('enrolled_at') }}"
                                required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Completed At</label>
                            <input type="date" class="form-control" name="completed_at"
                                value="{{ old('completed_at') }}" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Status</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="status">
                                <option value=""></option>
                                @foreach ($statuses as $status)
                                <option value="{{ $status }}" {{ old('status')==$status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-0">
                <div class="d-flex align-items-center justify-content-around">
                    <button type="reset" class="btn btn-danger clear-btn">Clear</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection