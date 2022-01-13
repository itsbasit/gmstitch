@extends('admin.layouts.master')
@section('title', 'Employee List')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <a class="btn btn-primary btn-sm mt-3 rounded-pill p-2" href="{{ route('employee.create') }}"><b>
                    ADD Employee</b> <i class="fas fa-user-plus"></i></a>

            <!-- Trigger the modal with a button -->
            {{-- <button type="button" class="btn btn-info btn-lg">Open Modal</button> --}}

            <!-- Modal -->

            <div class="card mt-4" style=" border-radius: 50px;border-width: 6px;border-color: blue;"">
                <div class="card-header">
                    <h1 class="mt-3 "><b>EMPLOYEE</b> <i class="fas fa-user-tie"></i> </h1>

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
                                <th>NAME <i class="fas fa-user-tie"></i></th>
                                <th>Father Name <i class="fas fa-street-view"></i></th>
                                <th>CNIC <i class="fas fa-id-card"></i></th>
                                <th>MOBILE <i class="fas fa-mobile-alt"></i></th>
                                <th>Reference <i class="fas fa-mobile-alt"></i></th>
                                <th>ADDRESS <i class="fas fa-map-marker-alt"></i></th>
                                <th>ACTION <i class="fas fa-info-circle"></i></th>
                                {{-- <th>Record <i class="fas fa-file-alt"></i></th> --}}
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($emp as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->fathername }}</td>
                                    <td>{{ $employee->cnic }}</td>
                                    <td>{{ $employee->mobile }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <input type="submit" value="Delete" class="btn btn-danger fas fa-trash-alt" />
                                        </form>

                                    </td>
                                    <td> <a class="btn btn-success "
                                            href="{{ route('employee.show', $employee->id) }}">Report</a></td>
                                </tr>
                            @endforeach
                        </tbody> --}}
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
                        ajax: "{{ route('employee.index') }}",
                        columns: [{
                                data: 'id',
                                name: 'id'
                            },
                            {
                                data: 'name',
                                name: 'name'
                            },
                            {
                                data: 'fathername',
                                name: 'fathername'
                            },
                            {
                                data: 'cnic',
                                name: 'cnic'
                            },
                            {
                                data: 'mobile',
                                name: 'mobile'
                            },
                            {
                                data: 'reference',
                                name: 'reference'
                            },
                            {
                                data: 'address',
                                name: 'address'
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
                    if (confirm("Are you sure you want to Delete this EMPLOYEE")) {
                        $.ajax({
                            type: "DELETE",
                            url: "employee/" + id,
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
