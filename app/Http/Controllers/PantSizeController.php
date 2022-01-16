<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PantSizeModel;
use Yajra\DataTables\DataTables;

class PantSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = PantSizeModel::get();
            
           return DataTables::of($data) 
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="pantsize/'.$row->id.'/edit" class="btn btn-success btn-sm showbtn">Update <i class="fas fa-file-alt"></i></a>';
                    // $btn .= '&nbsp;<a href="downloadinvoice/'.$row->id.'" class="btn btn-success btn-sm showbtn">Print <i class="fas fa-file-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pantsize.pantsize');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pantsize.createpantsize');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pant = new PantSizeModel;
        $pant->kamar = $request->kamar;
        $pant->hip = $request->hip;
        $pant->length = $request->length;
        $pant->body = $request->body;
        $pant->thai = $request->thai;
        $pant->goda = $request->goda;
        $pant->mori = $request->mori;
        $pant->front_pocket = $request->front_pocket;
        $pant->back_pocket = $request->back_pocket;
        $pant->pancha = $request->pancha;
        $pant->save();

        return redirect()->route('pantsize.index')->with('success','PantSize Created Successfully!');
        // return redirect()->route('customer.index')->with('success', 'Customer Entered Successfully');
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
        $data = PantSizeModel::find($id);
        return view('pantsize.updatepantsize', compact('data'));
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
        $pant = PantSizeModel::find($id);
        $pant->kamar = $request->kamar;
        $pant->hip = $request->hip;
        $pant->length = $request->length;
        $pant->body = $request->body;
        $pant->thai = $request->thai;
        $pant->goda = $request->goda;
        $pant->mori = $request->mori;
        $pant->front_pocket = $request->front_pocket;
        $pant->back_pocket = $request->back_pocket;
        $pant->pancha = $request->pancha;
        $pant->update();

        return redirect()->route('pantsize.index')->with('success','PantSize Updated Successfully!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PantSizeModel::where('id', $id)->delete();
        // $invoice->delete();
        return response()->json("success");
    }
}
