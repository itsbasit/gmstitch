@extends('admin.layouts.master')

@section('title', 'Create Customer')

@section('content')
    <a href="{{ route('waistcoat.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3 rounded-pill p-2">
            <b>Back To
                List</b> </button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Create Customer </b><i class="fas fa-user-check"></i></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">
            <form action="{{ route('waistcoat.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf
                        <div class="form-group col-lg-4">
                            <label for="">ID <i class="fas fa-user-tie"></i></label>
                            <input type="number" placeholder="Enter Customer ID" name="customerID" required class="form-control">
                        </div>
                      

                     
                        <div class="form-group col-lg-4">
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="lambai" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تیرا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tira" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گلا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gala" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">چھاتی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="chati" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">پیٹ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="pait" class="form-control">
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
                            <label for="">گیپ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gap"
                                class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">بین <i class="fas fa-ruler"></i></label>
                        <select name="bain" class="form-control custom-slect">
                        <option value="گول "> گول </option>
                        <option value="چورس "> چورس </option>
                        </select>
                        </div>

                        
                        
                        <div class="form-group col-lg-4">
                            <label for="">گھیرا <i class="fas fa-ruler"></i></label>
                            <select name="gheri" class="form-control custom-slect">
                                <option value="گول گھیرا "> گول گھیرا </option>
                                <option value="سیدھا گھیرا">سیدھا گھیرا </option>
                                
                            </select>
                        </div> 
                       

                        <div class="form-group col-lg-4">
                            <label for="">ڈیزائن <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="design" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کڑھائی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="karhai" class="form-control">
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
