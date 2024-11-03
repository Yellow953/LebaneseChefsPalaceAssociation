@extends('layouts.app')

@section('title', 'backup')

@section('content')

<style>
    .card-header {
        border-bottom: none;
    }

    .input-group .btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
</style>

<!-- Main content -->
<section class="content">
    <div class="container">

        <!-- Banner Card -->
        <div class="card shadow-sm mb-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="position-relative">
                    <img src="{{ asset('assets/images/backup.png') }}" alt="Backup Banner"
                        class="img-fluid w-100 backup-img">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 px-2 mb-4 mb-md-0">
                <div class="card shadow-xl">
                    <div class="card-header bg-primary">
                        <h4 class="card-title mb-0">Import Backup</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('backup.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-9 my-auto px-2">
                                    <input type="file" name="file" required class="form-control" id="inputGroupFile">
                                </div>
                                <div class=" col-md-3 my-auto">
                                    <button type="submit" class="text-center btn btn-primary btn-sm">
                                        <i class="fas fa-upload mr-2"></i>
                                        Import
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-2">
                <div class="card shadow-xl">
                    <div class="card-header bg-primary">
                        <h4 class="card-title mb-0">Export Backup</h4>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="{{ route('backup.export') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-download mr-2"></i>Export Backup
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
