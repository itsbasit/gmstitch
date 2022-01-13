@extends('admin.layouts.master')
@section('title', 'Show User Report')

@section('content')

    <div>
        <a href="{{ route('employee.index') }}" class="btn btn-info mt-4 ml-4"><i class="fas fa-long-arrow-alt-left"></i>
            Return
            Back</a>
    </div>
    <div class="container">
        <section class="content">




            <h1 class="mt-3 bg-primary p-3 text-center">Employee Record</h1>

            <form action="">
                <div class="row">
                    <div class="col-md-5 mt-4">
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <input type="date" name="from" value="{{ date('Y-m-d') }}">&nbsp;
                            <input type="date" name="to" value="{{ date('Y-m-d') }}">&nbsp;
                            <input type="submit" value="View" class="btn btn-primary ml-2 text-center">
                        </form>
                    </div>
                    <div class="col-md-3">
                        {{-- <input type="submit" class="btn btn-primary" style="margin-top:32px" value="Search"> --}}
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-danger mt-4 rounded-pill text-right ml-5" onclick="window.print()">Print
                            Report</button>
                    </div>
                </div>
            </form>


            <table id="myTable" class="table text-center table-bordered mt-3">
                <thead class="bg-info">
                    <tr>
                        <th colspan="5">
                            {{-- <h3>
                                @php
                                    // if (count($data) > 0) {
                                    $date = date('F', strtotime(count($data) > 0 ? $data[0]->date : date('F')));
                                    // }
                                @endphp
                                {{ $date }}
                            </h3> --}}
                        </th>
                    </tr>
                    <tr>
                        <th>Sr.NO</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>No of Suits Stitched</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($data as $value)
                        @php
                            $value->date = date('d-m-Y', strtotime($value->date));
                        @endphp
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->date }}</td>
                            <td>{{ $value->no_of_suit_stitch }}</td>
                            {{-- <td>{{ $value->litre }}</td> --}}
                            <td>{{ $value->total_price }}</td>
                        </tr>
                    @endforeach
                    <tr class="bg-danger">
                        {{-- <td colspan="3" class="text-left">Balance </td> --}}
                        {{-- <td>{{ $data[0]->milkman()->first()->balance }}</td> --}}
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        // $(document).ready(function() {
        //     $('#myTable').DataTable();
        // });
    </script>
@endsection
