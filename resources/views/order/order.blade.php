@extends('admin.layouts.master')
@section('title', 'Order List')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <a class="btn btn-primary btn-sm mt-3 rounded-pill p-2" href="{{ route('order.create') }}"><b>
                    ADD Order</b> <i class="fas fa-user-plus"></i></a>

            <!-- Trigger the modal with a button -->
            {{-- <button type="button" class="btn btn-info btn-lg">Open Modal</button> --}}

            <!-- Modal -->

            <div class="card mt-4" style="border-radius : 25px">
                <div class="card-header">
                    <h1 class="mt-3 "><b> <i>Orders</i> </b> <i class="fas fa-user-tie"></i> </h1>

                    <div class="mt-3">

                    </div>
                    {{-- flash sms --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif


                    {{-- <button onclick="window.print()" class="btn btn-success">PRINT REPORT<i
                            class="fas fa-print"></i></button> --}}
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover text-center" id="myTable">
                        <thead>
                            <tr>
                                <th><i class="fas fa-list-ol"></i> ID</th>
                                <th>No of Suit <i class="fas fa-marker"></i></th>
                                <th>Suit Type <i class="fas fa-highlighter"></i></th>
                                <th>Delivered <i class="fas fa-calculator"></i></th>
                                <th>Rack <i class="fas fa-calculator"></i></th>
                                <th>Total Amount <i class="fas fa-money-bill-wave-alt"></i></th>
                                <th>Paid Amount <i class="fas fa-money-bill-wave"></i></th>
                                <th>Booking Date <i class="fas fa-money-bill-wave"></i></th>
                                <th>Delivery Date <i class="fas fa-money-bill-wave"></i></th>
                                <th>ACTION <i class="fas fa-info-circle"></i></th>
                            </tr>
                        </thead>
                    </table>

                </div>


            </div>
        @endsection
        @section('scripts')
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable({
                        processing: true,
                        serverSide: true,
                        responsive: true,
                        ajax: "{{ route('order.index') }}",
                        columns: [{
                                data: 'id',
                                name: 'id'
                            },
                            {
                                data: 'no_of_suit',
                                name: 'no_of_suit'
                            },
                            {
                                data: 'suit_type',
                                name: 'suit_type'
                            },
                            {
                                data: 'delivered',
                                name: 'delivered'
                            },
                            {
                                data: 'rack',
                                name: 'rack'
                            },
                            {
                                data: 'total_price',
                                name: 'total_price'
                            },
                            {
                                data: 'paid_price',
                                name: 'paid_price'
                            },
                            {
                                data: 'booking_date',
                                name: 'booking_date'
                            },
                            {
                                data: 'delivery_date',
                                name: 'delivery_date'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ]
                    });
                });

                $(document).on('click', '.dlt', function() {
                    var id = $(this).data('id');
                    if (confirm("Are you sure you want to Delete this Order Quantity")) {
                        $.ajax({
                            type: "DELETE",
                            url: "Order/" + id,
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                $('#myTable').DataTable().ajax.reload();
                            }
                        });
                    }
                });

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Page Refreshed',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        @endsection
