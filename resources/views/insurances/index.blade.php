@extends('layouts.app')

@section('title', 'insurances')

@php
$statuses = Helper::get_insurance_statuses();
@endphp

@section('actions')
<a href="{{ route('insurances.new') }}" class="btn btn-sm fw-bold btn-primary">
    New Insurance
</a>
<a href="{{ route('insurances.export') }}" class="btn btn-sm fw-bold btn-primary">
    Export Insurances
</a>
@endsection

@section('filter')
<!--begin::filter-->
<div class="filter border-0 px-0 px-md-3 py-4">
    <!--begin::Form-->
    <form action="{{ route('insurances') }}" method="GET" enctype="multipart/form-data" class="form">
        @csrf
        <div class="pt-0 pt-3 px-2 px-md-4">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <div class="position-relative w-md-400px me-md-2">
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control ps-10" name="policy_number"
                        value="{{ request()->query('policy_number') }}" placeholder="Search By Policy Number..." />
                </div>
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary me-5 px-3 py-2 d-flex align-items-center">
                        Search <span class="ml-2"><i class="fas fa-search"></i></span>
                    </button>
                    <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse"
                        href="#kt_advanced_search_form">Advanced Search</a>
                    <button type="reset" class="btn text-danger clear-btn">Clear</button>
                </div>
            </div>
            <!--end::Compact form-->
            <!--begin::Advance form-->
            <div class="collapse" id="kt_advanced_search_form">
                <div class="separator separator-dashed mt-9 mb-6"></div>
                <div class="row g-8 mb-8">
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Insurance Type</label>
                        <select name="insurance_type_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($insuranceTypes as $type)
                            <option value="{{ $type->id }}" {{ request()->query('insurance_type_id') == $type->id ?
                                'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Status</label>
                        <select name="status" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($statuses as $status)
                            <option value="{{ $status }}" {{ request()->query('status') == $status ? 'selected' : '' }}>
                                {{ ucfirst($status) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Chef</label>
                        <select name="chef_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($chefs as $chef)
                            <option value="{{ $chef->id }}" {{ request()->query('chef_id') ==
                                $chef->id ? 'selected' : '' }}>
                                {{ $chef->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Restaurant</label>
                        <select name="restaurant_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($restaurants as $restaurant)
                            <option value="{{ $restaurant->id }}" {{ request()->query('restaurant_id') ==
                                $restaurant->id ? 'selected' : '' }}>
                                {{ $restaurant->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Start Date</label>
                        <input type="date" class="form-control" name="start_date"
                            value="{{ request()->query('start_date') }}" />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">End Date</label>
                        <input type="date" class="form-control" name="end_date"
                            value="{{ request()->query('end_date') }}" />
                    </div>
                </div>
            </div>
            <!--end::Advance form-->
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::filter-->
@endsection

@section('content')
<div class="container">
    <div class="card mb-5 mb-xl-8">
        @yield('filter')

        <div class="card-body pt-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle text-center gs-0 gy-4">
                    <thead>
                        <tr>
                            <th class="col-2 p-3">Policy Number</th>
                            <th class="col-2 p-3">Type</th>
                            <th class="col-2 p-3">Beneficiary</th>
                            <th class="col-2 p-3">Date</th>
                            <th class="col-2 p-3">Status</th>
                            <th class="col-2 p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($insurances as $insurance)
                        <tr>
                            <td>{{ $insurance->policy_number }}</td>
                            <td>{{ ucwords($insurance->insuranceType->name) }}</td>
                            <td>
                                {{ ucwords($insurance->chef ? $insurance->chef->name : $insurance->restaurant->name) }}
                            </td>
                            <td>
                                Start: {{ $insurance->start_date }} <br>
                                {{ $insurance->end_date ? 'End: ' . $insurance->end_date : '' }}
                            </td>
                            <td>
                                <span
                                    class="badge bg-{{ $insurance->status == 'active' ? 'success' : ($insurance->status == 'expired' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($insurance->status) }}
                                </span>
                            </td>
                            <td class="d-flex justify-content-end border-0">
                                <a href="{{ route('insurances.edit', $insurance->id) }}"
                                    class="btn btn-icon btn-warning btn-sm me-1">
                                    <i class="bi bi-pen-fill"></i>
                                </a>
                                @if ($insurance->can_delete())
                                <a href="{{ route('insurances.destroy', $insurance->id) }}"
                                    class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No Insurances Found...</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6">{{ $insurances->appends(['policy_number' =>
                                request()->query('policy_number'), 'insurance_type_id' =>
                                request()->query('insurance_type_id'), 'chef_id' => request()->query('chef_id'),
                                'restaurant_id' =>
                                request()->query('restaurant_id'), 'start_date' => request()->query('start_date'),
                                'end_date' =>
                                request()->query('end_date'), 'status' => request()->query('status'), 'remarks' =>
                                request()->query('remarks')])->links() }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection