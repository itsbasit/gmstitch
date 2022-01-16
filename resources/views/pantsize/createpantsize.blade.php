@extends('admin.layouts.master')

@section('title', 'Create PantSize')

@section('content')
    <a href="{{ route('pantsize.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3 rounded-pill p-2">
            <b>Back To
                List</b> </button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Create PantSize </b><i class="fas fa-user-check"></i></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">
            <form action="{{ route('pantsize.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf

                        <div class="form-group col-lg-4">
                            <label for="">CustomerID <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer ID" name="customerID" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Name <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Name" name="name" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Mobile <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Mobile" name="mobile" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کمر <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="kamar" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ہپ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="hip" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="length" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> باڈی  <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="body" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تہائ   <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="thai" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گوڈا  <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="goda" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">موری <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="mori" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">فرنٹ پاکٹ  <i class="fas fa-ruler"></i></label>
                           <select class="form-control" name="front_pocket">
                                <option value="سٹریٹ پاکٹ">سٹریٹ پاکٹ</option>
                                <option value="کراس پاکٹ">کراس پاکٹ</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">بیک پاکٹ  <i class="fas fa-ruler"></i></label>
                            <select class="form-control" name="back_pocket">
                                <option value="سنگل پاکٹ">سنگل پاکٹ</option>
                                <option value="ڈبل پاکٹ">ڈبل پاکٹ</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">پانچہ <i class="fas fa-ruler"></i></label>
                            <select name="pancha" class="form-control custom-slect">
                                <option value="ترپائی">ترپائی</option>
                                <option value="سلائی">سلائی</option>
                                
                            </select>
                        </div> 

                    </div>
            </form>

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
        $(".multiple-select").select2({
            // maximumSelectionLength: 2
        });
    </script>

@endsection
