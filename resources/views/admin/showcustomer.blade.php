@extends('admin.layouts.master')
@section('title', 'Customer Print Record')

@section('content')
    <div>
        <a href="{{ route('customer.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
    </div>
    <div class="container">
        <div class="text-right">
            <a href="" class="btn btn-danger p-2" onclick="window.print()">Print File</a>
        </div>

    </div>



    {{-- <table id="myTable" class="table text-center table-bordered mt-3">
        <thead class="bg-info">
            <tr>
                {{-- <th colspan="7">
                    <h3>
                        @php
                            // if (count($data) > 0) {
                            $date = date('F', strtotime(count($data) > 0 ? $data[0]->date : date('F')));
                            // }
                        @endphp
                        {{ $date }}
                    </h3>
                </th> --}}
    {{-- </tr>
            <tr>
                <th>Sr.NO</th>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Current Date</th>
                <th>Return Date</th>
                <th>Total Price</th>
            </tr>
        </thead> --}}
    {{-- <tbody> --}}
    <div class="card" style="border-radius: 25px">
        @php
            $count = 1;
        @endphp
        @foreach ($data as $value)
            @php
                $value->currentdate = date('d-m-Y', strtotime($value->currentdate));
                $value->returndate = date('d-m-Y', strtotime($value->returndate));
            @endphp
            <tr>
                <h3 class="text-center text-dark bg-white w-40">

                    <td>
                        <img src="{{ asset('/brandlogo.png') }}" alt="registerlogo" width="100" height="100">
                    </td> <br>
                    <td> Customer ID:{{ $value->id }}</td> <br>
                    <td> NAME: {{ $value->name }}</td> <br>
                    <td> Stitch Type : {{ $value->type1 }}</td> <br>
                    <td><i class="far fa-calendar-plus"></i> {{ $value->currentdate }}</td> <br>
                    <td><i class="fas fa-calendar-check"></i> {{ $value->returndate }}</td> <br>
                    <td>Advance Given: {{ $value->advance }}</td> <br>
                    <td>Discount {{ $value->discount }}</td> <br>
                    <td> Remaining Balance: {{ $value->total_price }}</td> <br>
                    <td> <i> THANK YOU FOR SHOPPING</i></td>
                </h3>
            </tr>
        @endforeach
        {{-- </tbody>
    </table> --}}
    </div>
@endsection
@section('scripts')

@endsection
