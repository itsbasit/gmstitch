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
        // set_time_limit(300);
        // $data = InvoiceModel::find($id);

        // return view('invoicepdf', $data);
    
    }
}
