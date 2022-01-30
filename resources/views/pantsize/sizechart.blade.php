@extends('admin.layouts.master')
@section('title', 'PantSize Print Record')

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
        <a href="{{ route('pantsize.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
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
        <p>پتلون</p>
            Customer ID: {{ $value->customerID }} <br>
            {{ $value->name }}
        @endforeach
    </h1>
   

    <div class="container" style="height: 600px;">
        <div class="row">
        <div class="col-md-6 offset-md-3">
                @foreach ($data as $value)
                    <div class="text-center mt-5">

                        <h5 style="font-size: 27px;">
                        {{$value->kamar}} -: کمر <br>
                        {{$value->hip}} -:  ہپ <br>
                        {{$value->body}} -:  باڈی <br>
                        {{$value->thai}} -:  تہائ <br>
                        {{$value->length}} -: لمبائی <br>
                        {{$value->goda}} -: گوڈا <br>
                        {{$value->mori}} -: موری<br>
                        {{$value->front_pocket}} -: فرنٹ پاکٹ <br>
                        {{$value->back_pocket}} -: بیک پاکٹ <br>
                        {{$value->pancha}} -: پانچہ <br>
                            

                            
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

  
@endsection

@section('scripts')

@endsection
