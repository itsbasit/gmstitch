<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customerstock;
use Yajra\DataTables\DataTables;

class CustomerstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->ajax()){
            $data = Customerstock::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-danger btn-sm dltbtn">Delete  <i class="fas fa-trash-alt"></i></a>';
                    // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn">Delete  <i class="fas fa-edit"></i></a>';
                    // $btn = '<a href="stock/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn">Update <i class="fas fa-edit"></i></a>';
                    // $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn = '&nbsp;<a href="stockcustomer/'.$row->id.'" class="btn btn-success btn-sm showbtn">Reciept <i class="fas fa-file-alt"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $stkcus = Customerstock::all();
            return view('stock.customerstock', compact('stkcus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.createstockcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Customerstock=new Customerstock;
        $Customerstock->name=$request->name;
        $Customerstock->brand=$request->brand;
        $Customerstock->brandtype=$request->brandtype;
        $Customerstock->quantity=$request->quantity;
        $Customerstock->price=$request->price;
        $Customerstock->totalprice = $request->quantity * $request->price;

        $Customerstock->save();

        return redirect()->route('stockcustomer.index')->with('success', 'Stock Entered Successfully');
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
            $data = Customerstock::where('id', '=', $id)->get();
                return view('stock.showstockcustomerreport', compact('data'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cusstock $cusstock)
    {
        // $cusstock->delete();
        // return response()->json("success");
    }
}
