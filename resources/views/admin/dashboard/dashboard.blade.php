@extends('layouts.master')
<style>
    .patient-card {
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 15px;
      background-color: #fff;
    }
    .patient-avatar {
      width: 50px;
      height: 50px;
      object-fit: cover;
    }
    .btn-icon {
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 35px;
      height: 35px;
      border: 1px solid #ddd;
    }
    .btn-main {
      background-color: #20c997;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
    }
</style>

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <h5 class="fw-bold mb-3">Patients ({{ $patients->count() }})</h5>
        </div>
        <!-- Subscriptions List Table -->
        @foreach ($patients as $patient)
            <div class="patient-card d-flex align-items-center justify-content-between" style="margin-bottom: 10px;">
                <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Patient Avatar" class="patient-avatar me-3">
                <div>
                    <h6 class="mb-0">{{ $patient->first_name .' '. $patient->last_name }}</h6>
                    <small class="text-muted">{{ $patient->age ?? 'N/A' }} years</small>
                </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="" class="btn-main me-3">
                        View Profile
                    </a>
                <button class="btn-icon">
                    <i class="ti ti-phone"></i>
                </button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
