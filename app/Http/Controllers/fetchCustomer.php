<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\ShirtModel;
use App\Models\CoatModel;
use App\Models\PantSizeModel;
use App\Models\WaistCoatModel;

class fetchCustomer extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $type = $request->type;

        if($type == 'customer')
        {
        $data = Customer::where('customerID', '=', $id)->first();
        } elseif ($type == 'shirt') {
        $data = ShirtModel::where('customerID', '=', $id)->first();
        } elseif ($type == 'waistcoat') {
        $data = WaistCoatModel::where('customerID', '=', $id)->first();
        } else {
        $data = CoatModel::where('customerID', '=', $id)->first();
        }
        echo $data->name;
        exit;

    }

    public function getInvoice(Request $request)
    {
        $type = $request->type;
        if($type == 'customer')
        {
        $data = Customer::all();
        } elseif ($type == 'shirt') {
        $data = ShirtModel::all();
        } elseif ($type == 'waistcoat') {
        $data = WaistCoatModel::all();
        } else {
        $data = CoatModel::all();
        }

        if($data)
        {
            echo $data;
        } else {
            echo 'empty';
        }
     
        exit;

    }
}
