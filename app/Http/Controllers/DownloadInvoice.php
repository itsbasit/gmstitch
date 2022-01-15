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
        
        $data = InvoiceModel::find($id);
         
        $pdf = PDF::loadView('invoicepdf', $data);
    
        return $pdf->download('smtailorsInvoice.pdf');
    }
}
