@extends('frontend.layout.layout')
@section('content')
<div class="container">
    <h4 class="fs-2 fs-lg-1 primary-color text-center">Apply for Insurance</h4>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST" class="d-flex flex-column">
                @csrf
                <div class="form-group">
                    <label for="name" class="fs-5 fs-lg-4 mb-2 primary-color">Name*</label>
                    <input type="text" class="form-control input" id="name" name="name" required>
                </div>
                <div class="form-group mt-5">
                    <label for="dob" class="fs-5 fs-lg-4 mb-2 primary-color">Date Of Birth*</label>
                    <input type="date" class="form-control input" id="dob" name="dob" required>
                </div>
                <div class="form-group mt-5">
                    <label for="marital_status" class="fs-5 fs-lg-4 mb-2 primary-color">Marital Status*</label>
                    <select class="form-control input" id="marital_status" name="marital_status" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                </div>
                <div class="form-group mt-5">
                    <label for="number_of_kids" class="fs-5 fs-lg-4 mb-2 primary-color">Number Of Kids</label>
                    <input type="number" class="form-control input" id="number_of_kids" name="number_of_kids">
                </div>
                <div class="form-group mt-5">
                    <label for="health_status" class="fs-5 fs-lg-4 mb-2 primary-color">Health Status</label>
                    <select class="form-control input" id="health_status" name="health_status">
                        <option value="good">Good</option>
                        <option value="poor">Poor</option>
                    </select>
                </div>
                <div class="form-group mt-5">
                    <label for="company_name" class="fs-5 fs-lg-4 mb-2 primary-color">Company Name</label>
                    <input type="text" class="form-control input" id="company_name" name="company_name">
                </div>
                <div class="form-group mt-5">
                    <label for="work_location" class="fs-5 fs-lg-4 mb-2 primary-color">Work Location</label>
                    <input type="text" class="form-control input" id="work_location" name="work_location">
                </div>
                <div class="form-group mt-5">
                    <label for="salary" class="fs-5 fs-lg-4 mb-2 primary-color">Salary (in USD)</label>
                    <input type="number" class="form-control input" id="salary" name="salary">
                </div>
                <div class="form-group mt-5">
                    <label for="work_description" class="fs-5 fs-lg-4 mb-2 primary-color">Work Description</label>
                    <textarea class="form-control input" id="work_description" name="work_description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-custom mt-5 align-self-center align-items-center">Apply</button>
            </form>
        </div>
    </div>
</div>
@endsection