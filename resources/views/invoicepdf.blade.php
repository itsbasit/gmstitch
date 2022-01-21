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
        <a href="{{ route('invoice.index') }}" class="btn btn-primary rounded-pill mt-4 ml-3"> Back To List</a>
    </div>
    <div class="container">
        <div class="text-right">
            <a href="" class="btn btn-danger p-2" onclick="window.print()">Print File</a>
        </div>

    </div>
            <div class="img-responsive text-center mb-3">
        <img src="{{ asset('/brandlogo.png') }}" alt="registerlogo" width="200" height="200">
        </div>
        

<table width="80%" border="0" style="margin-left:auto;margin-right:auto; margin-top:5%" cellspacing="0" cellpadding="0">
  
<tr>
<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">
<h2>Thank you for Shopping</h2>
  </tr>

  <tr>
    <td colspan="2"> </td>
  </tr>
  <tr>
    <td width="49%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Invoice</td>
          </tr>
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">Invoice Number: {{$id}}</td>
          </tr>
          <tr>
            <td> </td>
          </tr>
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Service Provider </td>
          </tr>
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">SM Tailors and Drapers</td>
          </tr>
          
          <tr>
            <td> </td>
          </tr>
          
          <tr>
            <td> </td>
          </tr>
          </table></td>
      </tr>
    </table></td>
    <td width="51%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right"></td>
      </tr>
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right"> </td>
      </tr>
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:16px;"  align="right">Invoice Date : {{date("Y/m/d")}}</td>
      </tr>

      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:16px;" align="right">{{$name}}</td>
      </tr>
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:16px;" align="right">Customer ID {{$customerID}}</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td colspan="2"> </td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" width="20%" height="32" align="center">Booking Date</td>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="20%" align="center">Delivery Date</td>
        
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" width="20%" align="center">Advance</td>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" width="20%" align="center">Discount</td>
      </tr>
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" height="32" align="center">{{$bookingDate}}</td>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333;" align="center">{{$deliveryDate}}</td>
        
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" align="center">{{$advance}}</td>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" align="center">{{$discount}}</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"> </td>
  </tr>

</table>

 
@endsection

@section('scripts')

@endsection
