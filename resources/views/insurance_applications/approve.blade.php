@extends('layouts.app')

@section('title', 'insurance_applications')

@section('sub-title', 'approve')

@php
$statuses = Helper::get_insurance_statuses();
@endphp

@section('actions')
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm fw-bold">
    Back
</a>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-5">
                <img src="{{ asset('assets/images/insurance.jpg') }}" alt="Insurance" class="groups-img">
            </div>

            <div class="card my-4 shadow-sm">
                <h4 class="text-center text-primary mt-4">Insurance Application: {{ $insurance_application->id }}</h4>

                <div class="card-body p-4">
                    <div class="mb-3">
                        <span class="fw-bold">Type:</span> {{ ucwords($insurance_application->insuranceType->name) }}
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <p class="mb-1"><span class="fw-bold">Name:</span> {{ ucwords($insurance_application->name)
                                }}</p>
                            <p class="mb-1"><span class="fw-bold">Date Of Birth:</span> {{ $insurance_application->dob
                                }}</p>
                            <p class="mb-1"><span class="fw-bold">Marital Status:</span> {{
                                $insurance_application->maritial_status }}</p>
                            @if ($insurance_application->number_of_kids)
                            <p class="mb-1"><span class="fw-bold">Number Of Kids:</span> {{
                                $insurance_application->number_of_kids }}</p>
                            @endif
                            @if ($insurance_application->health_status)
                            <p class="mb-1"><span class="fw-bold">Health Status:</span> {{
                                $insurance_application->health_status }}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><span class="fw-bold">Company Name:</span> {{
                                ucwords($insurance_application->company_name) }}</p>
                            @if ($insurance_application->work_location)
                            <p class="mb-1"><span class="fw-bold">Work Location:</span> {{
                                $insurance_application->work_location }}</p>
                            @endif
                            @if ($insurance_application->salary)
                            <p class="mb-1"><span class="fw-bold">Salary:</span> ${{
                                number_format($insurance_application->salary, 2) }}</p>
                            @endif
                            @if ($insurance_application->work_description)
                            <p class="mb-1"><span class="fw-bold">Work Description:</span> {{
                                $insurance_application->work_description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm">
                <form action="{{ route('insurance_applications.transform', $insurance_application->id) }}" method="POST"
                    enctype="multipart/form-data" class="form">
                    @csrf
                    <div class="card-head">
                        <h1 class="text-center text-primary">Approve Insurance Application</h1>
                    </div>
                    <div class="card-body py-2">
                        <div class="row">
                            <!-- Policy Number -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="required form-label">Policy Number</label>
                                    <input type="text" class="form-control" name="policy_number"
                                        placeholder="Enter Policy Number..." value="{{ old('policy_number') }}"
                                        required />
                                </div>
                            </div>

                            <!-- Start Date -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required form-label">Start Date</label>
                                    <input type="date" class="form-control" name="start_date"
                                        placeholder="Enter Start Date..." value="{{ old('start_date') }}" required />
                                </div>
                            </div>

                            <!-- End Date -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date"
                                        placeholder="Enter End Date..." value="{{ old('end_date') }}" />
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required form-label">Status</label>
                                    <select class="form-select" data-control="select2"
                                        data-placeholder="Select an option" required name="status">
                                        <option value=""></option>
                                        @foreach ($statuses as $status)
                                        <option value="{{ $status }}" {{ old('status')==$status ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Document -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Document</label>
                                    <input type="file" class="form-control" name="document" />
                                </div>
                            </div>

                            <!-- Remarks -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Remarks</label>
                                    <textarea class="form-control" name="remarks" rows="3"
                                        placeholder="Enter any remarks...">{{ old('remarks') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-0">
                        <div class="d-flex align-items-center justify-content-around">
                            <button type="reset" class="btn btn-sm btn-danger clear-btn">Clear</button>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection