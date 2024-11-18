@extends('layouts.app')

@section('title', 'insurances')

@section('sub-title', 'new')

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
    <div class="card">
        <form action="{{ route('insurances.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">New Insurance</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Insurance Type -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Insurance Type</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="insurance_type_id">
                                <option value=""></option>
                                @foreach ($insuranceTypes as $type)
                                <option value="{{ $type->id }}" {{ old('insurance_type_id')==$type->id ? 'selected' : ''
                                    }}>
                                    {{ $type->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Policy Number -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Policy Number</label>
                            <input type="text" class="form-control" name="policy_number"
                                placeholder="Enter Policy Number..." value="{{ old('policy_number') }}" required />
                        </div>
                    </div>

                    <!-- Chef -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Chef</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                name="chef_id">
                                <option value=""></option>
                                @foreach ($chefs as $chef)
                                <option value="{{ $chef->id }}" {{ old('chef_id')==$chef->id ?
                                    'selected' : '' }}>
                                    {{ $chef->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Restaurant -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Restaurant</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                name="restaurant_id">
                                <option value=""></option>
                                @foreach ($restaurants as $restaurant)
                                <option value="{{ $restaurant->id }}" {{ old('restaurant_id')==$restaurant->id ?
                                    'selected' : '' }}>
                                    {{ $restaurant->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Start Date</label>
                            <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date..."
                                value="{{ old('start_date') }}" required />
                        </div>
                    </div>

                    <!-- End Date -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date" placeholder="Enter End Date..."
                                value="{{ old('end_date') }}" />
                        </div>
                    </div>

                    <!-- Status -->
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
                    <button type="reset" class="btn btn-danger clear-btn">Clear</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection