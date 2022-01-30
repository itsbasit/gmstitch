@extends('admin.layouts.master')
@section('title', 'WaistCoat Print Record')

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
        <a href="{{ route('waistcoat.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
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
        <p>واسکٹ</p>
            Customer ID: {{ $value->customerID }} <br>
            {{ $value->name }}
        @endforeach
    </h1>
   

    <div class="container" style="height: 550px;">
        <div class="row">
          
            
            <div class="col-md-6 offset-md-3">
                @foreach ($data as $value)
                    <div class="text-center mt-5">

                        <h5 style="font-size: 27px;">
                            {{ $value->length }} -:لمبائی<br>
                            {{ $value->tira }} -:تیرا <br>
                            {{ $value->gala }} -:گلا <br>
                            {{ $value->chati }} -:چھاتی<br>
                            {{ $value->gap }} -:گیپ <br>
                            {{ $value->kamar }} -:کمر<br>
                            {{ $value->hip }} -:ہپ<br>
                            {{ $value->bain }} -:  بین <br>
                            {{ $value->gheri }} -:گھیرا <br>
                            
                            {{ $value->design }} -:ڈیزائن <br>
                            {{ $value->karhai }} -:کڑھائی  <br>
                            
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

  
@endsection

@section('scripts')

@endsection
