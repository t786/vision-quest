@extends('layouts.master')
<style>
    .custom-card {
        border: 1px solid #e5e5e5;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .patient-photo img {
        width: 80px;
        height: 80px;
        object-fit: cover;
    }

    .patient-info h4 {
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0;
    }

    .patient-info p {
        font-size: 1rem;
        margin: 0;
    }

    .diagnosis .form-label {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .btn-block {
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: 500;
    }

    .btn-primary {
        background-color: #6f42c1;
        border-color: #6f42c1;
    }

    .btn-dark {
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .row .col-md-6,
    .row .col-md-12 {
        margin-bottom: 10px;
    }
</style>
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="card p-4 custom-card" style="padding-left: 80px !important;
    padding-right: 80px !important;">
                <div class="row align-items-center">
                    <!-- Left Section: Patient Information -->
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="patient-photo me-3">
                            <img src="{{ asset('storage/' . $appointment->patient->image_url) }}" class="img-fluid rounded-circle" alt="Junaid Khan">
                        </div>
                        <div class="patient-info me-3">
                            <h5 class="mb-1">{{ $appointment->first_name . ' ' . $appointment->last_name }}</h5>
                            <p class="text-muted"> {{ $appointment->gender }}</p>
                        </div>
                        <div class="diagnosis">
                            <label for="diagnosedWith" class="form-label">Diagnosed With:</label>
                            <input type="text" class="form-control" id="diagnosedWith" placeholder="Type">
                        </div>
                    </div>

                    <!-- Right Section: Buttons -->
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <a href="{{ route('admin.appointment.prescriptionCreate', $appointment->id) }}"
                                    class="btn btn-primary btn-lg btn-block w-100">
                                    Prescribe Medicine
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.appointment.lapTestCreate', $appointment->id) }}"
                                    class="btn btn-dark btn-lg btn-block w-100">
                                    Lab Test
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success btn-lg btn-block w-100">Diagnostic
                                    Report</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
