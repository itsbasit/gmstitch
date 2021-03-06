@extends('admin.layouts.master')
@section('title', 'Customer List')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <a class="btn btn-primary btn-sm mt-4 rounded-pill p-2" href="{{ route('customer.create') }}"><b>
                    ADD Customer</b> <i class="fas fa-user-plus"></i></a>

            <!-- Trigger the modal with a button -->
            {{-- <button type="button" class="btn btn-info btn-lg">Open Modal</button> --}}

            <!-- Modal -->

            <!-- <div class="card mt-4" style=" border-radius: 50px;border-width: 6px;border-color: blue;"> -->
            <div class="card mt-4 p-3">
                <div class="card-header">
                    <h1 class="mt-3 "><b>Customer</b> <i class="fas fa-user-friends"></i></h1>

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
                                <th><i class="fas fa-list-ol"></i> Customer ID</th>
                                <th>NAME <i class="fas fa-user-tie"></i></th>
                                <th>MOBILE <i class="fas fa-mobile-alt"></i></th>
                                <th>TYPE <i class="fas fa-tshirt"></i></th>
                                <th>???????????? <i class="fas fa-tshirt"></i></th>
                                <th>????????<i class="fas fa-tshirt"></i></th>
                                <th>????????<i class="fas fa-tshirt"></i></th>
                                <th>??????<i class="fas fa-tshirt"></i></th>
                                <th>?????????? <i class="fas fa-tshirt"></i></th>
                                <th>?????????? <i class="fas fa-tshirt"></i></th>
                                <th>?????? <i class="fas fa-tshirt"></i></th>
                                <th>?????? <i class="fas fa-tshirt"></i></th>
                                <th> ???? <i class="fas fa-tshirt"></i></th>
                                <th> ?????????????????????? <i class="fas fa-tshirt"></i></th>
                                <th>?????????? ???????? <i class="fas fa-tshirt"></i></th>
                                <th>?????????? ?????????? <i class="fas fa-tshirt"></i></th>
                                <th>?????????? ?????????? <i class="fas fa-tshirt"></i></th>
                                <th> ?????????? <i class="fas fa-tshirt"></i></th>
                                <th>???????? <i class="fas fa-tshirt"></i></th>
                                <th>???????????????? <i class="fas fa-tshirt"></i></th>
                                <!-- <th>?????????? ?????????? <i class="fas fa-tshirt"></i></th> -->
                                <th>  ?????? <i class="fas fa-tshirt"></i></th>
                               
                                
                                <th>???? <i class="fas fa-tshirt"></i></th> 
                                <th>???? ???????? <i class="fas fa-tshirt"></i></th> 
                                <th>????  <i class="fas fa-tshirt"></i></th> 
                                <th>?????????? <i class="fas fa-tshirt"></i></th>
                                <th>Patti <i class="fas fa-tshirt"></i></th>
                                <th>???????? ?????? <i class="fas fa-tshirt"></i></th>
                                <th> ???????? ??????<i class="fas fa-tshirt"></i></th>
                                <th>???????? ?????? ???????????? <i class="fas fa-tshirt"></i></th>
                                <th>?????????? <i class="fas fa-tshirt"></i></th>
                                <th> ?????????? ???????? <i class="fas fa-tshirt"></i></th>
                                <th>???????? ???????? <i class="fas fa-tshirt"></i></th>
                                <th>???????? <i class="fas fa-tshirt"></i></th>
                                <th>???????? ???????? <i class="fas fa-envelope"></i></th> 
                                <th>???????? ?????????? <i class="fas fa-envelope"></i></th>
                                <th>???????????? <i class="fas fa-tshirt"></i></th>
                                <th>???????????? <i class="fas fa-tshirt"></i></th>
                                <th>Tayar1 <i class="fas fa-tshirt"></i></th>
                                <th>Tayar2 <i class="fas fa-tshirt"></i></th>
                                <th>tayar3 <i class="fas fa-tshirt"></i></th>
                                <!-- <th>tayar4 <i class="fas fa-tshirt"></i></th> -->
                                <th>Cutter <i class="fas fa-users"></i></th>
                                <th>Stitcher <i class="fas fa-users"></i></th>
                                <th>Entered by <i class="fas fa-envelope"></i></th>
                                <!-- <th>Booking Date <i class="fas fa-calendar-plus"></i></th>
                                <th>Delivery Date <i class="fas fa-calendar-check"></i></th>
                                <th>Rack Number<i class="fas fa-calendar-check"></i></th>
                                <th>Advance Payment<i class="fas fa-money-bill-wave"></i></th>
                                <th>Discount<i class="fas fa-money-bill-wave"></i></th> -->
                                <th>Price <i class="fas fa-money-bill-wave"></i></th>
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

                        ajax: "{{ route('customer.index') }}",
                        columns: [{
                                data: 'customerID',
                                name: 'customerID'
                            },
                            {
                                data: 'name',
                                name: 'name'
                            },
                            {
                                data: 'mobile',
                                name: 'mobile'
                            },

                            {
                                data: 'type1',
                                name: 'type1'
                            },
                            {
                                data: 'lambai',
                                name: 'lambai'
                            },

                            {
                                data: 'tira',
                                name: 'tira'
                            },

                            {
                                data: 'bazu',
                                name: 'bazu'
                            },

                            {
                                data: 'gala',
                                name: 'gala'
                            },

                            {
                                data: 'astin',
                                name: 'astin'
                            },
                            {
                                data: 'chatti',
                                name: 'chatti'
                            },
                            {
                                data: 'pait',
                                name: 'pait'
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
                                data: 'shalwarlength',
                                name: 'shalwarlength'
                            },
                            {
                                data: 'shalwarpocket',
                                name: 'shalwarpocket'
                            },
                            {
                                data: 'shalwarghera',
                                name: 'shalwarghera'
                            },
                            {
                                data: 'poncha',
                                name: 'poncha'
                            },
                            {
                                data: 'poncha2',
                                name: 'poncha2'
                            },
                            {
                                data: 'calar',
                                name: 'calar'
                            },
                            {
                                data: 'colar',
                                name: 'colar'
                            },
                            {
                                data: 'bain',
                                name: 'bain'
                            },
                            {
                                data: 'cuff',
                                name: 'cuff'
                            },

                            {
                                data: 'cuffsize',
                                name: 'cuffsize'
                            },

                            {
                                data: 'cuff2',
                                name: 'cuff2'
                            },

                            {
                                data: 'gheri',
                                name: 'gheri'
                            },

                            {
                                data: 'patti',
                                name: 'patti'
                            },
                            {
                                data: 'side_chaak',
                                name: 'side_chaak'
                            },
                            {
                                data: 'front_patti',
                                name: 'front_patti'
                            },
                            {
                                data: 'front_patti_design',
                                name: 'front_patti_design'
                            },
                            {
                                data: 'silai',
                                name: 'silai'
                            },
                            {
                                data: 'side_pocket',
                                name: 'side_pocket'
                            },
                            {
                                data: 'front_pocket',
                                name: 'front_pocket'
                            },

                            {
                                data: 'moda',
                                name: 'moda'
                            },
                            {
                                data: 'konisize',
                                name: 'konisize',
                            },
                            {
                                data: 'downshoulder',
                                name: 'downshoulder'
                            },

                            {
                                data: 'design',
                                name: 'design'
                            },

                            {
                                data: 'karhai',
                                name: 'karhai'
                            },

                            {
                                data: 'tayar1',
                                name: 'tayar1'
                            },

                            {
                                data: 'tayar2',
                                name: 'tayar2'
                            },

                            {
                                data: 'tayar3',
                                name: 'tayar3'
                            },
                            
                            {
                                data: 'cutter',
                                name: 'cutter'
                            },

                            {
                                data: 'stitcher',
                                name: 'stitcher'
                            },

                            {
                                data: 'enteredby',
                                name: 'enteredby'
                            },

                            // {
                            //     data: 'currentdate',
                            //     name: 'currentdate'
                            // },

                            // {
                            //     data: 'returndate',
                            //     name: 'returndate'
                            // },

                            // {
                            //     data: 'rack',
                            //     name: 'rack'
                            // },

                            // {
                            //     data: 'advance',
                            //     name: 'advance'
                            // },

                            // {
                            //     data: 'discount',
                            //     name: 'discount'
                            // },
                            
                            {
                                data: 'total_price',
                                name: 'total_price'
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
                    if (confirm("Are you sure you want to Delete this Customer")) {
                        $.ajax({
                            type: "DELETE",
                            url: "customer/" + id,
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
