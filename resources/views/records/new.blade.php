@extends('layouts.app')

@section('title', 'records')

@section('sub-title', 'new')

@php
$categories = Helper::get_record_categories();
$units = Helper::get_units();
@endphp

@section('actions')
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm fw-bold">
    Back
</a>
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('records.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">New Record</h1>
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
                            <label class="required form-label">Date</label>
                            <input type="date" class="form-control" name="achieved_on" value="{{ old('achieved_on') }}"
                                required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Category</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="category">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                <option value="{{ $category }}" {{ old('category')==$category ? 'selected' : '' }}>{{
                                    $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

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

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Achivement Value</label>
                            <input type="number" class="form-control" name="achievement_value"
                                placeholder="Enter Achievement Value..." value="{{ old('achievement_value') }}" min="0"
                                step="any" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Unit</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="unit">
                                <option value=""></option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit }}" {{ old('unit')==$unit ? 'selected' : '' }}>{{
                                    $unit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location..."
                                value="{{ old('location') }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Certificate</label>
                            <input type="file" class="form-control" name="certificate" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"
                                placeholder="Enter any description...">{{ old('description') }}</textarea>
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