<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Yajra\DataTables\DataTables;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = Stock::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-danger btn-sm dltbtn">Delete  <i class="fas fa-trash-alt"></i></a>';
                    // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn">Delete  <i class="fas fa-edit"></i></a>';
                    $btn = '<a href="stock/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn"><i class="fas fa-edit"></i></a>';
                    $btn .='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt"><i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="stock/'.$row->id.'" class="btn btn-success btn-sm showbtn"><i class="fas fa-file-alt"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $stk = Stock::all();
            return view('stock.stock', compact('stk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.createstock');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock=new Stock;
        $stock->brand=$request->brand;
        $stock->brandtype=$request->brandtype;
        $stock->quantity=$request->quantity;
        $stock->buyingprice=$request->buyingprice;
        $stock->sellingprice=$request->sellingprice;

        $stock->save();

        return redirect()->route('stock.index')->with('success', 'Stock Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            $data = Stock::where('id', '=', $id)->get();
                return view('stock.showreport', compact('data'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $stock = Stock::find($id);
        // dd($stock);
        return view('stock.updatestock', compact('stock'));
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
    
        $stock = Stock::find($id);
        $stock->brand=$request->brand;
        $stock->brandtype=$request->brandtype;
        $stock->quantity=$request->quantity;
        $stock->buyingprice=$request->buyingprice;
        $stock->sellingprice=$request->sellingprice;
        $stock->update();

        return redirect()->route('stock.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        $stock->delete();
        return response()->json("success");
    }
}
