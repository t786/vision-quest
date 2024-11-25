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
      border-radius: 50%;
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
            <h5 class="fw-bold mb-3">Patients ({{ $appointments->count() }})</h5>
        </div>
        <!-- Subscriptions List Table -->
        @foreach ($appointments as $appointment)
            <div class="patient-card d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                <img src="" alt="Patient Avatar" class="patient-avatar me-3">
                <div>
                    <h6 class="mb-0"></h6>
                    <small class="text-muted">30 years</small>
                </div>
                </div>
                <div class="d-flex align-items-center">
                <button class="btn-main me-3">Main Button</button>
                <button class="btn-icon me-2">
                    <i class="bi bi-arrow-repeat"></i>
                </button>
                <button class="btn-icon">
                    <i class="bi bi-link-45deg"></i>
                </button>
                </div>
            </div>
        @endforeach







        @include('admin.appointments.CreateOrEditModel.create')
        @include('admin.appointments.CreateOrEditModel.edit')
        @include('admin.appointments.CreateOrEditModel.filters')

    </div>
@endsection
@section('script')
@endsection
