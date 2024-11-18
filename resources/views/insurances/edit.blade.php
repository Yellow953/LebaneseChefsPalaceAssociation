@extends('layouts.app')

@section('title', 'insurances')

@section('sub-title', 'edit')

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
        <form action="{{ route('insurances.update', $insurance->id) }}" method="POST" enctype="multipart/form-data"
            class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">Edit Insurance</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Policy Number -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Policy Number</label>
                            <input type="text" class="form-control" name="policy_number"
                                placeholder="Enter Policy Number..." value="{{ $insurance->policy_number }}" required />
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
                                <option value="{{ $status }}" {{ $insurance->status==$status ? 'selected' : '' }}>{{
                                    $status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Start Date</label>
                            <input type="date" class="form-control" name="start_date" placeholder="Enter Start Date..."
                                value="{{ $insurance->start_date }}" required />
                        </div>
                    </div>

                    <!-- End Date -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date" placeholder="Enter End Date..."
                                value="{{ $insurance->end_date }}" />
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
                                placeholder="Enter any remarks...">{{ $insurance->remarks }}</textarea>
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
    @if( $insurance->document )
    <div class="card mt-5 p-4">
        <div class="card-head">
            <h1 class="text-center text-primary">Documents</h1>
        </div>

        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h2 class="text-center my-5">Document</h2>

                    @if(pathinfo($insurance->document, PATHINFO_EXTENSION) === 'pdf')
                    <embed src="{{ asset($insurance->document) }}" type="application/pdf" width="100%" height="400px">
                    @else
                    <div>
                        <img src="{{ asset($insurance->document) }}" class="img-fluid">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection