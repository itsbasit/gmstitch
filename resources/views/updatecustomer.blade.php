@extends('admin.layouts.master')

@section('title', 'Update Customer')

@section('content')
    <a href="{{ route('customer.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3">Back To
            List</button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Update Customer</b></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">


            <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="form-group">
                    <div class="form-row">
                        @csrf
                        <div class="form-group col-lg-4">
                            <label for="">ID <i class="fas fa-user-tie"></i></label>
                            <input type="text" placeholder="Enter Customer ID" name="customerID" required value="{{$customer->id}}" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Name<i class="fas fa-user-tie"></i></label>
                            <input type="text" placeholder="Enter Customer Name" name="name" value="{{$customer->name}}" required
                                class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""">MOBILE  <i class=" fas fa-mobile-alt"></i></label>
                            <input type=" text" placeholder="Enter Customer Mobile number" name="mobile"
                                class="form-control" required value="{{$customer->mobile}}">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Choose Cloth: <i class="fas fa-tshirt"></i></label>
                            @php
                            $clothesType = array (
                                0=> 'shalwarkameezsimple',
                                1=> 'shalwarkameez(Double silai)',
                                2=> 'shalwarkameez(triple silai)',
                                '3'=> 'shalwarkameez(Double silai Anchor)',
                                '4'=> 'shalwarkameez(triple silai Anchor)',
                                '5'=> 'waskit',
                                '6'=> 'pent',
                                '7'=> 'Pentcoat 2 piece',
                                '8'=> 'Pentcoat 3 piece',
                                '9'=> 'Shirt',
                                '10'=> 'Safari Suit',
                                '11'=> 'Sherwani',
                                '12'=> 'Tarkashi poncha',
                                '13'=> 'kurta'
                            )
                            @endphp
                            <select name="type1[]" class="form-control select multiple-select" multiple required>
                            
                            @foreach($clothesType as $type)
                           
                            @php
                            $select='';
                            for($i=0;$i<count( $customer->type1 );$i++)
                            {
                                if($customer->type1[$i] == $type)
                                {
                                    $select = 'selected';
                                } 
                            }
                               
                            @endphp
                                <option value="{{$type}}" {{$select ?? ''}}>{{$type}}</option>
                            @endforeach
                            
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="lambai" value="{{$customer->lambai}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تیرا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->tira ?? ''}}" name="tira" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">بازو <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="bazu" value="{{$customer->bazu ?? ''}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">گلا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="gala" value="{{$customer->gala ?? ''}}" class="form-control">
                        </div>


                        <div class="form-group col-lg-4">
                            <label for="">آستین <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->astin ?? ''}}" name="astin" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">چھاتی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->chatti ?? ''}}" name="chatti" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">پیٹ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="pait" value="{{$customer->pait ?? ''}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کمر <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="kamar" value="{{$customer->kamar ?? ''}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ہپ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="hip" value="{{$customer->hip ?? ''}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">شلوارلمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->shalwarlength ?? ''}}" name="shalwarlength"
                                class="form-control">
                        </div>

                        <!-- <div class="form-group col-lg-4">
                            <label for=""> شلوار پانچہ <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="poncha" class="form-control">
                        </div> -->

                        <div class="form-group col-lg-4">
                        <label for="">شلوار پاکٹ <i class="fas fa-ruler"></i></label>
                        <select name="shalwarpocket" class="form-control custom-select" id="">
                        <option value="{{$customer->shalwarpocket}}" selected> {{$customer->shalwarpocket ?? 'شلوار پاکٹ'}}</option>
                        <option value="ہاں ">ہاں </option>
                        <option value="نہیں">نہیں</option>
                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">شلوار گہیرا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->shalwarghera ?? ''}}" name="shalwarghera" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> شلوار پانچہ <i class="fas fa-ruler"></i></label>
                            <select name="poncha" class="form-control custom-select" id="">
                            <option value="{{$customer->poncha}}" selected> {{$customer->poncha ?? 'شلوار پانچہ'}}</option>
                                <option value=" سادہ پاہنچہ  "> سادہ پاہنچہ    </option>
                                <option value="سلائیوں والا پاہنچہ ">سلائیوں والا پاہنچہ  </option>
                                <option value="ترکاشی پاہنچہ ">تارکشی ہغنچہ  </option>
                                <option value=" سلائی کانٹا10  ">10 سلائی کانٹا </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> پانچہ <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->poncha2}}" placeholder="Enter Customer Size" name="poncha2" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                           <label for="">کالر <i class="fas fa-ruler"></i></label>
                        <select name="calar" class="form-control" >
                        <option value="{{$customer->calar}}" selected>{{$customer->calar ?? 'کالر'}}</option>
                        <option value=" کالر سادہ">کالر سادہ</option>
                        <option value="کالر فرنچ ">کالر فرنچ </option>
                        <option value=" نہیں"> نہیں</option>
                           </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کالرسائز <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->colar ?? ''}}" name="calarsize" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">بین <i class="fas fa-ruler"></i></label>
                        <select name="bain" class="form-control custom-slect">
                        <option value="{{$customer->bain ?? ''}}" selected>{{$customer->bain ?? 'بین'}}</option>
                        <option value="ہاف بین گول "> ہاف بین گول </option>
                        <option value="ہاف بین چورس ">ہاف بین چورس </option>
                        <option value=" فل بین گول"> فل بین گول</option>
                        <option value=" فل بین چورس"> فل بین چورس</option>
                        <option value=" مگزی گلا"> مگزی گلا</option>
                        <option value="کوئ نہیں">کوئ نہیں</option>
                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">کف <i class="fas fa-ruler"></i></label>
                        <select name="cuff" class="form-control custom-slect">
                        <option value="{{$customer->cuff}}" selected>{{$customer->cuff}}</option>
                        <option value=" کٹ کف2"">کٹ کف" 2</option>
                        <option value="گول کف">گول کف</option>
                        <option value=" سیدھے کف"> سیدھے کف </option>
                        <option value="ڈبل کف "> ڈبل کف </option>
                        <option value="اوپن بازو "> اوپن بازو </option>
                        <option value="کوئ نہیں">کوئ نہیں</option>
                        </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> کف<i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" value="{{$customer->cuff2}}" name="cuff2" class="form-control">
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label for="">کف سائز <i class="fas fa-ruler"></i></label>
                            <!-- <input type="text" placeholder="Enter Customer Size" name="cuff1" class="form-control"> -->
                        <select name="cuffsize" class="form-control custom-slect">
                        <option value="{{$customer->cuffsize}}" selected>{{$customer->cuffsize}}</option>
                        <option value="2">2</option>
                                <option value="2 1/4">2 1/4</option>
                                <option value="2 1/2">2 1/2</option>
                                <option value="3">3</option>
                        <option value="کوئ نہیں">کوئ نہیں</option>
                        </select>
                        </div> 

                        <div class="form-group col-lg-4">
                            <label for="">گھیرا <i class="fas fa-ruler"></i></label>
                            <select name="gheri" class="form-control custom-slect">
                            <option value="{{$customer->gheri}}" selected>{{$customer->gheri}}</option>
                                <option value="گول گھیرا "> گول گھیرا </option>
                                <option value="سیدھا گھیرا">سیدھا گھیرا </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                                
                            </select>
                        </div> 
                        <div class="form-group col-lg-4">
                            <label for="">پٹی <i class="fas fa-ruler"></i></label>
                            <select name="patti" class="form-control custom-slect">
                            <option value="{{$customer->patti}}" selected>{{$customer->patti}}</option>
                                  
                            <option value="انگلش  پٹی1 "> 1"انگلش پٹی </option>                         
                                <option value="انگلش پٹی1 1/4"> 1 "1/4انگلش پٹی </option>
                                <option value="انگلش پٹی1 1/2"> 1 1/2انگلش پٹی </option>
                                <option value="انگلش پٹی  3/4"> 3/4انگلش پٹی </option>    
                            <option value="سادہ پٹی1 "> 1"سادہ پٹی </option>
                                <option value="سادہ پٹی1 1/4"> 1 "1/4سادہ پٹی </option>
                                <option value="سادہ پٹی1 1/2"> 1 1/2سادہ پٹی </option>
                                <option value="سادہ پٹی  3/4"> 3/4سادہ پٹی </option>
                                <option value="گم پٹی1"">1" گم پٹی </option>
                                <option value="گم پٹی1 1/4"">  1 1/4" گم پٹی </option>
                                <option value="گم پٹی1 1/2">1 1/2 گم پٹی </option>
                                <option value="گم پٹی 3/4"> 3/4گم پٹی </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                                
                            </select>
                        </div>  

                      


                        <div class="form-group col-lg-4">
                            <label for="">سلائی <i class="fas fa-ruler"></i></label>
                            <select name="silai" class="form-control custom-slect">
                            <option value="{{$customer->silai}}" selected>{{$customer->silai}}</option>
                                <option value="مکمل تین سلائی  ">مکمل تین سلائی </option>
                                <option value="مکمل ڈبل سلائی">مکمل ڈبل سلائی </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">سائیڈ پاکٹ <i class="fas fa-ruler"></i></label>
                            <select name="side_pocket" class="form-control custom-slect">
                            <option value="{{$customer->side_pocket}}" selected>{{$customer->side_pocket}}</option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">فرنٹ پاکٹ <i class="fas fa-ruler"></i></label>
                            <select name="front_pocket" class="form-control custom-slect">
                            <option value="{{$customer->front_pocket}}" selected>{{$customer->front_pocket}}</option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>  

                        <div class="form-group col-lg-4">
                            <label for=""> فرنٹ پاکٹ ڈیزائن <i class="fas fa-ruler"></i></label>
                            <input type="text" name="front_pocket_design" class="form-control">
                        </div> 

                        

                        <div class="form-group col-lg-4">
                            <label for="">موڈا <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->moda}}" placeholder="Enter Customer Size" name="moda" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کونی سائز <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->konisize}}" name="konisize" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> سائڈ چاک <i class="fas fa-ruler"></i></label>
                            <input type="text" name="side_chaak" value="{{$customer->side_chaak}}" class="form-control">
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label for=""> فرنٹ پٹی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="front_patti" value="{{$customer->front_patti}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for=""> فرنٹ پٹی ڈیزائن <i class="fas fa-ruler"></i></label>
                            <input type="text" name="front_patti_design" value="{{$customer->front_patti_design}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ڈراپ کندھے <i class="fas fa-ruler"></i></label>
                            <select name="downshoulder" class="form-control custom-select" id="">
                                <option value="{{$customer->downshoulder}}" selected >{{$customer->downshoulder}}</option>
                                <!-- <option value="" disabled  hidden> ڈراپ کندھے</option> -->
                                <option value="ہاں">ہاں</option>
                                <option value="نہیں">نہیں</option>
                            </select>
                        </div>

                       

                        <div class="form-group col-lg-4">
                            <label for="">ڈیزائن <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->design}}" placeholder="Enter Customer Size" name="design" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کڑھائی <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->karhai}}" placeholder="Enter Customer Size" name="karhai" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Tayar1 <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->tayar1}}" placeholder="Enter Customer Size" name="tayar1" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Tayar2 <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->tayar2}}" placeholder="Enter Customer Size" name="tayar2" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Tayar3 <i class="fas fa-ruler"></i></label>
                            <input type="text" value="{{$customer->tayar3}}" placeholder="Enter Customer Size" name="tayar3" class="form-control">
                        </div>
                        <!-- <div class="form-group col-lg-4">
                            <label for="">Tayar4 <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tayar4" class="form-control">
                        </div> -->

                        <div class="form-group col-lg-4">
                            <label for="">Cutter <i class="fas fa-users"></i></label>
                            <input type="text" value="{{$customer->cutter}}" placeholder="Enter cutter Name" name="cutter" class="form-control"
                                required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Stitcher <i class="fas fa-users"></i></label>
                            <input type="text" value="{{$customer->stitcher}}" placeholder="Enter stitcher Name" name="stitcher" class="form-control"
                                required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Entered By <i class="fas fa-users"></i></label>
                            <input type="text" value="{{$customer->enteredby}}" name="enteredby" class="form-control" required>
                        </div>

                        <!-- <div class="form-group col-lg-4">
                            <label for="">Booking Date <i class="fas fa-calendar-plus"></i></label>
                            <input type="date" value="{{$customer->currentdate}}" placeholder="Enter stitcher Name" name="currentdate" class="form-control"
                                min="1997-31-18" max="2030-31-12">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Delivery Date <i class="fas fa-calendar-check"></i></label>
                            <input type="date" value="{{$customer->returndate}}" placeholder="Enter stitcher Name" name="returndate" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Rack <i class="fas fa-calendar-check"></i></label>
                            <input type="number" value="{{$customer->rack}}" placeholder="Enter stitcher Name" name="rack" class="form-control"
                                required>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ADVANCE <i class="fas fa-money-bill-wave"></i></label>
                            <input type="text" name="advance" value="{{$customer->advance}}" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">Discount <i class="fas fa-money-bill-wave"></i></label>
                            <input type="text" value="{{$customer->discount}}" name="discount" class="form-control">
                        </div> -->

                        <div class="form-group col-lg-4">
                            <label for="">Total Amount <i class="fas fa-money-bill-wave"></i></label>
                            <input type="text" placeholder="Enter Employee Total Amount" name="total_price"
                                class="form-control" required value="{{$customer->total_price}}">
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
