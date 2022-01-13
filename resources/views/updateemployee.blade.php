@extends('admin.layouts.master')

@section('title', 'Update Stock')

@section('content')
    <a href="{{ route('employee.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>UPDATE EMPLOYEE</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('employee.update', $emp->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="">Name <i class="fas fa-user-tie"></i></label>
                        <input type="text" placeholder="Enter Employee Name" name="name" required class="form-control"
                            value="{{ $emp->name }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for=""">Father Name <i class="       fas fa-street-view"></i></label>
                        <input type=" text" placeholder="Enter Employee Father Name" name="fathername"
                            class="form-control" value="{{ $emp->fathername }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">CNIC# <i class="fas fa-id-card"></i></label>
                        <input type="text" placeholder="Enter Employee CNIC number" name="cnic" class="form-control"
                            value="{{ $emp->cnic }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Employee MOBILE <i class="fas fa-mobile-alt"></i></label>
                        <input type="number" placeholder="Enter Employee Mobile Number" name="mobile" class="form-control"
                            value="{{ $emp->mobile }}" required>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Refernce <i class="fas fa-map-pin"></i></label>
                        <input type="text" placeholder="Enter Employee refernce" name="reference" class="form-control"
                            value="{{ $emp->reference }}">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">ADDRESS <i class="fas fa-map-pin"></i></label>
                        <input type="text" placeholder="Enter Employee ADDRESS" name="address" class="form-control"
                            value="{{ $emp->address }}">
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
