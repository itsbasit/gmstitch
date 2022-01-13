<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = Orders::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-danger btn-sm dltbtn">Delete  <i class="fas fa-trash-alt"></i></a>';
                    // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn">Delete  <i class="fas fa-edit"></i></a>';
                    $btn = '<a href="order/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn"><i class="fas fa-edit"></i></a>';
                    // $btn .='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt"><i class="fas fa-trash-alt"></i></a>';
                    // $btn .= '&nbsp;<a href="order/'.$row->id.'" class="btn btn-success btn-sm showbtn"><i class="fas fa-file-alt"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $order = Orders::all();
            return view('order.order', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.createorder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=new Orders;
        $order->id=$request->id;
        $order->no_of_suit=$request->no_of_suit;
        $order->suit_type=$request->suit_type;
        $order->delivered=$request->delivered;
        $order->rack=$request->rack;
        $order->total_price=$request->total_price;
        $order->paid_price=$request->paid_price;
        $order->booking_date=$request->booking_date;
        $order->delivery_date=$request->delivery_date;

        $order->save();

        return redirect()->route('order.index')->with('success', 'Order Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Orders::find($id);
        // dd($stock);
        return view('order.updateorder', compact('order'));
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
        $order = Orders::find($id);
        $order->id=$request->id;
        $order->no_of_suit=$request->no_of_suit;
        $order->suit_type=$request->suit_type;
        $order->delivered=$request->delivered;
        $order->rack=$request->rack;
        $order->total_price=$request->total_price;
        $order->paid_price=$request->paid_price;
        $order->booking_date=$request->booking_date;
        $order->delivery_date=$request->delivery_date;
        $order->update();

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $Order)
    {
        $Order->delete();
        return response()->json("success");
    }
}
