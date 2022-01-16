@extends('admin.layouts.master')
@section('title', 'Coat List')

@section('content')
    <div class="container-fluid">
        <section class="content">
    
    <div class="row">
        <div class="col">
        <a class="btn btn-primary btn-sm mt-4 rounded-pill p-2" href="{{ route('coat.create') }}"><b>
                    ADD Coat</b> <i class="fas fa-user-plus"></i></a>
        </div>    
        <div class="col">
        <a href="" class="btn btn-success mt-4 rounded-pill p-2" style="float:right" onclick="window.print()">Print File</a>
        </div>
        </div>

            <!-- Trigger the modal with a button -->
            {{-- <button type="button" class="btn btn-info btn-lg">Open Modal</button> --}}

            <!-- Modal -->

            <!-- <div class="card mt-4" style=" border-radius: 50px;border-width: 6px;border-color: blue;"> -->
            <div class="card mt-4 p-3">
                <div class="card-header">
                    <h1 class="mt-3 "><b>Coat List</b> <i class="fas fa-user-friends"></i></h1>

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
                                <th>Type <i class="fas fa-list-ol"></i></th>
                                <th>لمبائی <i class="fas fa-tshirt"></i></th>
                                <th>تیرا <i class="fas fa-tshirt"></i></th>
                                <th>بازو <i class="fas fa-tshirt"></i></th>
                                <th>گلا <i class="fas fa-tshirt"></i></th>
                                <th>چہاتی <i class="fas fa-tshirt"></i></th>
                                <th> گیپ <i class="fas fa-tshirt"></i></th>
                                <th> کمر <i class="fas fa-tshirt"></i></th>
                                <th> ہپ <i class="fas fa-tshirt"></i></th>
                                <th> ہاف بیک <i class="fas fa-tshirt"></i></th>
                                <th>کراس بیک <i class="fas fa-tshirt"></i></th>
                                <th> ڈولا <i class="fas fa-tshirt"></i></th>
                                
                                <th>سائڈ چاک <i class="fas fa-tshirt"></i></th>
                                <th>نپیل سائز<i class="fas fa-tshirt"></i></th>
                                <th> گیری <i class="fas fa-tshirt"></i></th>
                                <th>اسٹائل  <i class="fas fa-tshirt"></i></th>
                               
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
                                data: 'length',
                                name: 'length'
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
                                data: 'chati',
                                name: 'chati'
                            },
                            {
                                data: 'gap',
                                name: 'gap'
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
                                data:'half_back',
                                name:'half_back'
                            },
    
                            {
                                data: 'cros_back',
                                name: 'cros_back'
                            },

                            {
                                data: 'dola',
                                name: 'dola'
                            },
                            {
                                data: 'side_chaak',
                                name: 'side_chaak'
                            },
                            {
                                data: 'napail_size',
                                name: 'napail_size'
                            },
                            {
                                data: 'gheri',
                                name: 'gheri'
                            },
                            {
                                data: 'style',
                                name: 'style'
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
                            url: "coat/" + id,
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
