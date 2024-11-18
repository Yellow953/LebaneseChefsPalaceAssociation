@extends('layouts.app')

@section('title', 'events')

@php
$statuses = Helper::get_event_statuses();
@endphp

@section('actions')
<a href="{{ route('events.new') }}" class="btn btn-sm fw-bold btn-primary">
    New Event
</a>
<a href="{{ route('events.export') }}" class="btn btn-sm fw-bold btn-primary">
    Export Events
</a>
@endsection

@section('filter')
<!--begin::filter-->
<div class="filter border-0 px-0 px-md-3 py-4">
    <!--begin::Form-->
    <form action="{{ route('events') }}" method="GET" enctype="multipart/form-data" class="form">
        @csrf
        <div class="pt-0 pt-3 px-2 px-md-4">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <div class="position-relative w-md-400px me-md-2">
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control ps-10" name="name" value="{{ request()->query('name') }}"
                        placeholder="Search By Name..." />
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
                        <label class="fs-6 form-label fw-bold text-dark">User</label>
                        <select name="user_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ request()->query('user_id') ==
                                $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Location</label>
                        <input type="text" class="form-control" name="location"
                            value="{{ request()->query('location') }}" placeholder="Enter Location..." />
                    </div>
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Description</label>
                        <input type="text" class="form-control" name="description"
                            value="{{ request()->query('description') }}" placeholder="Enter Description..." />
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
                            <th class="col-2 p-3">Event</th>
                            <th class="col-2 p-3">User</th>
                            <th class="col-2 p-3">Date</th>
                            <th class="col-2 p-3">Info</th>
                            <th class="col-2 p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($events as $event)
                        <tr>
                            <td>{{ ucwords($event->name) }}</td>
                            <td>{{ ucwords($event->user->name) }}</td>
                            <td>
                                Start: {{ $event->start_date }} <br>
                                {{ $event->end_date ? 'End: ' . $event->end_date : '' }}
                            </td>
                            <td>
                                Status: {{$event->status}} <br>
                                Location: {{$event->location}}
                            </td>
                            <td class="d-flex justify-content-end border-0">
                                <a href="{{ route('events.edit', $event->id) }}"
                                    class="btn btn-icon btn-warning btn-sm me-1">
                                    <i class="bi bi-pen-fill"></i>
                                </a>
                                @if ($event->can_delete())
                                <a href="{{ route('events.destroy', $event->id) }}"
                                    class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Events Found...</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">{{ $events->appends(['name' => request()->query('name'), 'user_id' =>
                                request()->query('user_id'), 'status' => request()->query('status'), 'description' =>
                                request()->query('description'), 'start_date' => request()->query('start_date'),
                                'end_date' => request()->query('end_date'), 'location' =>
                                request()->query('location')])->links() }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection