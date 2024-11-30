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
                <h4>{{ Auth::user()->first_name }}</h4>
                <p>{{ Auth::user()->address }}</p>
            </div>

            <!-- Profile Edit Form -->
            <div class="card p-4">
                <h5 class="fw-bold mb-3">Edit Profile</h5>
                <form action="{{ route('admin.dashboard.updateProfile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row profile-info">
                        <!-- Patient Name -->
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <label for="patient-name">Patient Name</label>
                            <input type="text" class="form-control" id="patient-name" name="patient_name" value="{{ old('patient_name', Auth::user()->first_name) }}" required>
                        </div>

                        <!-- Phone Number -->
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <label for="phone-number">Phone Number</label>
                            <input type="text" class="form-control" id="phone-number" name="phone_number" value="{{ old('phone_number', Auth::user()->phone_number) }}" required>
                        </div>

                        <!-- Address -->
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', Auth::user()->address) }}" required>
                        </div>

                        <!-- Image -->
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <!-- CNIC -->
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <label for="cnic">CNIC</label>
                            <input type="text" class="form-control" id="cnic" name="cnic" value="{{ old('cnic', Auth::user()->cnic) }}" required>
                        </div>

                        <!-- Date of Birth -->
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', Auth::user()->date_of_birth) }}" required>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex  btn-custom">
                        <button type="submit" class="btn btn-dark">UPDATE</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
