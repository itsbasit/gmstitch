@extends('admin.layouts.master')

@section('title', 'Update Invoice')

@section('content')
    <a href="{{ route('invoice.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>UPDATE INVOICE</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('invoice.update', $invoice->id) }}" method="POST">
                @csrf
                @method('put')
            <div class="row">
                <div class="form-group col-lg-6">
                            <label for="">Customer ID <i class="fas fa-user-tie"></i></label>
                            <select id="customerID" name="customerID" class="form-control">
                            <option>--Select Customer ID--</option>
                            @foreach($data as $id)
                            <option value="{{$id->customerID}}" {{$invoice->customerID ? 'selected' : ''}}>{{$id->customerID}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for=""">Name <i class="fas fa-street-view"></i></label>
                            <input type="text" placeholder="Enter Customer Name" name="name"
                                class="form-control" id="name" value={{$invoice->name}} readonly>
                        </div>

                    
                        <div class="form-group col-lg-6">
                            <label for="">Booking Date <i class="fas fa-calendar-plus"></i></label>
                            <input type="date" placeholder="Enter stitcher Name" name="currentdate" class="form-control"
                                min="1997-31-18" max="2030-31-12" value={{$invoice->bookingDate}}>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Delivery Date <i class="fas fa-calendar-check"></i></label>
                            <input type="date" placeholder="Enter stitcher Name" name="returndate" class="form-control" value={{$invoice->deliveryDate}}>
                        </div>

                       <div class="form-group col-lg-6">
                            <label for="">Rack <i class="fas fa-calendar-check"></i></label>
                            <input type="number" placeholder="Enter stitcher Name" name="rack" class="form-control"
                                required value={{$invoice->rack}}>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">ADVANCE <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="advance" class="form-control" value={{$invoice->advance}}>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Discount <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="discount" class="form-control" value={{$invoice->discount}}>
                        </div>

                    </div>
         
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-md" value="Update">
            </div>

            </form>
        </div>
    </div>


@endsection


@section('scripts')
    <script>
        $("#customerID").on('change', function(){

            var customerID = this.value;
            // console.log('customerID', customerID);

            let _url = '/getCustomer';
            let _token   = $('meta[name="csrf-token"]').attr('content');

            
            $.ajax({
            type: "POST",
            url: _url,
            data: {
                id:customerID,
                _token: _token
            },
            success: function (response) {
             $("#name").val(response);
            },
            // error: function (data) {
            //     console.log(data);
            // }
        });
        })
      
    </script>

@endsection