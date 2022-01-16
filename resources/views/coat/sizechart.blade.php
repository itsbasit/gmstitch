@extends('admin.layouts.master')
@section('title', 'Coat Print Record')

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
        <a href="{{ route('coat.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
    </div>
    <div class="container">
        <div class="text-right">
            <a href="" class="btn btn-danger p-2" onclick="window.print()">Print File</a>
        </div>

    </div>
            <div class="img-responsive text-center mb-3">
        <img src="{{ asset('/brandlogo.png') }}" alt="registerlogo" width="200" height="200">
        </div>
        
    {{-- <div class="table-responsive"> --}}
    <h1 class="text-center bg-warning p-2">
        @foreach ($data as $value)
            Customer ID: {{ $value->customerID }} <br>
            {{ $value->name }}
        @endforeach
    </h1>
    <h1 class="text-center bg-info p-2">
        @foreach ($data[0]->type1 as $value)
            {{ $value }} <br>

        @endforeach
    </h1>
    {{-- <table class="table text-center table-bordered ">
            <thead class="bg-info">
                <tr>
                    <th>Type</th>
                    <th>لمبائی <i class="fas fa-tshirt"></i></th>
                    <th>کالر <i class="fas fa-tshirt"></i></th>
                    <th>تیرا<i class="fas fa-tshirt"></i></th>
                    <th>بین <i class="fas fa-tshirt"></i></th>
                    <th>آستین <i class="fas fa-tshirt"></i></th>
                    <th>کف <i class="fas fa-tshirt"></i></th>
                    <th>کالر <i class="fas fa-tshirt"></i></th>
                    <th>پٹی <i class="fas fa-tshirt"></i></th>
                    <th>چھاتی <i class="fas fa-tshirt"></i></th>
                    <th>گھیرا <i class="fas fa-tshirt"></i></th>
                    <th>ڈیزائن <i class="fas fa-tshirt"></i></th>
                    <th>پیٹ <i class="fas fa-tshirt"></i></th>
                    <th>سلائی <i class="fas fa-tshirt"></i></th>
                    <th>پاکٹ <i class="fas fa-tshirt"></i></th>
                    <th>کمر <i class="fas fa-tshirt"></i></th>
                    <th> ہپ <i class="fas fa-tshirt"></i></th>
                    <th>کف2 <i class="fas fa-tshirt"></i></th>
                    <th>موڈا <i class="fas fa-tshirt"></i></th>
                    <th>کڑھائی <i class="fas fa-tshirt"></i></th>
                    <th> شلوارلمبائی <i class="fas fa-tshirt"></i></th>
                    <th>شلوار پاکٹ <i class="fas fa-tshirt"></i></th>
                    <th>شلوار گہیرا <i class="fas fa-tshirt"></i></th>
                    <th>پانچہ <i class="fas fa-tshirt"></i></th>
                    <th>Rack <i class="fas fa-tshirt"></i></th>
                    <th>Current Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)
                    @php
                        $value->currentdate = date('d-m-Y', strtotime($value->currentdate));
                        $value->returndate = date('d-m-Y', strtotime($value->returndate));
                    @endphp
                    <tr>
                        <td>{{ $value[0]->type1}}</td>
                        <td> {{ $value->lambai }}</td>
                        <td> {{ $value->calar }}</td>
                        <td> {{ $value->tira }}</td>
                        <td> {{ $value->bain }}</td>
                        <td> {{ $value->astin }}</td>
                        <td> {{ $value->cuff }}</td>
                        <td> {{ $value->colar }}</td>
                        <td> {{ $value->patti }}</td>
                        <td> {{ $value->chatti }}</td>
                        <td> {{ $value->gheri }}</td>
                        <td> {{ $value->design }}</td>
                        <td> {{ $value->pait }}</td>
                        <td> {{ $value->silai }}</td>
                        <td> {{ $value->pocket }}</td>
                        <td> {{ $value->kamar }}</td>
                        <td> {{ $value->hip }}</td>
                        <td> {{ $value->cuff1 }}</td>
                        <td> {{ $value->moda }}</td>
                        <td> {{ $value->karhai }}</td>
                        <td> {{ $value->shalwarlength }}</td>
                        <td> {{ $value->shalwarpocket }}</td>
                        <td> {{ $value->shalwarghera }}</td>
                        <td> {{ $value->poncha }}</td>
                        <td> {{ $value->rack }}</td>
                        <td>{{ $value->currentdate }}</td>
                        <td>{{ $value->returndate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}

    {{-- <img src="{{ asset('/smtailors.png') }}" alt="registerlogo" width="300" height="200"
            class="img-responsive text-center mt-3">

    </div>
    @foreach ($data as $value)
        <div class="text-center">
            Type{{ $value[0]->type1 }} <br>
            {{ $value->lambai }} لمبائی<br>
            Current Date {{ $value->currentdate }}
        </div>

    @endforeach --}}


    <div class="container" style="height: 550px;">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('/smtailors.png') }}" alt="registerlogo" width="330" height="450"
                    class="img-responsive text-center mt-5">
            </div>
            <div class="col-sm-4 mt-5">
                @foreach ($data as $value)
             <h5 style="font-size: 27px;">
                <!--کالر :-  {{ $value->calar }} <br>-->
                <!--  بین :- {{ $value->bain }}  <br>-->
                <!-- کف :-  {{ $value->cuff }} <br>-->
                  {{ $value->cuff1 }} -:کف سائز<br>
                    {{-- {{ $value->gheri }} -:گھیرا<br> --}}
                  آضافی :- {{ $value->patti }}  <br>
                    {{ $value->moda }} -:موڈا<br>
                    {{ $value->konisize }} -: کونی سائز<br>
                    {{-- {{ $value->downshoulder }} -:ڈراپ کندھے<br> --}}
                    {{ $value->design }} -:ڈیزائن<br>
                    {{ $value->karhai }} -:کڑھائی<br>
                                 تیار 1 :-  {{$value->tayar1}} <br>
             تیار 2 :-  {{$value->tayar2}} <br>
              تیار 3:- {{$value->tayar3}} <br>
               

                    {{-- {{ $value->silai }} -:سلائی<br> --}}







                    {{-- {{ $value->pocket }} -:پاکٹ<br> --}}

                   

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
                            <hr style="height:1px;border:none;color:#333;background-color:#333;">
                            {{ $value->shalwarlength }}-: شلوارلمبائی<br>
                            {{ $value->poncha }} شلوار پانچہ <br>
                            <!--{{ $value->shalwarpocket }} -:شلوار پاکٹ<br>-->
                            {{ $value->shalwarghera }} -:شلوار گہیرا<br>
                            شلوار پانچہ :-{{ $value->poncha2 }} <br>

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
