@extends('admin.layouts.master')

@section('title', 'Update Stock')

@section('content')
    <a href="{{ route('stock.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Update Stock</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('stock.update', $stock->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="">Brand <i class="fas fa-user-tie"></i></label>

                        <select name="brand" class="form-control custom-slect">
                            {{-- @foreach ($stock as $item)
                                <option value="{{ $item->id }}" {{ $item->id == 31 ? 'selected' : '' }}>
                                    {{ $item->brand }}</option>
                            @endforeach --}}
                            <option value="" disabled selected hidden>Choose Brand Type</option>
                            <option value="Caps">Caps</option>
                            <option value="Perfumes">Perfumes</option>
                            <option value="Perfume Bottles">Perfume Bottles</option>
                            <option value="Ready made:- ( Shalwar Qameez, Coat, waist coat, jacket, shirts, pants. )">
                                Ready made:- ( Shalwar Qameez, Coat, waist coat, jacket, shirts, pants. )
                            </option>
                            <option value="Fabric">Fabric</option>
                            <option value="Cufflinks">Cufflinks</option>
                            <option value="Bukaram">Bukaram</option>
                            <option value="Fancy button">Fancy button</option>

                        </select>
                        {{-- <option value=""></option>
                            @foreach ($stock as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach --}}

                    </div>

                    <div class="form-group col-lg-6">
                        <label for=""">Brand-Sub Name<i class="           fas fa-street-view"></i></label>
                        <input type=" text" placeholder="Enter Brand Sub Type Name" name="brandtype" class="form-control"
                            required value="{{ $stock->brandtype }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Quantity <i class="fas fa-id-card"></i></label>
                        <input type="number" placeholder="Enter Quantity in Numbers" name="quantity" class="form-control"
                            required value="{{ $stock->quantity }}">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="">Buying Price <i class="fas fa-mobile-alt"></i></label>
                        <input type="number" placeholder="Enter Stock Buying Price" name="buyingprice"
                            class="form-control" required value="{{ $stock->buyingprice }}">
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="">Selling Price <i class="fas fa-map-pin"></i></label>
                        <input type="number" placeholder="Enter Stock Selling Price" name="sellingprice"
                            class="form-control" required value="{{ $stock->sellingprice }}">
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
