@extends('admin.layouts.master')
@section('title', 'Employee Record')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <a href="{{ route('employeerecord.create') }}"><button
                    class="btn btn-primary btn-sm mt-3 rounded-pill p-2"><b>ADD Employee Record </b> <i
                        class="fas fa-user-plus"></i></button></a>

    </div>


    <div class="card mt-4" style="border-radius : 25px">
        <div class="card-header">
            <h1 class="mt-3 "><b>EMPLOYEE Record</b> <i class="fas fa-user-friends"></i> </h1>

            <div class="mt-3">

            </div>
            {{-- flash sms --}}
            {{-- @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif --}}


            {{-- <button onclick="window.print()" class="btn btn-success">PRINT REPORT<i
                            class="fas fa-print"></i></button> --}}
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover text-center" id="myTable">
                <thead>
                    <tr>
                        <th><i class="fas fa-list-ol"></i> ID</th>
                        <th>NAME <i class="fas fa-user-tie"></i></th>
                        <th>DATE <i class="far fa-calendar-alt"></i></th>
                        <th>NO of Suit Stitch <i class="fas fa-list"></i></th>
                        <th>Customer ID <i class="fas fa-list"></i></th>
                        <th>Suit Type <i class="fas fa-list"></i></th>
                        <th>PAID <i class="fas fa-list"></i></th>
                        <th>Advance <i class="fas fa-money-bill-wave"></i></th>
                        <th>Remaining <i class="fas fa-money-bill-wave"></i></th>
                        <th>TOTAL PRICE <i class="fas fa-money-bill-wave"></i></th>
                        <th>ACTION <i class="fas fa-info-circle"></i></th>

                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($data as $employeerec)
                        <tr>
                            <td>{{ $employeerec->id }}</td>
                            <td>{{ $employeerec->name }}</td>
                            <td>{{ $employeerec->date }}</td>
                            {{-- <td>{{ $employeerec->mobile }}</td> --}}
                {{-- <td>{{ $employeerec->total_price }}</td>
                            <td>
                                <form action="{{ route('employeerecord.destroy', $employeerec->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Delete" class="btn btn-danger fas fa-trash-alt" />
                                </form>

                            </td>

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
                ajax: "{{ route('employeerecord.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'employee-name',
                        name: 'employee-name'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'no_of_suit_stitch',
                        name: 'no_of_suit_stitch'
                    },
                    {
                        data: 'customer_id',
                        name: 'customer_id'
                    },
                    {
                        data: 'suit_type',
                        name: 'suit_type'
                    },
                    {
                        data: 'paid',
                        name: 'paid'
                    },
                    {
                        data: 'advance',
                        name: 'advance'
                    },
                    {
                        data: 'remaining',
                        name: 'remaining'
                    },
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
            if (confirm("Are you sure you want to Delete this EMPLOYEE")) {
                $.ajax({
                    type: "DELETE",
                    url: "employeerecord/" + id,
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
