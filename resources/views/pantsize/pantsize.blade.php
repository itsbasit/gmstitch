@extends('admin.layouts.master')
@section('title', 'Coat List')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <a class="btn btn-primary btn-sm mt-4 rounded-pill p-2" href="{{ route('coat.create') }}"><b>
                    ADD Coat</b> <i class="fas fa-user-plus"></i></a>

            <!-- Trigger the modal with a button -->
            {{-- <button type="button" class="btn btn-info btn-lg">Open Modal</button> --}}

            <!-- Modal -->

            <!-- <div class="card mt-4" style=" border-radius: 50px;border-width: 6px;border-color: blue;"> -->
            <div class="card mt-4 p-3">
                <div class="card-header">
                    <h1 class="mt-3 "><b>Coat</b> <i class="fas fa-user-friends"></i></h1>

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
                                <th><i class="fas fa-list-ol"></i> Type</th>
                                <th>کمر <i class="fas fa-tshirt"></i></th>
                                <th> ہپ <i class="fas fa-tshirt"></i></th>
                                <th> باڈی <i class="fas fa-tshirt"></i></th>
                                <th> تہائ <i class="fas fa-tshirt"></i></th>
                                <th>لمبائی <i class="fas fa-tshirt"></i></th>
                                <th>گوڈا <i class="fas fa-tshirt"></i></th>
                                <th>موری<i class="fas fa-tshirt"></i></th>
                                <th>فرنٹ پاکٹ <i class="fas fa-tshirt"></i></th>
                                <th>بیک پاکٹ <i class="fas fa-tshirt"></i></th>
                                <th>پانچہ <i class="fas fa-tshirt"></i></th>
                                <th>Action <i class="fas fa-info-circle"></i></th>
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

                        ajax: "{{ route('coat.index') }}",
                        columns: [
                            {
                                data: 'type',
                                name: 'type'
                            },
                            {
                                data: 'kamar',
                                name: 'kamar'
                            },
                            {
                                data: 'hip',
                                name: 'hip'
                            },

                            {
                                data: 'length',
                                name: 'length'
                            },
                            
                            {
                                data: 'body',
                                name: 'body'
                            },
                            {
                                data: 'thai',
                                name: 'thai'
                            },
                            {
                                data: 'goda',
                                name: 'goda'
                            },
                            {
                                data: 'mori',
                                name: 'mori'
                            },
                            {
                                data: 'front_pocket',
                                name: 'front_pocket'
                            },

                            {
                                data:'back_pocket',
                                name:'back_pocket'
                            },
    
                            {
                                data: 'pancha',
                                name: 'pancha'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            }
                        ]
                    });
                });

                $(document).on('click', '.dlt', function() {
                    var id = $(this).data('id');
                    if (confirm("Are you sure you want to Delete this Customer")) {
                        $.ajax({
                            type: "DELETE",
                            url: "waistcoat/" + id,
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