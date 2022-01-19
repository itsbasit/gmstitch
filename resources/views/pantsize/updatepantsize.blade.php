@extends('admin.layouts.master')

@section('title', 'Update PantSize')

@section('content')
    <a href="{{ route('pantsize.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3 rounded-pill p-2">
            <b>Back To
                List</b> </button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Update PantSize </b><i class="fas fa-user-check"></i></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">
            <form action="{{ route('pantsize.update', $data->id) }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf
                        @method('PUT')

                        <div class="form-group col-lg-4">
                            <label for="">CustomerID <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->customerID}}" placeholder="Enter Customer ID" name="customerID" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Name <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->name}}" placeholder="Enter Customer Name" name="name" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Mobile <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->mobile}}" placeholder="Enter Customer Mobile" name="mobile" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کمر <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->kamar}}" placeholder="Enter Customer Size" name="kamar" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ہپ <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->hip}}" placeholder="Enter Customer Size" name="hip" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->length}}" name="length" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> باڈی  <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->body}}" placeholder="Enter Customer Size" name="body" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تہائ   <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->thai}}" placeholder="Enter Customer Size" name="thai" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گوڈا  <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->goda}}" placeholder="Enter Customer Size" name="goda" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">موری <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$data->mori}}" placeholder="Enter Customer Size" name="mori" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">فرنٹ پاکٹ  <i class="fas fa-ruler"></i></label>
                           <select class="form-control" name="front_pocket">
                               <option value="{{$data->front_pocket}}" selected>{{$data->front_pocket}}</option>
                                <option value="سٹریٹ پاکٹ">سٹریٹ پاکٹ</option>
                                <option value="کراس پاکٹ">کراس پاکٹ</option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">بیک پاکٹ  <i class="fas fa-ruler"></i></label>
                            <select class="form-control" name="back_pocket">
                            <option value="{{$data->back_pocket}}" selected>{{$data->back_pocket}}</option>
                                <option value="سنگل پاکٹ">سنگل پاکٹ</option>
                                <option value="ڈبل پاکٹ">ڈبل پاکٹ</option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">پانچہ <i class="fas fa-ruler"></i></label>
                            <select name="pancha" class="form-control custom-slect">
                            <option value="{{$data->pancha}}" selected>{{$data->pancha}}</option>
                                <option value="ترپائی">ترپائی</option>
                                <option value="سلائی">سلائی</option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                                
                            </select>
                        </div> 

                    </div>
            </form>

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
        $(".multiple-select").select2({
            // maximumSelectionLength: 2
        });
    </script>

@endsection
