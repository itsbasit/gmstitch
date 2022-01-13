@extends('admin.layouts.master')

@section('title', 'Update Ledger')

@section('content')
    <a href="{{ route('ledger.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Update Ledger</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('ledger.update', $led->id) }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf
                        @method('put')
                        <div class="form-group col-lg-4">
                            <label for=""">Purpose 1<i class="   fas fa-street-view"></i></label>
                            <input type="text" name="purpose1" class="form-control" required
                                value="{{ $led->purpose1 }}">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Purpose 2 <i class="fas fa-id-card"></i></label>
                            <input type="text" name="purpose2" class="form-control" required
                                value="{{ $led->purpose2 }}">
                        </div>

                        <!--<div class="form-group col-lg-4">-->
                        <!--    <label for="">Purpose 3 <i class="fas fa-mobile-alt"></i></label>-->
                        <!--    <input type="text" name="purpose3" class="form-control" required-->
                        <!--        value="{{ $led->purpose3 }}">-->
                        <!--</div>-->
                        <!--<div class="form-group col-lg-4">-->
                        <!--    <label for="">Purpose 4<i class="fas fa-mobile-alt"></i></label>-->
                        <!--    <input type="text" name="purpose4" class="form-control" required-->
                        <!--        value="{{ $led->purpose4 }}">-->
                        <!--</div>-->
                        <!--<div class="form-group col-lg-4">-->
                        <!--    <label for="">Purpose 5 <i class="fas fa-mobile-alt"></i></label>-->
                        <!--    <input type="text" name="purpose5" class="form-control" required-->
                        <!--        value="{{ $led->purpose5 }}">-->
                        <!--</div>-->

                        <div class="form-group col-lg-4">
                            <label for="">IN <i class="fas fa-map-pin"></i></label>
                            <input type="number" placeholder="Enter Debit Price" name="debit" class="form-control"
                                value="{{ $led->debit }}">
                        </div>

                        <div class="  form-group col-lg-4">
                            <label for="">OUT <i class="fas fa-map-pin"></i></label>
                            <input type="number" placeholder="Enter Credit Price" name="credit" class="form-control"
                                value="{{ $led->credit }}">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">DATE <i class="fas fa-map-pin"></i></label>
                            <input type="date" name="date" class="form-control" value="{{ $led->date }}">
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
