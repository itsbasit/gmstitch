<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShirtModel;
use Yajra\DataTables\DataTables;

class ShirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->ajax()){
            $data = ShirtModel::get();
           return DataTables::of($data) 
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="shirt/'.$row->id.'/edit" class="btn btn-success btn-sm showbtn">Update <i class="fas fa-file-alt"></i></a>';
                    $btn .= '&nbsp;<a href="shirt/'.$row->id.'" class="btn btn-primary btn-sm editbtn">SIZE CHART <i class="fas fa-edit"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('shirt.shirt');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shirt.createshirt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $shirt= new ShirtModel;
        $shirt->customerID=$request->customerID;
        $shirt->name=$request->name;
        $shirt->mobile=$request->mobile;
        $shirt->side_chaak=$request->side_chaak;
        $shirt->front_patti_design=$request->front_patti_design;
        $shirt->lambai=$request->lambai;
        $shirt->calar=$request->calar;
        $shirt->tira=$request->tira;
        $shirt->bain=$request->bain;
        $shirt->gala=$request->gala;
        $shirt->cuff2=$request->cuff2;
        $shirt->front_patti=$request->front_patti;
        $shirt->astin=$request->astin;
        $shirt->bazu=$request->bazu;
        $shirt->cuff=$request->cuff;
        $shirt->colar=$request->calarsize;
        $shirt->patti=$request->patti;
        $shirt->chatti=$request->chatti;
        $shirt->gheri=$request->gheri;
        $shirt->design=$request->design;
        $shirt->pait=$request->pait;
        $shirt->silai=$request->silai;
        $shirt->side_pocket=$request->side_pocket;
        $shirt->front_pocket=$request->front_pocket;
        $shirt->front_pocket_design=$request->front_pocket_design;
        $shirt->kamar=$request->kamar;
        $shirt->hip=$request->hip;
        $shirt->cuffsize=$request->cuffsize;
        $shirt->moda=$request->moda;
        $shirt->karhai=$request->karhai;
        // $shirt->poncha=$request->poncha;
        $shirt->stitcher=$request->stitcher;
        $shirt->tayar1=$request->tayar1;
        $shirt->tayar2=$request->tayar2;
        $shirt->tayar3=$request->tayar3;
        $shirt->cutter=$request->cutter;
        $shirt->enteredby=$request->enteredby;
        $shirt->downshoulder=$request->downshoulder;
        $shirt->konisize=$request->konisize;
        $shirt->total_price=$request->total_price;
        $shirt->save();

        $shirt->total_price=$shirt->total_price - ($shirt->discount +  $shirt->advance );
        $shirt->update();

        return redirect()->route('shirt.index')->with('success', 'Shirt Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ShirtModel::where('id', '=', $id)->get();
        return view('shirt.shirtchart', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = ShirtModel::find($id);
        return view('shirt.updateshirt', compact('customer'));
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
        $shirt= ShirtModel::find($id);
        $shirt->customerID=$request->customerID;
        $shirt->name=$request->name;
        $shirt->mobile=$request->mobile;
        $shirt->side_chaak=$request->side_chaak;
        $shirt->front_patti_design=$request->front_patti_design;
        $shirt->lambai=$request->lambai;
        $shirt->calar=$request->calar;
        $shirt->tira=$request->tira;
        $shirt->bain=$request->bain;
        $shirt->gala=$request->gala;
        $shirt->cuff2=$request->cuff2;
        $shirt->front_patti=$request->front_patti;
        $shirt->astin=$request->astin;
        $shirt->bazu=$request->bazu;
        $shirt->cuff=$request->cuff;
        $shirt->colar=$request->calarsize;
        $shirt->patti=$request->patti;
        $shirt->chatti=$request->chatti;
        $shirt->gheri=$request->gheri;
        $shirt->design=$request->design;
        $shirt->pait=$request->pait;
        $shirt->silai=$request->silai;
        $shirt->side_pocket=$request->side_pocket;
        $shirt->front_pocket=$request->front_pocket;
        $shirt->front_pocket_design=$request->front_pocket_design;
        $shirt->kamar=$request->kamar;
        $shirt->hip=$request->hip;
        $shirt->cuffsize=$request->cuffsize;
        $shirt->moda=$request->moda;
        $shirt->karhai=$request->karhai;
        // $shirt->poncha=$request->poncha;
        $shirt->stitcher=$request->stitcher;
        $shirt->tayar1=$request->tayar1;
        $shirt->tayar2=$request->tayar2;
        $shirt->tayar3=$request->tayar3;
        $shirt->cutter=$request->cutter;
        $shirt->enteredby=$request->enteredby;
        $shirt->downshoulder=$request->downshoulder;
        $shirt->konisize=$request->konisize;
        $shirt->total_price=$request->total_price;
        $shirt->update();

        return redirect()->route('shirt.index')->with('success', 'Shirt Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShirtModel::where('id', $id)->delete();
        return response()->json("success");
    }
}
