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
        
    
    <h1 class="text-center bg-warning p-2">
        @foreach ($data as $value)
        <p>کوٹ</p>
            Type: {{ $value->type }} <br>
            Customer ID: {{ $value->customerID }} <br>
            {{ $value->name }}
        @endforeach
    </h1>
   

    <div class="container" style="height: 600px;">
        <div class="row">
            <!-- <div class="col-sm-6">
                <img src="{{ asset('/smtailors.png') }}" alt="registerlogo" width="330" height="450"
                    class="img-responsive text-center mt-5">
            </div> -->
            
            <div class="col-sm-6 offset-md-3">
                @foreach ($data as $value)
                    <div class="text-center mt-5">

                        <h5 style="font-size: 27px;">
                            {{ $value->length }} -:لمبائی<br>
                            {{ $value->tira }} -:تیرا <br>
                            {{$value->bazu}} -: بازو <br>
                            {{ $value->gala }} -:گلا <br>
                            {{ $value->chati }} -:چھاتی<br>
                            {{ $value->gap }} -:گیپ <br>
                            {{ $value->kamar }} -:کمر<br>
                            {{ $value->hip }} -:ہپ<br>
                            {{ $value->half_back }} -:   ہاف بیک  <br>
                            {{ $value->cros_back }} -:   کراس بیک    <br>
                            {{ $value->dola }} -: ڈولا  <br>
                            {{ $value->side_chaak }} -: سائڈ چاک   <br>

                            {{ $value->napail_size }} -:نپیل سائز <br>
                            {{ $value->gheri }} -:گھیرا <br>
                            {{ $value->style }} -:اسٹائل   <br>
                            

                            
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

  
@endsection

@section('scripts')

@endsection
