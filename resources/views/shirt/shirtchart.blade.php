@extends('admin.layouts.master')
@section('title', 'Shirt Print Record')

@section('css')
<style>
@media print {
    .footer,
    #non-printable {
        display: none !important;
    }
    #printable {
        display: block;
    }
}
</style>
@endsection

@section('content')
    <div>
        <a href="{{ route('shirt.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
    </div>
    <div class="container">
        <div class="text-right">
            <a href="" class="btn btn-danger p-2" onclick="window.print()">Print File</a>
        </div>

    </div>
            <div class="img-responsive text-center mb-3">
        <img src="{{ asset('/brandlogo.png') }}" alt="registerlogo" width="200" height="200">
        </div>

        <h1 class="text-center bg-warning p-2">
        @foreach ($data as $value)
        <p>شرٹ</p>
            Customer ID: {{ $value->customerID }} <br>
            {{ $value->name }}
        @endforeach
    </h1>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('/smtailors.png') }}" alt="registerlogo" width="330" height="450"
                    class="img-responsive text-center mt-5">
            </div>
            <div class="col-sm-4 mt-5">
                @foreach ($data as $value)
             <h5 style="font-size: 27px;">
                کالر :-  {{ $value->calar }} <br>
                کالرسائز :-  {{ $value->colar }} <br>
                 بین :- {{ $value->bain }}  <br>
                کف :-  {{ $value->cuff }} <br>
                کف :-  {{ $value->cuff2 }} <br>
                کف سائز :-  {{ $value->cuffsize }} <br>
                گھیرا :- {{ $value->gheri }} <br>
                فرنٹ پاکٹ :- {{$value->front_pocket}} <br>
                فرنٹ پاکٹ ڈیزائن :- {{$value->front_pocket_design}} <br>
                <!-- {{$value->front_pocket}} <br> -->
                پٹی :- {{$value->patti}} <br>
                فرنٹ پٹی :- {{$value->front_patti}} <br>
                سلائی  :- {{$value->silai}} <br>
                موڈا :- {{$value->moda}} <br>
                کونی سائز :- {{$value->konisize}} <br>
                سائڈ چاک :- {{$value->side_chaak}} <br>
                ڈراپ کندھے :- {{$value->downshoulder}} <br>
                ڈیزائن :- {{$value->design}} <br>
                کڑھائی :- {{$value->karhai}} <br>
                Tayar1 :- {{$value->tayar1}} <br>
                Tayar2 :- {{$value->tayar2}} <br>
                Tayar3 :- {{$value->tayar3}} <br>
        
            
</h5>
                @endforeach
            </div>
            <div class="col-sm-4">
                @foreach ($data as $value)
                    <div class="text-center mt-5">

                        <h5 style="font-size: 27px;">
                            {{ $value->lambai }} -:لمبائی<br>
                            {{ $value->tira }} -:تیرا <br>
                            {{ $value->astin }} -:بازو<br>
                            {{ $value->colar }} -:گلا <br>
                            {{ $value->chatti }} -:چھاتی<br>
                            {{ $value->pait }} -:پیٹ<br>
                            {{ $value->kamar }} -:کمر<br>
                            {{ $value->hip }} -:ہپ<br>
                            
                            

                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="h-40" id="non-printable">
        <div class="card" style="border-radius: 25px">
            @php
                $count = 1;
            @endphp
            @foreach ($data as $value)
                @php
                    $value->currentdate = date('d-m-Y', strtotime($value->currentdate));
                    $value->returndate = date('d-m-Y', strtotime($value->returndate));
                @endphp
                
            @endforeach
            {{-- </tbody>
        </table> --}}
        </div>
    </div>
@endsection

@section('scripts')

@endsection
