@extends('layouts.master')
<style>
    .chat-card {
        display: flex;
        align-items: center;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
        margin: 10px 0;
    }

    .chat-avatar {
        width: 100px;
        height: 100px;
        margin-right: 10px;
    }

    .chat-info {
        flex-grow: 1;
    }

    .chat-time {
        font-size: 14px;
        color: #888;
    }

    .past-appointment {
        height: 80px;
        background-color: #fff;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .past-appointment .details {
        margin-left: 10px;
        flex: 1;
    }

    .past-appointment .details h6 {
        margin: 0;
        font-size: 0.95rem;
        font-weight: 600;
    }

    .past-appointment .details small {
        font-size: 0.75rem;
        color: #6c757d;
    }

    .past-appointment .time-btn {
        margin-left: auto;
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
</style>

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Upcoming Appointments -->
            <div class="col-lg-6">
                <div class="card" style="padding: 15px;">
                    <h5 class="fw-bold mb-3">Upcoming appointments</h5>
                    <a href="#" class="mb-3 d-inline-block">
                        {{ \Carbon\Carbon::now()->format('F') }}-{{ \Carbon\Carbon::now()->addMonth()->format('F') }}
                    </a>
                    @if ($upComingAppointments->isNotEmpty())
                        @foreach ($upComingAppointments as $upComingAppointment)
                            <div class="chat-card">
                                <img class="chat-avatar" src="{{ asset('storage/' . $upComingAppointment->patient->image_url) }}" alt="Dr. Ali Anjum" class="doctor-image">
                                <div class="chat-info">
                                    <!-- Patient's Full Name -->
                                    <h6 class="mb-0">
                                        <a href="{{ route('admin.appointment.prescription') }}"
                                            class="text-primary">
                                            {{ $upComingAppointment->patient->first_name . ' ' . $upComingAppointment->patient->last_name }}
                                        </a>
                                    </h6>
                                    <!-- Formatted Appointment Date -->
                                    <small class="chat-time">
                                        {{ \Carbon\Carbon::parse($upComingAppointment->date)->format('d F, l') }}
                                    </small>
                                </div>
                                <div>
                                    <!-- Phone Button with Modal Trigger -->
                                    <button class="btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#phoneModal{{ $upComingAppointment->id }}">
                                        <i class="ti ti-phone"></i>
                                    </button>
                                    <!-- Appointment Time -->
                                    <small class="d-block text-muted" style="margin-top: 15px;">
                                        {{ \Carbon\Carbon::parse($upComingAppointment->from)->format('h:i A') }}
                                    </small>
                                </div>

                                <!-- Modal for Phone Number -->
                                <div class="modal fade" id="phoneModal{{ $upComingAppointment->id }}" tabindex="-1"
                                    aria-labelledby="phoneModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="phoneModalLabel">Phone Number</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Display Patient's Phone Number -->
                                                <p>Phone Number: {{ $upComingAppointment->patient->phone_number }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted">No upcoming appointments available.</p>
                    @endif
                </div>
            </div>
            <!-- Past Appointments -->
            <div class="col-lg-6">
                <h5 class="fw-bold mb-3">Past appointments</h5>
                <a href="#" class="mb-3 d-inline-block">
                    {{ \Carbon\Carbon::now()->subMonth()->format('F') }}-{{ \Carbon\Carbon::now()->format('F') }}
                </a>
                <div>
                    @if ($previousAppointments->isNotEmpty())
                        @foreach ($previousAppointments as $previousAppointment)
                            <div class="past-appointment d-flex align-items-center mb-3 p-2 border rounded">
                                <!-- Avatar -->
                                <img src="{{ asset('storage/' . $previousAppointment->patient->image_url) }}" class="avatar rounded-circle me-3" alt="Dr. Ali Anjum" class="doctor-image">
                                <!-- Appointment Details -->
                                <div class="details flex-grow-1">
                                    <!-- Patient's Full Name -->
                                    <h6 class="mb-0">
                                        <a href=""
                                            class="text-primary">
                                            {{ $previousAppointment->patient->first_name . ' ' . $previousAppointment->patient->last_name }}
                                        </a>
                                    </h6>
                                    <!-- Appointment Month -->
                                    <small class="text-muted">
                                        {{ \Carbon\Carbon::parse($previousAppointment->date)->format('F Y') }}
                                    </small>
                                </div>

                                <!-- Phone Button with Modal Trigger -->
                                <button class="btn-icon" data-bs-toggle="modal"
                                    data-bs-target="#phoneModal{{ $previousAppointment->id }}">
                                    <i class="ti ti-phone"></i>
                                </button>
                            </div>

                            <!-- Modal for Phone Number -->
                            <div class="modal fade" id="phoneModal{{ $previousAppointment->id }}" tabindex="-1"
                                aria-labelledby="phoneModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="phoneModalLabel">Phone Number</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Display Patient's Phone Number -->
                                            <p>Phone Number: {{ $previousAppointment->patient->phone_number }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted">No past appointments available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
