@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            {{-- <div class="card-header text-center bg-primary text-white">
                <h2>Appointment Form</h2>
            </div> --}}
            <div class="card-body">
                <form action="{{ route('admin.appointment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Patient Details -->
                    <h4 class="mb-4">Patient Details</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="first-name" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="first-name" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last-name" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="last-name" name="last_name" required>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <label class="form-label">Gender *</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" name="gender" value="Male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female" required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="mobile" class="form-label">Mobile *</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" required>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address *</label>
                            <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
                        </div>
                    </div>

                    <!-- Appointment Details -->
                    <h4 class="my-4">Appointment Details</h4>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="appointment-date" class="form-label">Date of Appointment *</label>
                            <input type="date" class="form-control" id="appointment-date" name="appointment_date" required>
                        </div>
                        <div class="col-md-4">
                            <label for="from" class="form-label">From *</label>
                            <input type="time" class="form-control" id="from" name="from" required>
                        </div>
                        <div class="col-md-4">
                            <label for="to" class="form-label">To *</label>
                            <input type="time" class="form-control" id="to" name="to" required>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <label for="doctor" class="form-label">Consulting Doctor</label>
                            <select id="doctor" name="doctor" class="form-select">
                                <option value="">Select Doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->first_name .' '. $doctor->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="treatment" class="form-label">Treatment</label>
                            <input type="text" class="form-control" id="treatment" name="treatment">
                        </div>
                    </div>

                    <!-- Upload Certificate -->
                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                        {{-- <h4 class="my-4">Upload Certificate</h4> --}}
                        {{-- <div class="mb-3"> --}}
                            <label for="certificate" class="form-label">Upload Certificate Here</label>
                            <input type="file" id="certificate" name="certificate" class="form-control" accept=".pdf,.jpg,.jpeg,.png" />
                        {{-- </div> --}}
                        </div>
                        <div class="col-md-6">
                            <!-- Form Actions -->
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
