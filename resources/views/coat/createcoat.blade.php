@extends('admin.layouts.master')

@section('title', 'Create Coat')

@section('content')
    <a href="{{ route('coat.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3 rounded-pill p-2">
            <b>Back To
                List</b> </button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Create Coat </b><i class="fas fa-user-check"></i></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">
            <form action="{{ route('coat.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf

                        <div class="form-group col-lg-4">
                            <label for="">Customer ID <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="enter customer ID" name="customerID" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Name <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Customer Name" name="name" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Mobile <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Mobile" name="mobile" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">Type <i class="fas fa-ruler"></i></label>
                        <select name="type" class="form-control custom-slect">
                        <option value="کوٹ "> کوٹ </option>
                        <option value="پرنس کوٹ "> پرنس کوٹ </option>
                        <option value="شیروانی"> شیروانی</option>  
                        <option value="کوئ نہیں">کوئ نہیں</option> 
                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="length" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تیرا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tira" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">بازو <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="bazu" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گلا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gala" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">چہاتی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="chati" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گیپ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gap" class="form-control">
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
                            <label for="">ہاف بیک <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="half_back" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کراس بیک <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="cros_back" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> ڈولا  <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="dola" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">  سائڈچاک  <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="side_chaak" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">نپیل سائز <i class="fas fa-ruler"></i></label>
                        <select name="napail_size" class="form-control custom-slect">
                        <option value="2 1/2''">2 1/2'' </option>
                        <option value="2 1/3''">2 1/3'' </option>
                        <option value="3''"> 3'' </option>
                        <option value="3.15''"> 3.15'' </option>
                        <option value="کوئ نہیں">کوئ نہیں</option>
                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گھیرا <i class="fas fa-ruler"></i></label>
                            <select name="gheri" class="form-control custom-slect">
                                <option value="گول گھیرا "> گول گھیرا </option>
                                <option value="سیدھا گھیرا">سیدھا گھیرا </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div> 

                        <div class="form-group col-lg-4">
                            <label for="">Style <i class="fas fa-ruler"></i></label>
                            <select name="style" class="form-control custom-slect">
                                <option value="پیک نپیل">پیک نپیل</option>
                                <option value="نوچ نپیل">نوچ نپیل</option>
                                <option value="ڈبل پریس">ڈبل پریس </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div> 

                        <div class="form-group col-lg-4">
                            <label for="">بٹن <i class="fas fa-ruler"></i></label>
                            <select name="button" class="form-control custom-slect">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
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
