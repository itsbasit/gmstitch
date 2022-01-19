<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceModel;
use App\Models\Customer;
use Yajra\DataTables\DataTables;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->ajax()){
            $data = InvoiceModel::get();
            
           return DataTables::of($data) 
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="invoice/'.$row->id.'/edit" class="btn btn-success btn-sm showbtn">Update <i class="fas fa-file-alt"></i></a>';
                    $btn .= '&nbsp;<a href="invoice/'.$row->id.'" class="btn btn-success btn-sm showbtn">Print <i class="fas fa-file-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('invoice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo $type;
        $data = Customer::get(['customerID']);
        return view('createinvoice', compact('data'));
    }


    public function getInvoice()
    {
        echo 'hi there';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        $invoice= new InvoiceModel;
        $invoice->customerID=$request->customerID;
        $invoice->name=$request->name;
        $invoice->bookingDate=$request->currentdate;
        $invoice->deliveryDate=$request->returndate;
        $invoice->advance=$request->advance;
        $invoice->discount=$request->discount;

        $invoice->save();
        return redirect()->route('invoice.index')->with('success', 'Invoice Created Successfully');
  
    } catch (\Throwable $error) {
        return redirect()->route('invoice.index')->with('error','Something went wrong');
    }    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = InvoiceModel::find($id);

        return view('invoicepdf', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = InvoiceModel::find($id);
        $data = Customer::get(['customerID']);
        return view('updateInvoice', compact('invoice','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = InvoiceModel::find($id);
        $invoice->customerID=$request->customerID;
        $invoice->name=$request->name;
        $invoice->bookingDate=$request->currentdate;
        $invoice->deliveryDate=$request->returndate;
        $invoice->advance=$request->advance;
        $invoice->discount=$request->discount;

        $invoice->update();
        return redirect()->route('invoice.index')->with('success', 'Invoice Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        InvoiceModel::where('id', $id)->delete();
        // $invoice->delete();
        return response()->json("success");
    }

}
