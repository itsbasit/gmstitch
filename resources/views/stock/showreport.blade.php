@extends('admin.layouts.master')
@section('title', 'Stock Print')

@section('content')
<div>
    <a href="{{ route('stock.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
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
                <td> Stock ID: {{ $value->id }}</td> <br>
                <td> {{ $value->brand }}</td> <br>
                <td> {{ $value->brandtype }}</td> <br>
                {{-- <td>{{ $value->size }}</td> <br> --}}
                <td>Total Quantity: {{ $value->quantity }}</td> <br>
                <td> Buying Price: {{ $value->buyingprice }}</td> <br>
                <td>Selling Price: {{ $value->sellingprice }}</td> <br>

            </h3>
        </tr>
    @endforeach
    {{-- </tbody>
    </table> --}}
</div>
@endsection
@section('scripts')

@endsection
