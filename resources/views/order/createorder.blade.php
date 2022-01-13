@extends('admin.layouts.master')

@section('title', 'Create Order')

@section('content')
    <a href="{{ route('order.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Create Order</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf
                        <div class="form-group col-lg-6">
                            <label for="">ID <i class="fas fa-user-tie"></i></label>
                            <input type=" text" placeholder="Enter Order ID" name="id" class="form-control" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for=""">NO of Suit Stitch<i class="    fas fa-street-view"></i></label>
                            <input type=" text" placeholder="Enter Brand Sub Type Name" name="no_of_suit"
                                class="form-control" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Suit Type <i class="fas fa-id-card"></i></label>
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
                            <label for="">Delivered <i class="fas fa-mobile-alt"></i></label>
                            <select name="delivered" class="form-control custom-select" id="">
                                <option value="" disabled selected hidden> Delivered</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Rack <i class="fas fa-map-pin"></i></label>
                            <input type="number" placeholder="Enter Rack number" name="rack"
                                class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Total Amount <i class="fas fa-map-pin"></i></label>
                            <input type="number" placeholder="Enter Stock Selling Price" name="total_price"
                                class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Paid Amount <i class="fas fa-map-pin"></i></label>
                            <input type="number" placeholder="Enter Stock Selling Price" name="paid_price"
                                class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Booking Date <i class="fas fa-map-pin"></i></label>
                            <input type="date" name="booking_date" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Delivery Date <i class="fas fa-map-pin"></i></label>
                            <input type="date" name="delivery_date" class="form-control">
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
