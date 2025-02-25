@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-4">Prescription</h4>
        <div class="card shadow-sm">
            <div class="card-body">
                <!-- Patient Details -->
                <h4 class="mb-4">Patient Details</h4>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="first-name" class="form-label">First Name *</label>
                        <input type="text" class="form-control" id="first-name" name="first_name" value="{{ $appointment->first_name }}">
                    </div>
                    <div class="col-md-4">
                        <label for="last-name" class="form-label">Last Name *</label>
                        <input type="text" class="form-control" id="last-name" name="last_name" value="{{ $appointment->last_name }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Gender *</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="male" name="gender" value="Male" @if($appointment->gender == 'Male') checked @endif>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="female" name="gender" value="Female" @if($appointment->gender == 'Female') checked @endif>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $appointment->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile *</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" value="{{ $appointment->mobile }}">
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-12">
                        <label for="address" class="form-label">Address *</label>
                        <textarea class="form-control" id="address" name="address" rows="2" >{{ $appointment->address }}</textarea>
                    </div>
                </div>
                <form action="{{ route('admin.appointment.lapTestStore') }}" method="POST">
                    @csrf
                    <div class="row g-3 mt-3">
                        <div class="col-md-12">
                            <label for="address" class="form-label">Test *</label>
                            <textarea class="form-control" id="address" name="lap_test" rows="5">{{ $pre->lap_test ?? '' }}</textarea>
                        </div>
                    </div>

                    <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                    <input type="hidden" name="patient_id" value="{{ $appointment->patient_id }}">

                    <div class="row g-3 mt-3">
                        <div class="col-md-12">
                            <!-- Form Actions -->
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
