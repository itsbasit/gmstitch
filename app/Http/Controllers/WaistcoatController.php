<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaistCoatModel;
use Yajra\DataTables\DataTables;

class WaistcoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = WaistCoatModel::get();
        // dd($data);
        if($request->ajax()){
            $data = WaistCoatModel::get();
            
           return DataTables::of($data) 
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="waistcoat/'.$row->id.'/edit" class="btn btn-success btn-sm showbtn">Update <i class="fas fa-file-alt"></i></a>';
                    // $btn .= '&nbsp;<a href="downloadinvoice/'.$row->id.'" class="btn btn-success btn-sm showbtn">Print <i class="fas fa-file-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('waistcoat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createwaistcoat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coat = new WaistCoatModel;
        $coat->customerID = $request->customerID;
        $coat->length = $request->lambai;
        $coat->tira = $request->tira;
        $coat->gala = $request->gala;
        $coat->chati = $request->chati;
        $coat->pait = $request->pait;
        $coat->kamar = $request->kamar;
        $coat->hip = $request->hip;
        $coat->gap = $request->gap;
        $coat->bain = $request->bain;
        $coat->gheri = $request->gheri;
        $coat->design = $request->design;
        $coat->karhai = $request->karhai;

        $coat->save();
        return redirect()->route('waistcoat.index')->with('success', 'Invoice Created Successfully');
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
        $waistcoat = WaistCoatModel::find($id);
        
        return view('updatewaistcoat', compact('waistcoat'));
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
        $coat = WaistCoatModel::find($id);
        $coat->customerID = $request->customerID;
        $coat->length = $request->lambai;
        $coat->tira = $request->tira;
        $coat->gala = $request->gala;
        $coat->chati = $request->chati;
        $coat->pait = $request->pait;
        $coat->kamar = $request->kamar;
        $coat->hip = $request->hip;
        $coat->gap = $request->gap;
        $coat->bain = $request->bain;
        $coat->gheri = $request->gheri;
        $coat->design = $request->design;
        $coat->karhai = $request->karhai;
        $coat->update();
        return redirect()->route('waistcoat.index')->with('success', 'WaistCoat Updated Successfully');
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
        WaistCoatModel::where('id', $id)->delete();
        // $invoice->delete();
        return response()->json("success");
    }
}
