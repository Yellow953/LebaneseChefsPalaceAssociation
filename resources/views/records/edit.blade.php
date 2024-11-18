@extends('layouts.app')

@section('title', 'records')

@section('sub-title', 'edit')

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
        <form action="{{ route('records.update', $record->id) }}" method="POST" enctype="multipart/form-data"
            class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">Edit Record</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="required form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title..."
                                value="{{ $record->title }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Category</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="category">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                <option value="{{ $category }}" {{ $record->category==$category ? 'selected' : '' }}>{{
                                    $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Date</label>
                            <input type="date" class="form-control" name="achieved_on"
                                value="{{ $record->achieved_on }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Achivement Value</label>
                            <input type="number" class="form-control" name="achievement_value"
                                placeholder="Enter Achievement Value..." value="{{ $record->achievement_value }}"
                                required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Unit</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="unit">
                                <option value=""></option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit }}" {{ $record->unit==$unit ? 'selected' : '' }}>{{
                                    $unit }}</option>
                                @endforeach
                            </select>
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
                                placeholder="Enter any description...">{{ $record->description }}</textarea>
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

    @if ($record->certificate)
    <div class="card mt-5 p-4">
        <div class="card-head">
            <h1 class="text-center text-primary">Certificates</h1>
        </div>

        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h2 class="text-center my-5">Certificate</h2>

                    @if(pathinfo($record->certificate, PATHINFO_EXTENSION) === 'pdf')
                    <embed src="{{ asset($record->certificate) }}" type="application/pdf" width="100%" height="400px">
                    @else
                    <div>
                        <img src="{{ asset($record->certificate) }}" class="img-fluid">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection