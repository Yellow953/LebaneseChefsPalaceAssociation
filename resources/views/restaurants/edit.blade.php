@extends('layouts.app')

@section('title', 'restaurants')

@section('sub-title', 'edit')

@php
$types = Helper::get_restaurants_types();
$certification_statuses = Helper::get_restaurants_certification_statuses();
@endphp

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('restaurants.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data"
            class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">Edit Restaurant</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name..."
                                value="{{ $restaurant->name }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location..."
                                value="{{ $restaurant->location }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Type</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="type">
                                <option value=""></option>
                                @foreach ($types as $type)
                                <option value="{{ $type }}" {{ $restaurant->type == $type ? 'selected' : '' }}>{{
                                    ucwords($type)
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Certification Status</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="certification_status">
                                <option value=""></option>
                                @foreach ($certification_statuses as $certification_status)
                                <option value="{{ $certification_status }}" {{ $restaurant->certification_status ==
                                    $certification_status ? 'selected' : '' }}>{{
                                    ucwords($certification_status)
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="required form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"
                                value="{{ $restaurant->description }}" required
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