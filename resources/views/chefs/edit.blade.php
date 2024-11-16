@extends('layouts.app')

@section('title', 'chefs')

@section('sub-title', 'edit')

@php
$ranks = Helper::get_chefs_ranks();
$groups = Helper::get_groups();
@endphp

@section('content')
<div class="container mt-5">
    <div class="card">
        <form action="{{ route('chefs.update', $chef->id) }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="card-head">
                <h1 class="text-center text-primary">Edit Chef</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name..."
                                value="{{ $chef->name }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Phone..."
                                value="{{ $chef->phone }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="Enter Date Of Birth..."
                                value="{{ $chef->dob }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address..."
                                value="{{ $chef->address }}" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Rank</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="rank">
                                <option value=""></option>
                                @foreach ($ranks as $rank)
                                <option value="{{ $rank }}" {{ $chef->rank==$rank ? 'selected' : '' }}>{{ ucwords($rank)
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label">Group</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                required name="group_id">
                                <option value=""></option>
                                @foreach ($groups as $group)
                                <option value="{{ $group->id }}" {{ $chef->group_id==$group->id ? 'selected' : '' }}>{{
                                    ucwords($group->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Resume</label>
                            <input type="file" class="form-control" name="resume" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Certificate</label>
                            <input type="file" class="form-control" name="certificate" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Identification</label>
                            <input type="file" class="form-control" name="identification" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Feedback</label>
                            <textarea class="form-control" name="feedback" rows="3" value="{{ $chef->feedback }}"
                                placeholder="Enter Feedback..."></textarea>
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

    <div class="card mt-5 p-4">
        <div class="card-head">
            <h1 class="text-center text-primary">Documents</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-center my-5">Resume</h2>

                    @if(pathinfo($chef->resume, PATHINFO_EXTENSION) === 'pdf')
                    <embed src="{{ asset($chef->resume) }}" type="application/pdf" width="100%" height="400px">
                    @else
                    <div>
                        <img src="{{ asset('assets/images/file.png') }}" class="img-fluid">

                        <form action="{{ route('chefs.download_file', $chef->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="resume">

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3">Download
                                    Resume</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <h2 class="text-center my-5">Certificate</h2>

                    @if(pathinfo($chef->certificate, PATHINFO_EXTENSION) === 'pdf')
                    <embed src="{{ asset($chef->certificate) }}" type="application/pdf" width="100%" height="400px">
                    @else
                    <div>
                        <img src="{{ asset('assets/images/file.png') }}" class="img-fluid">

                        <form action="{{ route('chefs.download_file', $chef->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="certificate">

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3">Download
                                    Certificate</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <h2 class="text-center my-5">Identification</h2>

                    @if(pathinfo($chef->identification, PATHINFO_EXTENSION) === 'pdf')
                    <embed src="{{ asset($chef->identification) }}" type="application/pdf" width="100%" height="400px">
                    @else
                    <div>
                        <img src="{{ asset('assets/images/file.png') }}" class="img-fluid">

                        <form action="{{ route('chefs.download_file', $chef->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="identification">

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3">Download
                                    Identification</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection