@extends('layouts.master')
<style>
    .user-btn {
        display: flex;
        justify-content: flex-end;
    }
    .user-btn .add-new {
        margin-right: 10px;
    }
</style>

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Subscriptions List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title mb-3">Medical Record List</h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-datatable table-responsive">

                <table class="datatables-users table" id="cities_table">
                    <thead class="border-top">
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Created by</th>
                            <th>Date</th>
                            <th>Disease</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prescriptions as $prescription)
                            <tr>
                                <td></td>
                                <td>{{ $prescription->prescription }}</td>
                                <td>{{ $prescription->appointment->doctor->first_name }}</td>
                                <td>{{ $prescription->created_at->format('d-m-Y') }}</td>
                                <td>{{ $prescription->appointment->treatment }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.medical-record.download.pdf', $prescription->appointment_id) }}">
                                                <i class="ti ti-download me-1"></i> Download PDF
                                            </a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
