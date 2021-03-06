@extends('admin.layouts.master')

@section('title', 'Create Customer')

@section('content')
    <a href="{{ route('customer.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3 rounded-pill p-2">
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
            <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        @csrf
                        <div class="form-group col-lg-4">
                            <label for="">ID <i class="fas fa-user-tie"></i></label>
                            <input type="number" placeholder="Enter Customer ID" name="customerID" required class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Name<i class="fas fa-user-tie"></i></label>
                            <input type="text" placeholder="Enter Customer Name" name="name" required
                                class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""">MOBILE  <i class=" fas fa-mobile-alt"></i></label>
                            <input type="text" placeholder="Enter Customer Mobile number" name="mobile"
                                class="form-control" required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Choose Cloth: <i class="fas fa-tshirt"></i></label>
                            @php
                            $clothesType = array (
                                'shalwarkameezsimple'=> 'shalwarkameezsimple',
                                'shalwarkameez(Double silai)'=> 'shalwarkameez(Double silai)',
                                'shalwarkameez(triple silai)'=> 'shalwarkameez(triple silai)',
                                'shalwarkameez(Double silai Anchor)'=> 'shalwarkameez(Double silai Anchor)',
                                'shalwarkameez(triple silai Anchor)'=> 'shalwarkameez(triple silai Anchor)',
                                'waskit'=> 'waskit',
                                'pent'=> 'pent',
                                'Pentcoat 2 piece'=> 'Pentcoat 2 piece',
                                'Pentcoat 3 piece'=> 'Pentcoat 3 piece',
                                'Shirt'=> 'Shirt',
                                'Safari Suit'=> 'Safari Suit',
                                'Sherwani'=> 'Sherwani',
                                'Tarkashi poncha'=> 'Tarkashi poncha',
                                'kurta'=> 'kurta'
                            )
                            @endphp
                            <select name="type1[]" class="form-control select multiple-select" multiple required>
                            @foreach($clothesType as $type)
                                <option value="{{$type}}">{{$type}}</option>
                            @endforeach
                            
                            <!-- <option value="shalwarkameezsimple">Shalwar Kameez (Simple)</option>
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
                                <option value="kurta">Kurta</option> -->
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" name="lambai" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tira" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="bazu" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gala" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="astin" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">?????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="chatti" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="pait" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="kamar" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="hip" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????????????????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="shalwarlength"
                                class="form-control">
                        </div>

                        

                        <div class="form-group col-lg-4">
                        <label for="">?????????? ???????? <i class="fas fa-ruler"></i></label>
                        <select name="shalwarpocket" class="form-control custom-select" id="">
                        <option value="" disabled selected hidden> ?????????? ????????</option>
                        <option value="?????? ">?????? </option> 
                        <option value="????????">????????</option>

                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????????? ?????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="shalwarghera" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> ?????????? ?????????? <i class="fas fa-ruler"></i></label>
                            <select name="poncha" class="form-control custom-select" id="">
                                <option value="" disabled selected hidden> ?????????? ??????????</option>
                                <option value=" ???????? ????????????  "> ???????? ????????????    </option>
                                <option value="?????????????? ???????? ???????????? ">?????????????? ???????? ????????????  </option>
                                <option value="???????????? ???????????? ">???????????? ??????????  </option>
                                <option value=" ?????????? ??????????10  ">10 ?????????? ?????????? </option>
                                <option value="?????? ????????">?????? ????????</option>
                            </select>
                        </div>


                        <div class="form-group col-lg-4">
                            <label for=""> ?????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="poncha2" class="form-control">
                        </div>

                        <!-- <div class="form-group col-lg-4">
                            <label for=""> ?????????? ???????? <i class="fas fa-ruler"></i></label>
                            <select name="shalwar_pocket" class="form-control custom-select" id="">
                                <option value="" disabled selected hidden> ?????????? ??????????</option>
                                <option value=" ???????? ????????????  "> ???????? ????????????    </option>
                                <option value="?????????????? ???????? ???????????? ">?????????????? ???????? ????????????  </option>
                                <option value="???????????? ???????????? ">???????????? ??????????  </option>
                                <option value=" ?????????? ??????????10  ">10 ?????????? ?????????? </option>
                                <option value="?????? ????????">?????? ????????</option>
                            </select>
                        </div> -->


                        <div class="form-group col-lg-4">
                           <label for="">???????? <i class="fas fa-ruler"></i></label>
                           <select name="calar" class="form-control" >
                        <option value=" ???????? ????????">???????? ????????</option>
                        <option value="???????? ???????? ">???????? ???????? </option>
                        <option value="?????? ????????">?????? ????????</option>
                           </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="calarsize" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">?????? <i class="fas fa-ruler"></i></label>
                        <select name="bain" class="form-control custom-slect">
                        <option value="?????? ?????? ?????? "> ?????? ?????? ?????? </option>
                        <option value="?????? ?????? ???????? ">?????? ?????? ???????? </option>
                        <option value=" ???? ?????? ??????"> ???? ?????? ??????</option>
                        <option value=" ???? ?????? ????????"> ???? ?????? ????????</option>
                        <option value=" ???????? ??????"> ???????? ??????</option>
                        <option value="?????? ????????">?????? ????????</option>
                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">???? <i class="fas fa-ruler"></i></label>
                        <select name="cuff" class="form-control custom-slect">
                                <option value=" ???? ????2"">???? ????" 2</option>
                        <option value="?????? ????">?????? ????</option>
                        <option value=" ?????????? ????"> ?????????? ???? </option>
                        <option value="?????? ???? "> ?????? ???? </option>
                        <option value="???????? ???????? "> ???????? ???????? </option>
                        <option value="?????? ????????">?????? ????????</option>
                        </select>
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label for="">???? ???????? <i class="fas fa-ruler"></i></label>
                            <!-- <input type="text" placeholder="Enter Customer Size" name="cuff1" class="form-control"> -->
                        <select name="cuffsize" class="form-control custom-slect">
                                <option value="2">2</option>
                                <option value="2 1/4">2 1/4</option>
                                <option value="2 1/2">2 1/2</option>
                                <option value="3">3</option>
                                <option value="?????? ????????">?????? ????????</option>
                        </select>
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label for=""> ????<i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="cuff2" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">?????????? <i class="fas fa-ruler"></i></label>
                            <select name="gheri" class="form-control custom-slect">
                                <option value="?????? ?????????? "> ?????? ?????????? </option>
                                <option value="?????????? ??????????">?????????? ?????????? </option>
                                <option value="?????? ????????">?????? ????????</option>
                                
                            </select>
                        </div> 
                        <div class="form-group col-lg-4">
                            <label for="">?????? <i class="fas fa-ruler"></i></label>
                            <select name="patti" class="form-control custom-slect">
                                
                                  
                                <option value="??????????  ??????1 "> 1"?????????? ?????? </option>                         
                                <option value="?????????? ??????1 1/4"> 1 "1/4?????????? ?????? </option>
                                <option value="?????????? ??????1 1/2"> 1 1/2?????????? ?????? </option>
                                <option value="?????????? ??????  3/4"> 3/4?????????? ?????? </option>

                                <option value="???????? ??????1 "> 1"???????? ?????? </option>                         
                                <option value="???????? ??????1 1/4"> 1 "1/4???????? ?????? </option>
                                <option value="???????? ??????1 1/2"> 1 1/2???????? ?????? </option>
                                <option value="???????? ??????  3/4"> 3/4???????? ?????? </option>
                                <option value="???? ??????1"">1" ???? ?????? </option>
                                <option value="???? ??????1 1/4"">  1 1/4" ???? ?????? </option>
                                <option value="???? ??????1 1/2">1 1/2 ???? ?????? </option>
                                <option value="???? ?????? 3/4"> 3/4???? ?????? </option>
                                <option value="?????? ????????">?????? ????????</option>
                                
                            </select>
                        </div>  

                      


                        <div class="form-group col-lg-4">
                            <label for="">?????????? <i class="fas fa-ruler"></i></label>
                            <select name="silai" class="form-control custom-slect">
                                <option value="???????? ?????? ??????????  ">???????? ?????? ?????????? </option>
                                <option value="???????? ?????? ??????????">???????? ?????? ?????????? </option>
                                <option value="?????? ????????">?????? ????????</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">?????????? ???????? <i class="fas fa-ruler"></i></label>
                            <select name="side_pocket" class="form-control custom-slect">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="?????? ????????">?????? ????????</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">???????? ???????? <i class="fas fa-ruler"></i></label>
                            <select name="front_pocket" class="form-control custom-slect">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="?????? ????????">?????? ????????</option>
                            </select>
                        </div>  

                        <div class="form-group col-lg-4">
                            <label for=""> ???????? ???????? ???????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" name="front_pocket_design" class="form-control">
                        </div>  

                        <div class="form-group col-lg-4">
                            <label for="">???????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="moda" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????? ???????? <i class="fas fa-ruler"></i></label>
                            <input type="text" name="konisize" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> ???????? ?????? <i class="fas fa-ruler"></i></label>
                            <input type="text" name="side_chaak" class="form-control">
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label for=""> ???????? ?????? <i class="fas fa-ruler"></i></label>
                            <input type="text" name="front_patti" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> ???????? ?????? ???????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" name="front_patti_design" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????? ?????????? <i class="fas fa-ruler"></i></label>
                            <select name="downshoulder" class="form-control custom-select" id="">
                                <option value="" disabled selected hidden> ???????? ??????????</option>
                                <option value="??????">??????</option>
                                <option value="????????">????????</option>
                            </select>
                        </div>

                       

                        <div class="form-group col-lg-4">
                            <label for="">???????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="design" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">???????????? <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="karhai" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Tayar1 <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tayar1" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Tayar2 <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tayar2" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Tayar3 <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tayar3" class="form-control">
                        </div>
                        <!-- <div class="form-group col-lg-4">
                            <label for="">Tayar4 <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tayar4" class="form-control">
                        </div> -->

                        <div class="form-group col-lg-4">
                            <label for="">Cutter <i class="fas fa-users"></i></label>
                            <input type="text" placeholder="Enter cutter Name" name="cutter" class="form-control"
                                required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Stitcher <i class="fas fa-users"></i></label>
                            <input type="text" placeholder="Enter stitcher Name" name="stitcher" class="form-control"
                                required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Entered By <i class="fas fa-users"></i></label>
                            <input type="text" name="enteredby" class="form-control" required>
                        </div>

                        <!-- <div class="form-group col-lg-4">
                            <label for="">Booking Date <i class="fas fa-calendar-plus"></i></label>
                            <input type="date" placeholder="Enter stitcher Name" name="currentdate" class="form-control"
                                min="1997-31-18" max="2030-31-12">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Delivery Date <i class="fas fa-calendar-check"></i></label>
                            <input type="date" placeholder="Enter stitcher Name" name="returndate" class="form-control">
                        </div> -->

                        <!-- <div class="form-group col-lg-4">
                            <label for="">Rack <i class="fas fa-calendar-check"></i></label>
                            <input type="number" placeholder="Enter stitcher Name" name="rack" class="form-control"
                                required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ADVANCE <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="advance" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Discount <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" name="discount" class="form-control">
                        </div> -->

                        <div class="form-group col-lg-4">
                            <label for="">Total Amount <i class="fas fa-money-bill-wave"></i></label>
                            <input type="number" placeholder="Enter Employee Total Amount" name="total_price"
                                class="form-control" required>
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
