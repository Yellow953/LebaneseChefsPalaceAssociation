@extends('layouts.app')

@section('title', 'chefs')

@php
$ranks = Helper::get_chefs_ranks();
$groups = Helper::get_groups();
@endphp

@section('actions')
<div class="card-toolbar">
    <!--begin::Menu-->
    <button type="button" class="btn btn-primary px-4 d-flex align-items-center" data-kt-menu-trigger="hover"
        data-kt-menu-placement="bottom-end">
        Actions
        <span class="ml-2"><i class="bi bi-grid-fill"></i></span>
    </button>
    <!--begin::Menu 2-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px mt-3"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator mb-3 opacity-75"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="{{ route('chefs.new') }}" class="menu-link px-3">New Chef</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator mt-3 opacity-75"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content px-3 py-3">
                <a class="btn btn-primary btn-sm px-4" href="{{ route('chefs.export') }}">Export to Excell</a>
            </div>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu 2-->
    <!--end::Menu-->
</div>
@endsection

@section('filter')
<!--begin::filter-->
<div class="filter border-0 px-0 px-md-3 py-4">
    <!--begin::Form-->
    <form action="{{ route('chefs') }}" method="GET" enctype="multipart/form-data" class="form">
        @csrf
        <div class="pt-0 pt-3 px-2 px-md-4">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <!--begin::Input group-->
                <div class="position-relative w-md-400px me-md-2">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" class="form-control ps-10" name="name" value="{{ request()->query('name') }}"
                        placeholder="Search By Name..." />
                </div>
                <!--end::Input group-->
                <!--begin:Action-->
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary me-5 px-3 py-2 d-flex align-items-center">
                        Search <span class="ml-2"><i class="fas fa-search"></i></span>
                    </button>
                    <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse"
                        href="#kt_advanced_search_form">Advanced Search</a>
                    <button type="reset" class="btn text-danger clear-btn">Clear</button>
                </div>
                <!--end:Action-->
            </div>
            <!--end::Compact form-->
            <!--begin::Advance form-->
            <div class="collapse" id="kt_advanced_search_form">
                <!--begin::Separator-->
                <div class="separator separator-dashed mt-9 mb-6"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-8 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ request()->query('phone') }}"
                            placeholder="Enter Phone..." />
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ request()->query('address') }}"
                            placeholder="Enter Address..." />
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Rank</label>
                        <select name="type" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($ranks as $rank)
                            <option value="{{ $rank }}" {{ request()->query('rank') == $rank ? 'selected' : '' }}>{{
                                ucwords($rank) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Group</label>
                        <select name="group_id" class="form-control" data-control="select2"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            @foreach ($groups as $group)
                            <option value="{{ $group->id }}" {{ request()->query('group_id') == $group->id ? 'selected'
                                : '' }}>{{
                                ucwords($group->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" value="{{ request()->query('dob') }}" />
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label class="fs-6 form-label fw-bold text-dark">Feedback</label>
                        <input type="text" class="form-control" name="feedback"
                            value="{{ request()->query('feedback') }}" placeholder="Enter Feedback..." />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
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
    <!--begin::Tables Widget 10-->
    <div class="card mb-5 mb-xl-8">
        @yield('filter')

        <!--begin::Body-->
        <div class="card-body pt-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="text-center">
                            <th class="col-1 p-3"></th>
                            <th class="col-2 p-3">Chef</th>
                            <th class="col-2 p-3">Info</th>
                            <th class="col-2 p-3">Rank</th>
                            <th class="col-2 p-3">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @forelse ($chefs as $chef)
                        <tr>
                            <td>
                                <div class="color-circle" style="background-color: {{ $chef->group->color }}"></div>
                            </td>
                            <td>
                                <h3>{{ $chef->name }}</h3>
                                {{ $chef->phone }}
                            </td>
                            <td>
                                {{ $chef->address }} <br>
                                {{ $chef->dob }}
                            </td>
                            <td>
                                <div class="text-center">
                                    {{ $chef->rank }}
                                </div>
                            </td>
                            <td class="d-flex justify-content-end border-0">
                                <a href="{{ route('chefs.edit', $chef->id) }}"
                                    class="btn btn-icon btn-warning btn-sm me-1">
                                    <i class="bi bi-pen-fill"></i>
                                </a>
                                @if($chef->can_delete())
                                <a href="{{ route('chefs.destroy', $chef->id) }}"
                                    class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip"
                                    data-original-title="Delete Chef">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="5">
                                <div class="text-center">No Chefs Yet ...</div>
                            </th>
                        </tr>
                        @endforelse
                    </tbody>
                    <!--end::Table body-->

                    <tfoot>
                        <tr>
                            <th colspan="5">
                                {{ $chefs->appends(['name' => request()->query('name'), 'phone' =>
                                request()->query('phone'), 'dob' => request()->query('dob'), 'address' =>
                                request()->query('address'), 'rank' => request()->query('rank'), 'feedback' =>
                                request()->query('feedback'), 'group_id' => request()->query('group_id')])->links() }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 10-->
</div>
@endsection