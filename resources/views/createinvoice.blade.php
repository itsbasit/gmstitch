@extends('admin.layouts.master')

@section('title', 'Create Invoice')

@section('content')
    <a href="{{ route('invoice.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Create Invoice</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('invoice.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf

                        <div class="form-group col-lg-6">
                            <label for="">Invoice For? <i class="fas fa-user-tie"></i></label>
                            <select id="invoice_for" name="invoice_for" class="form-control">
                            <option>--Select One--</option>
                            <option value="customer">Customer</option>
                            <option value="waistcoat">WaistCoat</option>
                            <option value="pant">Pant Size</option>
                            <option value="shirt">Shirt</option>
                            <option value="coat">Coat</option>
                            </select>
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="">Customer ID <i class="fas fa-user-tie"></i></label>
                            <select id="customerID" name="customerID" class="form-control" required>
                            <option>--Select Customer ID--</option>
                           
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for=""">Name <i class="fas fa-street-view"></i></label>
                            <input type="text" placeholder="Enter Customer Name" name="name"
                                class="form-control" id="name" readonly>
                        </div>

                       
                      
                        <div class="form-group col-lg-6">
                            <label for="">Booking Date <i class="fas fa-calendar-plus"></i></label>
                            <input type="date" placeholder="Enter stitcher Name" name="currentdate" class="form-control"
                                min="1997-31-18" max="2030-31-12">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Delivery Date <i class="fas fa-calendar-check"></i></label>
                            <input type="date" placeholder="Enter stitcher Name" name="returndate" class="form-control">
                        </div>

                  

                        <div class="form-group col-lg-6">
                            <label for="">ADVANCE <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="advance" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Discount <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="discount" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Total <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="total" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Remaining <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="remaining" class="form-control">
                        </div>

                    </div>
         
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-md" value="Submit">
            </div>

            </form>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $("#customerID").on('change', function(){
            var customerID = this.value;

            let _url = '/getCustomer';
            let _token   = $('meta[name="csrf-token"]').attr('content');
            let type = $("#invoice_for").val();
            
            $.ajax({
            type: "POST",
            url: _url,
            data: {
                id:customerID,
                type:type,
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


        $("#invoice_for").on('change', function(){
            var type = this.value;
            // alert(type);
            let _url = '/getinvoice';
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
            type: "POST",
            url: _url,
            data: {
                type:type,
                _token: _token
            },
            success: function (response) { 
                if(response == 'empty'){
                    $('#customerID').html('<option>--Select Customer ID--</option>');
                    alert('Not customer found for this category');
                } else {
                $('#customerID').html('<option>--Select Customer ID--</option>');
                $('#customerID').append($('<option>', { 
                value: response,
                text : response 
                }));
                }
               
            },
            // error: function (data) {
            //     console.log(data);
            // }
        });
        })
      
    </script>

@endsection