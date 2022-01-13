@extends('admin.layouts.master')

@section('title', 'Update Order')

@section('content')
    <a href="{{ route('order.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Update Order</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('order.update', $order->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="">ID <i class="fas fa-user-tie"></i></label>
                        <input type=" text" placeholder="Enter Order ID" name="id" class="form-control"
                            value="{{ $order->id }}" required>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for=""">NO of Suit Stitch <i class="  fas fa-street-view"></i></label>
                        <input type=" text" placeholder="Enter Brand Sub Type Name" name="no_of_suit" class="form-control"
                            value="{{ $order->no_of_suit }}" required>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Suit Type <i class="fas fa-id-card"></i></label>
                        <select name="suit_type" class="form-control select " required>
                            <option value="shalwarkameezsimple" {{$order->suit_type == 'shalwarkameezsimple' ? 'selected' : ''}}>Shalwar Kameez (Simple)</option>
                            <option value="shalwarkameez(Double silai)" {{$order->suit_type == 'shalwarkameez(Double silai)' ? 'selected' : ''}}>Shalwar Kameez (Double silai)</option>
                            <option value="shalwarkameez(triple silai)"{{$order->suit_type == 'shalwarkameez(triple silai)' ? 'selected' : ''}}>Shalwar Kameez (Triple silai)</option>
                            <option value="shalwarkameez(Double silai Anchor)" {{$order->suit_type == 'shalwarkameez(Double silai Anchor)' ? 'selected' : ''}}>Shalwar Kameez (Double silai Anchor)
                            </option>
                            <option value="shalwarkameez(triple silai Anchor)" {{$order->suit_type == 'shalwarkameez(triple silai Anchor)' ? 'selected' : ''}}>Shalwar Kameez (Triple silai Anchor)
                            </option>
                            <option value="waskit" {{$order->suit_type == 'waskit' ? 'selected' : ''}}>waskit</option>
                            <option value="pent" {{$order->suit_type == 'pent' ? 'selected' : ''}}>pent</option>
                            <option value="Pentcoat 2 piece" {{$order->suit_type == 'Pentcoat 2 piece' ? 'selected' : ''}}>Pent Coat (2 Piece)</option>
                            <option value="Pentcoat 3 piece" {{$order->suit_type == 'Pentcoat 3 piece' ? 'selected' : ''}}>Pent Coat (3 Piece)</option>
                            <option value="Shirt" {{$order->suit_type == 'Shirt' ? 'selected' : ''}}>Shirt</option>
                            <option value="Safari Suit" {{$order->suit_type == 'Safari Suit' ? 'selected' : ''}}>Safari Suit</option>
                            <option value="Sherwani" {{$order->suit_type == 'Sherwani' ? 'selected' : ''}}>Sherwani</option>
                            <option value="Tarkashi poncha" {{$order->suit_type == 'Tarkashi poncha' ? 'selected' : ''}}>Tarkashi Poncha</option>
                            <option value="kurta" {{$order->suit_type == 'kurta' ? 'selected' : ''}}>Kurta</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Delivered <i class="fas fa-mobile-alt"></i></label>
                        <select name="delivered" class="form-control custom-select" id="">
                            <!--<option value="" disabled selected hidden> Delivered</option>-->
                            <!--<option value="YES">YES</option>-->
                            <!--<option value="NO">NO</option>-->
                             <option value="YES" {{$order->delivered == 'YES' ? 'selected' : '' }} > YES </option>
                             <option value=“NO” {{ $order->delivered == 'NO' ? 'selected' : '' }} > NO </option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Rack <i class="fas fa-map-pin"></i></label>
                        <input type="number"  name="rack"
                            class="form-control" value="{{ $order->rack }}">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">Total Amount <i class="fas fa-map-pin"></i></label>
                        <input type="number" placeholder="Enter Stock Selling Price" name="total_price"
                            class="form-control" value="{{ $order->total_price }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Paid Amount <i class="fas fa-map-pin"></i></label>
                        <input type="number" placeholder="Enter Stock Selling Price" name="paid_price"
                            class="form-control" value="{{ $order->paid_price }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Booking Date <i class="fas fa-map-pin"></i></label>
                        <input type="date" name="booking_date" class="form-control" value="{{ $order->booking_date }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Delivery Date <i class="fas fa-map-pin"></i></label>
                        <input type="date" name="delivery_date" class="form-control"
                            value="{{ $order->delivery_date }}">
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
