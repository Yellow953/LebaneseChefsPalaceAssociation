@extends('layouts.app')

@section('title', 'insurance_applications')

@php
$maritial_statuses = Helper::get_insurance_application_maritial_statuses();
$ranks = Helper::get_chefs_ranks();
@endphp

@section('sub-title', 'edit')

@section('actions')
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm fw-bold">
    Back
</a>
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('insurance_applications.update', $insurance_application->id) }}" method="POST"
            enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">Edit Insurance Application</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name..."
                                value="{{ $insurance_application->name }}" required />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number..."
                                value="{{ $insurance_application->phone }}" required />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="Enter Date Of Birth..."
                                value="{{ $insurance_application->dob }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address..."
                                value="{{ $insurance_application->address }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Rank</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="rank">
                                <option value=""></option>
                                @foreach ($ranks as $rank)
                                <option value="{{ $rank }}" {{ $insurance_application->rank==$rank ? 'selected' : ''
                                    }}>{{ ucwords($rank)
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Maritial Status</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="maritial_status">
                                <option value=""></option>
                                @foreach ($maritial_statuses as $maritial_status)
                                <option value="{{ $maritial_status }}" {{ $insurance_application->
                                    maritial_status==$maritial_status
                                    ? 'selected' : '' }}>
                                    {{ $maritial_status }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Number Of Kids</label>
                            <input type="number" class="form-control" name="number_of_kids" step="1" min="1" max="100"
                                placeholder="Enter Number Of Kids..."
                                value="{{ $insurance_application->number_of_kids }}" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Health Status</label>
                            <textarea class="form-control" name="health_status" rows="3"
                                placeholder="Enter Any Health Problems or Allergies...">{{ $insurance_application->health_status }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="company_name"
                                placeholder="Enter Company Name..."
                                value="{{ $insurance_application->company_name }}" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Work Location</label>
                            <input type="text" class="form-control" name="work_location"
                                placeholder="Enter Work Location..."
                                value="{{ $insurance_application->work_location }}" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Salary</label>
                            <input type="number" min="0" class="form-control" name="salary"
                                placeholder="Enter Salary..." value="{{ $insurance_application->salary }}" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Work Description</label>
                            <textarea class="form-control" name="work_description" rows="3"
                                placeholder="Enter Your Work Experience...">{{ $insurance_application->work_description }}</textarea>
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