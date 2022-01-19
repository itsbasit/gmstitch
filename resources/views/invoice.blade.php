@extends('admin.layouts.master')
@section('title', 'Invoice')

@section('content')
    <div class="container-fluid">
        <section class="content">
        

            <div class="card mt-4 p-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                        <a class="btn btn-primary btn-sm mt-4 rounded-pill p-2" href="{{ route('invoice.create') }}"><b>
                    ADD Invoice</b> <i class="fas fa-user-plus"></i></a>
                        <h1 class="mt-3 "><b>INVOICE</b> <i class="fas fa-file-invoice-dollar"></i> </h1>
                        </div>

                        
                    </div>
                    
                    
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


                    
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover text-center" id="myTable">
                        <thead>
                            <tr>
                                <!-- <th>Sr.No</th> -->
                                <th>Cusomer ID </th>
                                <th>Name</th>
                                <th>Booking Date </th>
                                <th>Delivery Date</th>
                                <th>Advance </th>
                                <th>Discount</th>
                                <th>Action</th>
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

                        ajax: "{{ route('invoice.index') }}",
                        columns: [
            // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'customerID', name: 'customerID'},
            {data: 'name', name: 'name'},
            {data: 'bookingDate', name: 'bookingDate'},
            {data: 'deliveryDate', name: 'deliveryDate'},   
            {data: 'advance', name: 'advance'},
            {data: 'discount', name: 'discount'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
                    
                    });
                });

                $(document).on('click', '.dlt', function() {
                    var id = $(this).data('id');

                    if (confirm("Are you sure you want to Delete this Customer")) {
                        $.ajax({
                            type: "DELETE",
                            url: "invoice/" + id,
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