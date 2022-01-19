@extends('admin.layouts.master')

@section('title', 'Update Waistcoat')

@section('content')
    <a href="{{ route('invoice.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>UPDATE Waistcoat</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('waistcoat.update', $waistcoat->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="">ID <i class="fas fa-user-tie"></i></label>
                            <input type="number" placeholder="Enter Customer ID" name="customerID" value="{{$waistcoat->customerID}}" required class="form-control">
                        </div>
                      
                        <div class="form-group col-lg-4">
                            <label for="">Name <i class="fas fa-user-tie"></i></label>
                            <input type="text" value="{{$waistcoat->name}}"  placeholder="Enter Customer Name" name="name" required class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Mobile <i class="fas fa-user-tie"></i></label>
                            <input type="text"  value="{{$waistcoat->mobile}}" placeholder="Enter Customer Mobile" name="mobile" required class="form-control">
                        </div>
                     
                        <div class="form-group col-lg-4">
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="lambai" value="{{$waistcoat->length}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تیرا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$waistcoat->tira}}" name="tira" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گلا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gala" value="{{$waistcoat->gala}}" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">چھاتی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="chati" value="{{$waistcoat->chati}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">پیٹ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="pait" value="{{$waistcoat->pait}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کمر <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="kamar" value="{{$waistcoat->kamar}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ہپ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="hip" value="{{$waistcoat->hip}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گیپ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gap"
                                class="form-control" value="{{$waistcoat->gap}}">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">بین <i class="fas fa-ruler"></i></label>
                        <select name="bain" class="form-control custom-slect">
                        <!-- <option value="گول "> گول </option> -->
                        <option {{$waistcoat->bain == 'گول' ? 'selected': ''}} value="گول "> گول </option>
                        <option {{$waistcoat->bain == 'چورس' ? 'selected': ''}} value="چورس "> چورس </option>
                        </select>
                        </div>

                        
                        
                        <div class="form-group col-lg-4">
                            <label for="">گھیرا <i class="fas fa-ruler"></i></label>
                            <select name="gheri" class="form-control custom-slect">
                                <option selected value="{{$waistcoat->gheri}}">{{$waistcoat->gheri}}</option>
                                <option value="گول گھیرا "> گول گھیرا </option>
                                <option value="سیدھا گھیرا">سیدھا گھیرا </option>
                                
                            </select>
                        </div> 

                       
                       

                        <div class="form-group col-lg-4">
                            <label for="">ڈیزائن <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$waistcoat->design}}" name="design" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کڑھائی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$waistcoat->karhai}}" name="karhai" class="form-control">
                        </div>
                       


                    </div>

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