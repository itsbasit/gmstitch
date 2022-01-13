@extends('admin.layouts.master')

@section('title', 'Update Employee Data')

@section('content')
    <a href="{{ route('employeerecord.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3"><b>Back To
                List</b></button></a>
    <div class="container-fluid ">
        <h1 class="p-2"><b>+Update Employee Data</b></h1>
    </div><br>
    <div class="container-fluid">



        <div class="card" style="border-radius: 30px">

            <div class="card-body">
                <form action="{{ route('employeerecord.update', $emp->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">

                        <div class="form-group col-lg-6">
                            <label for="">NAME <i class="fas fa-user-tie"></i></label>
                            <select name="employee_id" class="form-control">
                                <option value="">Select Name</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="birthday">DATE <i class="far fa-calendar-alt"></i></label>
                            <input id="" class="form-control" type="date" name="date" placeholder="Enter Milk Date"
                                required autocomplete="off" value="{{ $emp->date }}">
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-lg-6">
                            <label for="">NO Of Suit Stitch by Employee <i class="far fa-calendar-alt"></i></label>
                            <input id="" class="form-control" type="text" name="no_of_suit_stitch"
                                placeholder="Enter Suits stitched" required autocomplete="off"
                                value="{{ $emp->no_of_suit_stitch }}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Customer ID <i class="far fa-calendar-alt"></i></label>
                            <input id="" class="form-control" type="text" name="customer_id"
                                placeholder="Enter Customer ID" required autocomplete="off"
                                value="{{ $emp->customer_id }}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Suit Type <i class="far fa-calendar-alt"></i></label>
                            <select name="suit_type" class="form-control select multiple-select" multiple required>
                                <option value="shalwarkameezsimple">Shalwar Kameez (Simple)</option>
                                <option value="shalwarkameez(Double silai)">Shalwar Kameez (Double silai)</option>
                                <option value="shalwarkameez(triple silai)">Shalwar Kameez (Triple silai)</option>
                                <option value="shalwarkameez(Double silai Anchor)">Shalwar Kameez (Double silai Anchor)
                                </option>
                                <option value="shalwarkameez(triple silai Anchor)">Shalwar Kameez (Triple silai Anchor)
                                </option>
                                <option value="waskit">waskit</option>
                                <option value="pent">pent</option>
                                <option value="Pentcoat 2 piece">Pent Coat (2 Piece)</option>
                                <option value="Pentcoat 3 piece">Pent Coat (3 Piece)</option>
                                <option value="Shirt">Shirt</option>
                                <option value="Safari Suit">Safari Suit</option>
                                <option value="Sherwani">Sherwani</option>
                                <option value="Tarkashi poncha">Tarkashi Poncha</option>
                                <option value="kurta">Kurta</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Paid <i class="far fa-calendar-alt"></i></label>
                            <select name="paid" class="form-control custom-select" id="">
                                <option value="" disabled selected hidden> Paid </option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for=""> Advance </label>
                            <input id="" class="form-control" type="text" name="advance"
                                placeholder="Enter Advance of Customer" autocomplete="off" value="{{ $emp->advance }}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">TOTAL PRICE <i class="fas fa-money-bill-wave"></i></label>
                            <input id="" class="form-control" type="text" name="total_price"
                                placeholder="Enter Total Amount" required autocomplete="off"
                                value="{{ $emp->total_price }}">
                        </div>
                    </div>


                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-md" value="Submit">
                    </div>

                </form>
            </div>
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
