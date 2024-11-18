@extends('layouts.app')

@section('title', 'settings')

@section('content')
<div class="container px-4">
    <h2 class="mb-5 text-center animate-on-scroll slide-up">Insurance Types</h2>
    <div class="row">
        <div class="col-md-4 my-auto">
            <div class="card animate-on-scroll slide-left">
                <img src="{{ asset('assets/images/insurance.png') }}" alt="Insurance" class="groups-img">
            </div>
        </div>
        <div class="col-md-8 animate-on-scroll slide-right">
            <div class="card p-4 mb-5">
                <div class="new">
                    <form action="{{ route('settings.insurance_types.create') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="input-group d-flex align-items-center gap-3">
                            <input type="text" name="name" class="form-control name-field"
                                placeholder="Enter Insurance Type Name" required>

                            <input type="file" name="image" class="form-control">

                            <input type="text" name="description" class="form-control"
                                placeholder="Enter Insurance Type Description">

                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card p-4 mb-5">
                <div class="groups">
                    <table class="w-100 text-center table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th class="col-2">Insurance Type</th>
                                <th class="col-8">Description</th>
                                <th class="col-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($insurance_types as $insurance_type)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img alt="user" src="{{ asset($insurance_type->image) }}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{
                                                ucwords($insurance_type->name) }}</a>
                                        </div>
                                        <!--end::Name-->
                                    </div>
                                </td>
                                <td>{{ $insurance_type->description }}</td>
                                <td class="d-flex justify-content-center border-0">
                                    @if($insurance_type->can_delete())
                                    <a href="{{ route('settings.insurance_types.destroy', $insurance_type->id) }}"
                                        class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip"
                                        data-original-title="Delete Insurance Type">
                                        <i class="bi bi-trash3-fill"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No Insurance Types Yet...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <h2 class="mb-5 text-center animate-on-scroll slide-up">Groups</h2>
    <div class="row">
        <div class="col-md-4 my-auto animate-on-scroll slide-left delay-200">
            <div class="card">
                <img src="{{ asset('assets/images/groups.png') }}" alt="Groups" class="groups-img">
            </div>
        </div>
        <div class="col-md-8 animate-on-scroll slide-right delay-200">
            <div class="card p-4 mb-5">
                <div class="new">
                    <form action="{{ route('settings.groups.create') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group d-flex align-items-center gap-3">
                            <input type="text" name="name" class="form-control name-field"
                                placeholder="Enter Group Name" required>

                            <input type="color" name="color" class="color-field" required>

                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card p-4 mb-5">
                <div class="groups">
                    <table class="w-100 text-center table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th class="col-2"></th>
                                <th class="col-8">Group</th>
                                <th class="col-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($groups as $group)
                            <tr>
                                <td>
                                    <div class="color-circle" style="background-color: {{ $group->color }}"></div>
                                </td>
                                <td>{{ ucwords($group->name) }}</td>
                                <td class="d-flex justify-content-center border-0">
                                    @if($group->can_delete())
                                    <a href="{{ route('settings.groups.destroy', $group->id) }}"
                                        class="btn btn-icon btn-danger btn-sm show_confirm" data-toggle="tooltip"
                                        data-original-title="Delete Group">
                                        <i class="bi bi-trash3-fill"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No Groups Yet...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <h2 class="mb-5 text-center animate-on-scroll slide-up">Backup</h2>
    <div class="row">
        <div class="col-md-4 my-auto animate-on-scroll slide-left delay-200">
            <div class="card">
                <img src="{{ asset('assets/images/backup.png') }}" alt="Backup" class="groups-img">
            </div>
        </div>
        <div class="col-md-8 animate-on-scroll slide-right delay-200">
            <div class="card p-4 mb-5">
                <div class="import">
                    <h3 class="mb-4">Import Database</h3>
                    <form action="{{ route('settings.backup.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9 my-auto px-2">
                                <input type="file" name="file" required class="form-control" id="inputGroupFile">
                            </div>
                            <div class=" col-md-3 my-auto">
                                <button type="submit" class="text-center btn btn-primary btn-sm my-3">
                                    <i class="fas fa-upload mr-2"></i>
                                    Import
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card p-4 mb-5">
                <div class="export">
                    <h3 class="mb-4">Export Database</h3>
                    <a href="{{ route('settings.backup.export') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-download mr-2"></i>Export Backup
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection