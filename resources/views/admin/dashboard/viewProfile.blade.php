@extends('layouts.master')
<style>
    .profile-header {
        text-align: center;
        margin-bottom: 20px;
    }
    .profile-header img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
    }
    .profile-header h4 {
        font-size: 24px;
        font-weight: 600;
    }
    .profile-header p {
        font-size: 16px;
        color: gray;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-control {
        font-size: 16px;
        padding: 10px;
    }
    .profile-info .row .col-md-6 {
        margin-bottom: 15px;
    }
    .btn-custom {
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
    }
    .btn-custom .btn {
        width: 10%;
    }
</style>

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Profile Header -->
        <div class="profile-header">
            <img src="{{ asset('storage/' . $user->image_url) }}" alt="Profile Picture">
            <h4>{{ $user->first_name }}</h4>
            <p>{{ $user->address }}</p>
        </div>

        <!-- Profile Edit Form -->
        <div class="card p-4">
            <div class="row profile-info">
                <!-- Patient Name -->
                <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="patient-name">Patient Name</label>
                    <input type="text" class="form-control" id="patient-name" name="patient_name" value="{{ $user->first_name }}" disabled>
                </div>

                <!-- Phone Number -->
                <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="phone-number">Phone Number</label>
                    <input type="text" class="form-control" id="phone-number" name="phone_number" value="{{ $user->phone_number }}" disabled>
                </div>

                <!-- Address -->
                <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" disabled>
                </div>

                <!-- CNIC -->
                <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="cnic">CNIC</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" value="{{ $user->cnic }}" disabled>
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6" style="margin-bottom: 15px;">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{ $user->date_of_birth }}" disabled>
                </div>
            </div>
        </div>
    </div>
@endsection
