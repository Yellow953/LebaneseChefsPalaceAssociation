@extends('layouts.app')

@section('title', 'restaurants')

@section('sub-title', 'new')

@php
$types = Helper::get_restaurants_types();
$certification_statuses = Helper::get_restaurants_certification_statuses();
@endphp

@section('actions')
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm fw-bold">
    Back
</a>
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('restaurants.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">New Restaurant</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name..."
                                value="{{ old('name') }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Owner</label>
                            <input type="text" class="form-control" name="owner" placeholder="Enter Owner's Name..."
                                value="{{ old('owner') }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number..."
                                value="{{ old('phone') }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location..."
                                value="{{ old('location') }}" required />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Type</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="type">
                                <option value=""></option>
                                @foreach ($types as $type)
                                <option value="{{ $type }}" {{ old('type')==$type ? 'selected' : '' }}>{{ ucwords($type)
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="required form-label">Certification Status</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="certification_status">
                                <option value=""></option>
                                @foreach ($certification_statuses as $certification_status)
                                <option value="{{ $certification_status }}" {{
                                    old('certification_status')==$certification_status ? 'selected' : '' }}>{{
                                    ucwords($certification_status)
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Legal Paper</label>
                            <input type="file" class="form-control" name="legal_paper" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" value="{{ old('description') }}"
                                placeholder="Enter Description..."></textarea>
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