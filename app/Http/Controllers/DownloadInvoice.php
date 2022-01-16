<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceModel;
use PDF;
// use App\Models\Customer;

class DownloadInvoice extends Controller
{
    public function index($id)
    {
        set_time_limit(300);
        $data = InvoiceModel::find($id);

        // return view('invoicepdf', $data);
        
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);

        $pdf = \PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        
         
        $pdf = PDF::loadView('invoicepdf', $data);
    
        return $pdf->download('smtailorsInvoice.pdf');
    }
}
