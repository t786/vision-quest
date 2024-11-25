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
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Session</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">21,459</h3>
                                    <p class="text-success mb-0">(+29%)</p>
                                </div>
                                <p class="mb-0">Total Users</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="ti ti-user ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Paid Users</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">4,567</h3>
                                    <p class="text-success mb-0">(+18%)</p>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-danger">
                                    <i class="ti ti-user-plus ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Active Users</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">19,860</h3>
                                    <p class="text-danger mb-0">(-14%)</p>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-success">
                                    <i class="ti ti-user-check ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Pending Users</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">237</h3>
                                    <p class="text-success mb-0">(+42%)</p>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="ti ti-user-exclamation ti-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscriptions List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title mb-3">Medical Record List</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="user-btn">
                            <button class="add-new btn btn-primary waves-effect waves-light" data-bs-toggle = 'offcanvas'
                                data-bs-target = '#offcanvasUserFilters'>
                                <i class="ti ti-filter"></i><span class="d-none d-sm-inline-block">Filters</span>
                            </button>
                            <button class="add-new btn btn-primary waves-effect waves-light" data-bs-toggle = 'offcanvas'
                                data-bs-target = '#offcanvasAddCity' style="float: right">
                                <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New Medical Record</span>
                            </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-datatable table-responsive">

                <table class="datatables-users table" id="cities_table">
                    <thead class="border-top">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
            @include('admin.medical-record.CreateOrEditModel.create')
            @include('admin.medical-record.CreateOrEditModel.edit') 
            @include('admin.medical-record.CreateOrEditModel.filters')
        </div>
    </div>
@endsection
@section('script')
    <script>
        var table;
        $(document).ready(function() {

            table = $('#cities_table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.medical-record.index') }}",
                    data: function(d) {
                        d.search = $('input[type="search"]').val(),
                        d.name = $('#filter_name').val(),
                        d.country_id = $('#filter_country_id').val(),
                        d.status = $('#filter_status').val()
                    }
                },
                order: [
                    [0, "desc"]
                ],
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                drawCallback: function(response) {

                    $('#countTotal').empty();
                    $('#countTotal').append(response['json'].recordsTotal);
                }
            });

            $('input[type="search"],#delivery_status,#platform,#date_type,#custom_date_range_input,#custom_date_input')
                .change(function() {
                    table.draw();
                });
        });

        $('#selectDataBtn').click(function() {
            var name = $('#filter_name').val();
            var country_id = $('#filter_country_id').val();
            var status = $('#filter_status').val();

            // Example of constructing the URL with query parameters
            var url = "{{ route('admin.medical-record.index') }}";
            url += "?name=" + name;
            url += "?country_id=" + country_id;
            url += "&status=" + status;

            // Reload DataTable with new URL
            $('#cities_table').DataTable().ajax.url(url).load();

            // Close the modal after updating DataTable
            $('#offcanvasUserFilters').removeClass('show');
            $('.offcanvas-backdrop').removeClass('show');
        });
    </script>
@endsection
