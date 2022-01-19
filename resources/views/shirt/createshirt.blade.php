@extends('admin.layouts.master')

@section('title', 'Create Shirt')

@section('content')
    <a href="{{ route('shirt.index') }}"><button class=" ml-3 btn btn-primary btn-sm mt-3 mb-3 rounded-pill p-2">
            <b>Back To
                List</b> </button></a>
    <div class="container-fluid ">
        <h1 class="p-3 "><b>+Create Shirt </b><i class="fas fa-user-check"></i></h1>
    </div>
    <br>


    <div class="card" style="border-radius:30px">
        {{-- <div class="card-header">
                Featured
            </div> --}}
        <div class="card-body">
            <form action="{{ route('shirt.store') }}" method="post" enctype="multipart/form-data">
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
                            <label for="">لمبائی <i class="fas fa-ruler"></i></label>
                            <input type="text" name="lambai" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">تیرا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="tira" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">آستین <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="astin" class="form-control">
                        </div>

                      

                        <div class="form-group col-lg-4">
                            <label for="">چھاتی <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="chatti" class="form-control">
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
                           <label for="">کالر <i class="fas fa-ruler"></i></label>
                           <select name="calar" class="form-control" >
                        <option value=" کالر سادہ">کالر سادہ</option>
                        <option value="کالر فرنچ ">کالر فرنچ </option>
                        <option value="کوئ نہیں">کوئ نہیں</option>
                           </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کالرسائز <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="calarsize" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                        <label for="">بین <i class="fas fa-ruler"></i></label>
                        <select name="bain" class="form-control custom-slect">
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
                                <option value=" کٹ کف2"">کٹ کف" 2</option>
                        <option value="گول کف">گول کف</option>
                        <option value=" سیدھے کف"> سیدھے کف </option>
                        <option value="ڈبل کف "> ڈبل کف </option>
                        <option value="اوپن بازو "> اوپن بازو </option>
                        <option value="کوئ نہیں">کوئ نہیں</option>
                        </select>
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label for="">کف سائز <i class="fas fa-ruler"></i></label>
                           
                        <select name="cuffsize" class="form-control custom-slect">
                        <option value="کف چوڑائی 2 ">کف چوڑائی 2 </option>
                                <option value="کف چوڑائی 3 ">کف چوڑائی 3 </option>
                                <option value="کف چوڑائی 1/2 2">کف چوڑائی 1/2 2 </option>
                                <option value=" کف چوڑائی 1/4 2">کف چوڑائی  1/4 2 </option>
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
                            <label for="">پٹی <i class="fas fa-ruler"></i></label>
                            <select name="patti" class="form-control custom-slect">
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
                                <option value="مکمل تین سلائی  ">مکمل تین سلائی </option>
                                <option value="مکمل ڈبل سلائی">مکمل ڈبل سلائی </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">سائیڈ پاکٹ <i class="fas fa-ruler"></i></label>
                            <select name="side_pocket" class="form-control custom-slect">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">فرنٹ پاکٹ <i class="fas fa-ruler"></i></label>
                            <select name="front_pocket" class="form-control custom-slect">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="کوئ نہیں">کوئ نہیں</option>
                            </select>
                        </div>  

                        

                        <div class="form-group col-lg-4">
                            <label for="">موڈا <i class="fas fa-ruler"></i></label>
                            <input type="text" placeholder="Enter Customer Size" name="moda" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">کونی سائز <i class="fas fa-ruler"></i></label>
                            <input type="text" name="konisize" class="form-control">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="">ڈراپ کندھے <i class="fas fa-ruler"></i></label>
                            <select name="downshoulder" class="form-control custom-select" id="">
                                <option value="" disabled selected hidden> ڈراپ کندھے</option>
                                <option value="ہاں">ہاں</option>
                                <option value="نہیں">نہیں</option>
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
