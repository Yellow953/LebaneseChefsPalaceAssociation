@extends('layouts.app')

@section('title', 'courses')

@section('sub-title', 'new')

@php
$statuses = Helper::get_course_statuses();
$levels = Helper::get_course_levels();
@endphp

@section('actions')
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm fw-bold">
    Back
</a>
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('courses.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">New Course</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title..."
                                value="{{ old('title') }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Taught By</label>
                            <input type="text" class="form-control" name="taught_by" placeholder="Enter Taught By..."
                                value="{{ old('taught_by') }}" required />
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

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Level</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="level">
                                <option value=""></option>
                                @foreach ($levels as $level)
                                <option value="{{ $level }}" {{ old('level')==$level ? 'selected' : '' }}>
                                    {{ $level }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location..."
                                value="{{ old('location') }}" required />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Duration</label>
                            <input type="text" class="form-control" name="duration" placeholder="Enter Duration..."
                                value="{{ old('duration') }}" required />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Fee</label>
                            <input type="number" class="form-control" name="fee" placeholder="Enter Name..." min="0"
                                step="any" value="{{ old('fee') }}" required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"
                                placeholder="Enter Descrition...">{{ old('description') }}</textarea>
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