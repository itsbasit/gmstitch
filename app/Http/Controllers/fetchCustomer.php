<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class fetchCustomer extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;

        // $data = Customer::where('customreID', $id);
        $data = Customer::where('customerID', '=', $id)->first();

        echo $data->name;
        exit;

    }
}
